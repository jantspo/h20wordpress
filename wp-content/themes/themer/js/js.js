//========== Accordion controls===========//

jQuery(document).ready(function($) {
    var $window = $(window);
    var $dataItems = $('.dataItems');
    var $farmSection = $('.tab');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize <= 480) {
            //if the window is less than 480px wide then allow accordion
            $dataItems.find('h3').off('click').click(function () {
                $('.content').removeClass('active');
               $(this).parent('.dataItems').find('.content').toggleClass('active');
           });

        } else {
            $dataItems.find('h3').off('click');
            $dataItems.find('.content').show();
        }


//===============   ACCORDION FUNCTIONALITY


        $farmSection.find('h2').off('click').click(function(){
            //$(this).parent('.tab').find('h2').removeClass('expanded');
            $('body').find('.expanded').removeClass('expanded');
            $('.info').removeClass('show');
            $(this).parent('.tab').find('.info').toggleClass('show');
            $(this).addClass('expanded');
            if( windowsize <= 900){
                $('.tab').css('width', '2em');
                $(this).parent('.tab').css('height', '2em');
            }else {
                $('.tab').css('width', '100%');
                $(this).parent('.tab').css('width', '92%');
            }
        });




    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);

});

