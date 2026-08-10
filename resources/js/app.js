(function () {
    const navbar = document.getElementById("navbar");
    const sentinel = document.getElementById("scroll-sentinel");

    if (!navbar || !sentinel) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                // Jika pemicu (sentinel) TIDAK terlihat di layar = halaman sedang discroll ke bawah
                if (!entry.isIntersecting) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });
        },
        {
            root: null, // memantau viewport utama
            threshold: 0,
        },
    );

    observer.observe(sentinel);
})();

document.addEventListener("DOMContentLoaded", () => {
    const btnToggle = document.getElementById("btnToggle");
    const navDock = document.getElementById("navDock");
    const menuBackdrop = document.getElementById("menuBackdrop");

    function toggleMenu() {
        navDock.classList.toggle("open");
        menuBackdrop.classList.toggle("active");
    }

    if (btnToggle) {
        btnToggle.addEventListener("click", toggleMenu);
        menuBackdrop.addEventListener("click", toggleMenu);
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
