(function($){
    $(document).ready(function() {
      //$( '#nombreID a' ).addClass('popup-video');
        $('.popup-video').magnificPopup({
            disableOn: 100,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
    })(jQuery)