//========== Accordion controls===========//


jQuery(document).ready(function($) {
    var $window = $(window);
    var $dataItems = $('.dataItems');
    var $farmSection = $('.tab');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize <= 480) {
            //if the window is less than 480px wide then data-models and processes become clickable
            $dataItems.find('h3').off('click').click(function () {
                $('.content').removeClass('active');
               $(this).parent('.dataItems').find('.content').toggleClass('active');
           });

        } else {
            $dataItems.find('h3').off('click');
            $dataItems.find('.content').show();
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);

});

