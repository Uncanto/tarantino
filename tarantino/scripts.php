<body>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Menu Script -->
    <script>
        let currentPageUrl = window.location.href;
        if (currentPageUrl.includes("index.php")) {
            document.getElementById("index").classList.add("current");
        } else if (currentPageUrl.includes("1_biografia.php")) {
            document.getElementById("biografia").classList.add("current");
        } else if (currentPageUrl.includes("2_film.php")) {
            document.getElementById("film").classList.add("current");
        } else if (currentPageUrl.includes("3_curiosita.php")) {
            document.getElementById("curiosita").classList.add("current");
        } else if (currentPageUrl.includes("4_musica.php")) {
            document.getElementById("musica").classList.add("current");
        }
    </script>

    <!-- Return Button -->
    <script>
        function history_back() {
            window.history.back();
        }
    </script>

    <!-- Data AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- FastBootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Flickity -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>