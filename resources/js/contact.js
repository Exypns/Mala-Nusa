// NOTIFICATION

// document.addEventListener("DOMContentLoaded", () => {
//     const successNotification = document.getElementById("successNotification");

//     const errorNotification = document.getElementById("errorNotification");

//     // Success Notification Duration
//     if (successNotification) {
//         setTimeout(() => {
//             hideNotification(successNotification);
//         }, 4000);

//         const closeButton = successNotification.querySelector(
//             ".notification-close",
//         );

//         closeButton?.addEventListener("click", () => {
//             hideNotification(successNotification);
//         });
//     }

//     // Error X button
//     if (errorNotification) {
//         const closeButton = errorNotification.querySelector(
//             ".notification-close",
//         );

//         closeButton?.addEventListener("click", () => {
//             hideNotification(errorNotification);
//         });
//     }
// });

const successNotification = document.getElementById("successNotification");
const successNotificationMessage = document.getElementById(
    "successNotificationMessage",
);
const errorNotification = document.getElementById("errorNotification");
const errorNotificationList = document.getElementById("errorNotificationList");

function showSuccessNotification(message) {
    if (!successNotification) return;

    successNotificationMessage.textContent = message;

    successNotification.classList.remove("hidden", "is-hiding");

    setTimeout(() => {
        hideNotification(successNotification);
    }, 4000);
}

function showErrorNotification(errors) {
    if (!errorNotification || !errorNotificationList) return;

    errorNotificationList.innerHTML = "";

    Object.values(errors)
        .flat()
        .forEach((error) => {
            const li = document.createElement("li");

            li.textContent = error;

            errorNotificationList.appendChild(li);
        });

    errorNotification.classList.remove("hidden", "is-hiding");
}

function hideNotification(notification) {
    notification.classList.add("is-hiding");

    setTimeout(() => {
        notification.classList.add("hidden");
        notification.classList.remove("is-hiding");
    }, 250);
}

document.querySelectorAll(".notification-close").forEach((button) => {
    button.addEventListener("click", () => {
        const notification = button.closest(".form-notification");

        if (notification) {
            hideNotification(notification);
        }
    });
});

// Custom Topic

document.addEventListener("DOMContentLoaded", () => {
    const subjectSelect = document.getElementById("subject");
    const customSubjectGroup = document.getElementById("customSubjectGroup");
    const customSubjectInput = document.getElementById("custom_subject");

    if (!subjectSelect || !customSubjectGroup || !customSubjectInput) {
        return;
    }

    const updateCustomSubject = () => {
        const isOther = subjectSelect.value === "other";

        customSubjectGroup.hidden = !isOther;
        customSubjectInput.required = isOther;

        if (!isOther) {
            customSubjectInput.value = "";
        }
    };

    subjectSelect.addEventListener("change", updateCustomSubject);

    updateCustomSubject();
});

// CUSTOM OPTION

const customSelect = document.getElementById("subjectSelect");

if (customSelect) {
    const trigger = customSelect.querySelector(".custom-select-trigger");
    const valueText = customSelect.querySelector(".custom-select-value");
    const input = customSelect.querySelector("#subject");
    const options = customSelect.querySelectorAll(".custom-select-option");

    trigger.addEventListener("click", () => {
        customSelect.classList.toggle("is-open");

        trigger.setAttribute(
            "aria-expanded",
            customSelect.classList.contains("is-open"),
        );
    });

    options.forEach((option) => {
        option.addEventListener("click", () => {
            input.value = option.dataset.value;
            valueText.textContent = option.textContent.trim();

            customSelect.classList.remove("is-open");
            trigger.setAttribute("aria-expanded", "false");

            input.dispatchEvent(
                new Event("change", {
                    bubbles: true,
                }),
            );
        });
    });

    document.addEventListener("click", (event) => {
        if (!customSelect.contains(event.target)) {
            customSelect.classList.remove("is-open");
            trigger.setAttribute("aria-expanded", "false");
        }
    });
}

// SUBMIT BUTTON STATE

const submitButton = document.getElementById("contactSubmitBtn");
const submitText = submitButton?.querySelector(".submit-btn-text");
const submitLoading = submitButton?.querySelector(".submit-btn-loading");

function setSubmitting(isSubmitting) {
    if (!submitButton) return;

    submitButton.disabled = isSubmitting;

    if (submitText) {
        submitText.classList.toggle("hidden", isSubmitting);
    }

    if (submitLoading) {
        submitLoading.classList.toggle("hidden", !isSubmitting);
    }
}

// RESET FORM

function resetContactForm() {
    contactForm.reset();

    const subjectInput = document.getElementById("subject");
    const subjectSelect = document.getElementById("subjectSelect");

    if (subjectInput) {
        subjectInput.value = "";
    }

    if (subjectSelect) {
        const valueText = subjectSelect.querySelector(".custom-select-value");

        const trigger = subjectSelect.querySelector(".custom-select-trigger");

        valueText.textContent = "Select a topic";

        subjectSelect.classList.remove("is-open");

        trigger?.setAttribute("aria-expanded", "false");

        subjectSelect
            .querySelectorAll(".custom-select-option")
            .forEach((option) => {
                option.classList.remove("is-selected");
            });
    }

    // Custom subject input
    const customSubjectGroup = document.getElementById("customSubjectGroup");

    const customSubjectInput = document.getElementById("custom_subject");

    if (customSubjectGroup) {
        customSubjectGroup.hidden = true;
    }

    if (customSubjectInput) {
        customSubjectInput.value = "";
        customSubjectInput.required = false;
    }
}

// POST

document.addEventListener("DOMContentLoaded", () => {
    const contactForm = document.getElementById("contactForm");

    if (!contactForm) return;

    contactForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        const formData = new FormData(contactForm);

        setSubmitting(true);

        try {
            const response = await fetch(contactForm.action, {
                method: "POST",
                body: formData,
                headers: {
                    Accept: "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                },
            });

            const data = await response.json();

            if (response.status === 422) {
                console.log(data.errors);

                showErrorNotification(data.errors);
                return;
            }

            // ERROR LAIN
            if (!response.ok) {
                showErrorNotification({
                    general: [
                        data.message ??
                            "Something went wrong. Please try again.",
                    ],
                });

                return;
            }

            // success notification
            showSuccessNotification(data.message);
            resetContactForm();
        } catch (error) {
            console.error("Submit error:", error);

            showErrorNotification({
                general: ["Unable to send your message. Please try again."],
            });
        } finally {
            setSubmitting(false);
        }
    });
});
