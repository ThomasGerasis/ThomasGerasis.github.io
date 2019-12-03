<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

        if ("IntersectionObserver" in window) {
            let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        lazyBackgroundObserver.unobserve(entry.target);
                    }
                });
            });

            lazyBackgrounds.forEach(function(lazyBackground) {
                lazyBackgroundObserver.observe(lazyBackground);
            });
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        // lazyImage.srcset = lazyImage.dataset.srcset;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        } else {
            // Possibly fall back to a more compatible method here
        }
    });
</script>
<noscript id="deferred-styles">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/styles/below.css'?>">
    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri().'/assets/fonts/RobotoCondensed-Bold.woff2'?>" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri().'/assets/fonts/RobotoCondensed-Regular.woff2'?>" crossorigin>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
</noscript>
<script>

    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>


<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script defer src="<?php echo get_template_directory_uri().'/assets/js/scripts.min.js'?>"></script>


</body>
</html>