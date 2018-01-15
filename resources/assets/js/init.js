/**
 * Created by eazypen on 1/13/2018.
 */
(function () {
    // Menu Toggle For Mobile
    document.querySelector(".menu-toggle i").addEventListener("click", App.menuToggleFunction);
    // Scrolling Event
    window.onscroll = function() {
        App.stickyNav();
        App.showGoToTop();
    };
    // Form Validation
    document.querySelectorAll('input, textarea').forEach(function(input) {
        input.addEventListener('blur', Form.validate);
    });

    document.getElementById('feedback').addEventListener('submit', Form.submit);
    document.getElementById('phone').addEventListener('keydown', Form.ForceNumericOnly);
})();