import "./contact";

(function () {
    const navbar = document.getElementById("navbar");
    const sentinel = document.getElementById("scroll-sentinel");
    const logo = document.getElementById("navbar-logo");

    if (!navbar || !sentinel || !logo) return;

    const mobileQuery = window.matchMedia("(max-width: 960px)");
    const alwaysGreen = logo.dataset.alwaysGreen === "true";

    let isSentinelVisible = true;

    function updateNavbar() {
        const isScrolled = !isSentinelVisible;

        navbar.classList.toggle("scrolled", isScrolled);

        const useGreenLogo = mobileQuery.matches || alwaysGreen || isScrolled;

        logo.src = useGreenLogo
            ? logo.dataset.logoGreen
            : logo.dataset.logoWhite;
    }

    const observer = new IntersectionObserver(
        ([entry]) => {
            // entries.forEach((entry) => {
            //     // Jika pemicu (sentinel) TIDAK terlihat di layar = halaman sedang discroll ke bawah
            //     if (!entry.isIntersecting) {
            //         navbar.classList.add("scrolled");
            //         logo.src = logo.dataset.logoGreen;
            //     } else {
            //         navbar.classList.remove("scrolled");
            //         logo.src = logo.dataset.logoWhite;
            //     }
            // });
            isSentinelVisible = entry.isIntersecting;
            updateNavbar();
        },
        {
            root: null, // memantau viewport utama
            threshold: 0,
        },
    );

    observer.observe(sentinel);
    mobileQuery.addEventListener("change", updateNavbar);

    updateNavbar();
})();

// RESPONSIVE NAVBAR
document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("mobileMenuBtn");
    const wrapper = document.getElementById("pillWrapper");
    const overlay = document.getElementById("navOverlay");

    // if (btn && wrapper) {
    //     btn.addEventListener('click', function (e) {
    //         e.stopPropagation();
    //         btn.classList.toggle('active');
    //         wrapper.classList.toggle('is-open')
    //     });

    //     // Tutup menu jika pengguna mengklik area di luar menu
    //     document.addEventListener('click', function (e) {
    //         if (!btn.contains(e.target) && !dropdown.contains(e.target)) {
    //             btn.classList.remove('active');
    //             dropdown.classList.remove('is-open');
    //         }
    //     });
    // }

    function toggleMenu() {
        const isOpen = wrapper.classList.toggle("is-open");
        btn.classList.toggle("active", isOpen);
        overlay.classList.toggle("active", isOpen);
    }

    function closeMenu() {
        wrapper.classList.remove("is-open");
        btn.classList.remove("active");
        overlay.classList.remove("active");
    }

    if (btn && wrapper && overlay) {
        // Toggle saat tombol hamburger diklik
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            toggleMenu();
        });

        // Tutup menu jika klik area luar / overlay
        overlay.addEventListener("click", function () {
            closeMenu();
        });
    }
});

// IMPACT ANIMATION

document.addEventListener("DOMContentLoaded", () => {
    const observerOptions = {
        root: null,
        rootMargin: "0px 0px -50px 0px", // Trigger sedikit sebelum elemen masuk penuh
        threshold: 0.15,
    };

    const scrollObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target); // Animasi dipicu sekali saja
            }
        });
    }, observerOptions);

    // Targetkan semua elemen bertag .animate-scroll
    const animatedElements = document.querySelectorAll(".animate-scroll");
    animatedElements.forEach((el) => scrollObserver.observe(el));
});

// SLIDER

document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById("sliderTrack");
    const slides = Array.from(track.children);
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const dotsContainer = document.getElementById("dotsContainer");
    const sliderContainer = document.getElementById("imageSlider");

    let currentIndex = 0;
    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID = 0;

    // 1. Generate Dynamic Dots Indicator
    slides.forEach((_, index) => {
        const dot = document.createElement("div");
        dot.classList.add("dot");
        if (index === 0) dot.classList.add("active");
        dot.addEventListener("click", () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    const dots = Array.from(dotsContainer.children);

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        currentTranslate = currentIndex * -sliderContainer.clientWidth;
        prevTranslate = currentTranslate;
        track.style.transform = `translateX(${currentTranslate}px)`;
        updateDots();
    }

    // 2. Navigation Button Events
    nextBtn.addEventListener("click", () => {
        if (currentIndex < slides.length - 1) goToSlide(currentIndex + 1);
        else goToSlide(0); // Loop back to start
    });

    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) goToSlide(currentIndex - 1);
        else goToSlide(slides.length - 1);
    });

    // 3. Touch & Mouse Swipe Handlers
    sliderContainer.addEventListener("touchstart", touchStart(0));
    sliderContainer.addEventListener("touchend", touchEnd);
    sliderContainer.addEventListener("touchmove", touchMove);

    sliderContainer.addEventListener("mousedown", touchStart(0));
    sliderContainer.addEventListener("mouseup", touchEnd);
    sliderContainer.addEventListener("mouseleave", touchEnd);
    sliderContainer.addEventListener("mousemove", touchMove);

    function touchStart(index) {
        return function (event) {
            isDragging = true;
            startX = getPositionX(event);
            animationID = requestAnimationFrame(animation);
        };
    }

    function touchMove(event) {
        if (isDragging) {
            const currentPosition = getPositionX(event);
            currentTranslate = prevTranslate + currentPosition - startX;
        }
    }

    function touchEnd() {
        isDragging = false;
        cancelAnimationFrame(animationID);
        const movedBy = currentTranslate - prevTranslate;

        // Snap Threshold: Jika swipe lebih dari 50px, ganti slide
        if (movedBy < -50 && currentIndex < slides.length - 1)
            currentIndex += 1;
        if (movedBy > 50 && currentIndex > 0) currentIndex -= 1;

        goToSlide(currentIndex);
    }

    function getPositionX(event) {
        return event.type.includes("mouse")
            ? event.clientX
            : event.touches[0].clientX;
    }

    function animation() {
        if (isDragging) {
            track.style.transform = `translateX(${currentTranslate}px)`;
            requestAnimationFrame(animation);
        }
    }

    // Handle Resize Window
    window.addEventListener("resize", () => goToSlide(currentIndex));
});

// IMAGE FULL

document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    const lightboxModal = document.getElementById("lightboxModal");
    const lightboxImg = document.getElementById("lightboxImg");
    const lightboxCaption = document.getElementById("lightboxCaption");
    const lightboxClose = document.getElementById("lightboxClose");
    const lightboxPrev = document.getElementById("lightboxPrev");
    const lightboxNext = document.getElementById("lightboxNext");

    // Kumpulkan data gambar
    const imageData = Array.from(slides).map((slide) => {
        const img = slide.querySelector("img");
        return {
            src: img ? img.src : "",
            alt: img ? img.alt : "",
        };
    });

    let currentLightboxIndex = 0;
    let isImageLoading = false; // Flag status loading untuk mencegah spam klik
    let isDragging = false;
    let startX = 0;

    // Deteksi drag/swipe di Slider Utama
    const sliderTrack = document.getElementById("sliderTrack");
    if (sliderTrack) {
        sliderTrack.addEventListener("mousedown", (e) => {
            isDragging = false;
            startX = e.clientX;
        });

        sliderTrack.addEventListener("mousemove", (e) => {
            if (Math.abs(e.clientX - startX) > 10) isDragging = true;
        });

        sliderTrack.addEventListener(
            "touchstart",
            (e) => {
                isDragging = false;
                startX = e.touches[0].clientX;
            },
            { passive: true },
        );

        sliderTrack.addEventListener(
            "touchmove",
            (e) => {
                if (Math.abs(e.touches[0].clientX - startX) > 10)
                    isDragging = true;
            },
            { passive: true },
        );
    }

    // Preload Gambar Kanan dan Kiri di Background (Cache Optimization)
    const preloadAdjacentImages = (centerIndex) => {
        if (imageData.length <= 1) return;
        const nextIdx = (centerIndex + 1) % imageData.length;
        const prevIdx = (centerIndex - 1 + imageData.length) % imageData.length;

        [nextIdx, prevIdx].forEach((idx) => {
            if (imageData[idx] && imageData[idx].src) {
                const imgPreload = new Image();
                imgPreload.src = imageData[idx].src;
            }
        });
    };

    // Switch Gambar Lightbox dengan Validasi Loading Jaringan
    const showLightboxImage = (index) => {
        if (imageData.length === 0 || isImageLoading) return;

        const targetIndex = (index + imageData.length) % imageData.length;
        const targetData = imageData[targetIndex];

        isImageLoading = true;
        lightboxModal.classList.add("is-loading");
        lightboxImg.classList.add("fade-effect");

        // Buat objek gambar sementara di memory untuk memantau unduhan di koneksi lambat
        const tempImg = new Image();
        tempImg.src = targetData.src;

        tempImg.onload = () => {
            currentLightboxIndex = targetIndex;
            lightboxImg.src = targetData.src;
            lightboxCaption.textContent = targetData.alt;

            lightboxImg.classList.remove("fade-effect");
            lightboxModal.classList.remove("is-loading");
            isImageLoading = false;

            // Otomatis preload gambar sebelum & sesudah agar perpindahan berikutnya instant
            preloadAdjacentImages(targetIndex);
        };

        tempImg.onerror = () => {
            // Handled jika gambar gagal dimuat akibat koneksi terputus
            lightboxModal.classList.remove("is-loading");
            lightboxImg.classList.remove("fade-effect");
            isImageLoading = false;
        };
    };

    // Buka Lightbox pada Index yang Diklik
    slides.forEach((slide, index) => {
        slide.addEventListener("click", () => {
            if (isDragging) return;
            showLightboxImage(index);
            lightboxModal.classList.add("active");
            document.body.style.overflow = "hidden";
        });
    });

    // Navigasi Next & Prev
    const nextLightbox = () => showLightboxImage(currentLightboxIndex + 1);
    const prevLightbox = () => showLightboxImage(currentLightboxIndex - 1);

    lightboxNext.addEventListener("click", (e) => {
        e.stopPropagation();
        nextLightbox();
    });

    lightboxPrev.addEventListener("click", (e) => {
        e.stopPropagation();
        prevLightbox();
    });

    // Fitur Swipe di Lightbox
    let lbStartX = 0;
    let lbEndX = 0;

    lightboxModal.addEventListener(
        "touchstart",
        (e) => {
            lbStartX = e.touches[0].clientX;
        },
        { passive: true },
    );

    lightboxModal.addEventListener(
        "touchend",
        (e) => {
            lbEndX = e.changedTouches[0].clientX;
            const diff = lbStartX - lbEndX;
            if (Math.abs(diff) > 40) {
                if (diff > 0) nextLightbox();
                else prevLightbox();
            }
        },
        { passive: true },
    );

    // Event Stop Propagation
    const preventPropagation = (selector) => {
        document.querySelectorAll(selector).forEach((el) => {
            el.addEventListener("click", (e) => e.stopPropagation());
        });
    };
    preventPropagation(".nav-arrow");
    preventPropagation(".hero-info-card");
    preventPropagation(".slider-indicators");

    // Tutup Lightbox
    const closeLightbox = () => {
        lightboxModal.classList.remove("active");
        document.body.style.overflow = "";
    };

    lightboxClose.addEventListener("click", closeLightbox);
    lightboxModal.addEventListener("click", (e) => {
        if (e.target === lightboxModal) closeLightbox();
    });

    // Navigasi Keyboard
    document.addEventListener("keydown", (e) => {
        if (!lightboxModal.classList.contains("active")) return;
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowRight") nextLightbox();
        if (e.key === "ArrowLeft") prevLightbox();
    });
});

// SCHEDULE TAB

const scheduleTabs = document.querySelectorAll(".schedule-tab");
const schedulePanels = document.querySelectorAll(".schedule-panel");

scheduleTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const scheduleId = tab.dataset.schedule;

        scheduleTabs.forEach((item) => {
            item.classList.remove("is-active");
        });

        schedulePanels.forEach((panel) => {
            panel.classList.remove("is-active");
        });

        tab.classList.add("is-active");

        const targetPanel = document.querySelector(
            `[data-schedule-panel="${scheduleId}"]`,
        );

        targetPanel?.classList.add("is-active");
    });
});
