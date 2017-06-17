( function() {
    console.log( 'woot..' );

    $(document).ready(function(){
    $("#sticker").sticky({topSpacing:0});
    });

    $( document ).ready( function() {
        $( 'nav' ).sticky({ topSpacing: 0 });
    });

    $( '.mobile-menu' ).on( 'click', function() {
        $( '.menu-wrap' ).slideToggle();
    });
})( jQuery );
