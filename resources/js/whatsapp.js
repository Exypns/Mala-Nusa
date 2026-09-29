const phoneNumber = "6281138274321";

const messages = {
    book: "Hi Mala Nusa, I'd like to book an experience. Could you help me with the available options and dates?",

    experience:
        "Hi Mala Nusa, I'd love to experience Warloka for myself. Could you help me find the right experience?",

    privateTrip:
        "Hi Mala Nusa, I'm interested in planning a private or custom trip. Could you help me explore the options?",

    impact: "Hi Mala Nusa, I'd love to be part of the next story. Could you tell me how I can get involved?",

    contact: "Hi Mala Nusa, I have a question and would love to get in touch.",
};

document.querySelectorAll("[data-whatsapp-type]").forEach((link) => {
    link.addEventListener("click", (event) => {
        event.preventDefault();

        const type = link.dataset.whatsappType;
        const experienceTitle = link.dataset.experienceTitle ?? "";

        let message;

        if (type === "experienceDetail") {
            message =
                `Hi Mala Nusa, I'm interested in the ${experienceTitle}. ` +
                "\nCould you share more details about availability and booking?";
        } else if (type === "experienceBook") {
            message =
                `Hi Mala Nusa, I'm interested in the ${experienceTitle}. ` +
                "\nI'd like to book this experience. Could you help me with the available dates and next steps?";
        } else {
            message = messages[type];
        }

        if (!message) return;

        const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

        window.open(url, "_blank", "noopener,noreferrer");
    });
});
