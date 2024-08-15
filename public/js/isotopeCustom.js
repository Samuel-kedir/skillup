(function ($) {
    "use strict";

    // Page loading animation
    $(window).on("load", function () {
        $("#js-preloader").addClass("loaded");

        // Initialize Isotope after the page loads
        initializeIsotope();
    });

    function initializeIsotope() {
        const elem = document.querySelector(".event_box");
        const filtersElem = document.querySelector(".event_filter");

        if (elem) {
            const rdn_events_list = new Isotope(elem, {
                itemSelector: ".event_outer",
                layoutMode: "fitRows",
                filter: ".featured",
                percentPosition: true,
                masonry: {
                    columnWidth: ".event_outer", // Adjust this as needed
                },
            });

            if (filtersElem) {
                filtersElem.addEventListener("click", function (event) {
                    if (!matchesSelector(event.target, "a")) {
                        return;
                    }
                    const filterValue =
                        event.target.getAttribute("data-filter");
                    rdn_events_list.arrange({
                        filter: filterValue,
                    });
                    filtersElem
                        .querySelector(".is_active")
                        .classList.remove("is_active");
                    event.target.classList.add("is_active");
                    event.preventDefault();
                });
            }

            // Recalculate Isotope layout on window resize
            $(window).resize(function () {
                rdn_events_list.layout(); // Force layout recalculation
            });
        }
    }

    // Initialize Isotope on document ready (in case of dynamic content)
    $(document).ready(function () {
        initializeIsotope();
    });

    // Other existing code...
})(window.jQuery);
