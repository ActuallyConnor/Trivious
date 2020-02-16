(function($) {
    $(document).ready(function () {

        $('.hamburger').on('click', function() {
            $(this).toggleClass('is-active');
            $('.main-menu').toggleClass('show');
        });

    });
})(jQuery, this);
