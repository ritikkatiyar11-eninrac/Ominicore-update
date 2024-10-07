document.addEventListener("DOMContentLoaded", function () {
    var lazyImages;
    if ("IntersectionObserver" in window) {
        lazyImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersection) {
                    var image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyImages.forEach(function (image) {
            imageObserver.observe(image);
        });
    } else { 
        var lazyloadTimeout;
        lazyImages = document.querySelectorAll(".lazy");

        function lazyload() {
            if (lazyloadTimeout) {
                clearTimeout(lazyloadTimeout);
            }

            lazyloadTimeout = setTimeout(function () {
                var scrollTop = window.pageYOffset;
                lazyImages.forEach(function (img) {
                    if (img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });
                // Check if all images have been loaded
                lazyImages = document.querySelectorAll(".lazy");
                if (lazyImages.length === 0) {
                    document.removeEventListener("scroll", lazyload);
                }
            }, 30);
        }

        document.addEventListener("scroll", lazyload);
    }
});
