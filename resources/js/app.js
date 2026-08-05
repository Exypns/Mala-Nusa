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
