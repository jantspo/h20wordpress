//========== Accordion controls===========//

jQuery(document).ready(function($) {
    var $window = $(window);
    var $dataItems = $('.dataItems');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize <= 480) {
            //if the window is less than 480px wide then allow accordion
            $dataItems.find('h3').off('click').click(function () {
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
