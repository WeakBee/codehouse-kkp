$(document).ready(function(){
    $( ".indi-circle" ).on( "click", function() {
        let atribut = $(this).attr('indicator');
        $(".indi-circle").removeClass('active');
        $(this).addClass('active');

        $(".cust-card").each(function() {
            if($(this).hasClass('active')){
                $(this).removeClass('active');
            }
            if($(this).hasClass(atribut)){
                $(this).addClass('active');
            }
        });
    });

    $( ".ac-left" ).on( "click", function() {
        if ( $('.cch-1').attr('place') == '1' ) {
            $( ".cch-1" ).attr( "place", "2" );
            $( ".cch-2" ).attr( "place", "3" );
            $( ".cch-3" ).attr( "place", "4" );
            $( ".cch-4" ).attr( "place", "5" );
            $( ".cch-5" ).attr( "place", "6" );
            $( ".cch-6" ).attr( "place", "1" );
        } else if ( $('.cch-1').attr('place') == '2' ) {
            $( ".cch-1" ).attr( "place", "3" );
            $( ".cch-2" ).attr( "place", "4" );
            $( ".cch-3" ).attr( "place", "5" );
            $( ".cch-4" ).attr( "place", "6" );
            $( ".cch-5" ).attr( "place", "1" );
            $( ".cch-6" ).attr( "place", "2" );
        } else if ( $('.cch-1').attr('place') == '3' ) {
            $( ".cch-1" ).attr( "place", "4" );
            $( ".cch-2" ).attr( "place", "5" );
            $( ".cch-3" ).attr( "place", "6" );
            $( ".cch-4" ).attr( "place", "1" );
            $( ".cch-5" ).attr( "place", "2" );
            $( ".cch-6" ).attr( "place", "3" );
        } else if ( $('.cch-1').attr('place') == '4' ) {
            $( ".cch-1" ).attr( "place", "5" );
            $( ".cch-2" ).attr( "place", "6" );
            $( ".cch-3" ).attr( "place", "1" );
            $( ".cch-4" ).attr( "place", "2" );
            $( ".cch-5" ).attr( "place", "3" );
            $( ".cch-6" ).attr( "place", "4" );
        } else if ( $('.cch-1').attr('place') == '5' ) {
            $( ".cch-1" ).attr( "place", "6" );
            $( ".cch-2" ).attr( "place", "1" );
            $( ".cch-3" ).attr( "place", "2" );
            $( ".cch-4" ).attr( "place", "3" );
            $( ".cch-5" ).attr( "place", "4" );
            $( ".cch-6" ).attr( "place", "5" );
        } else if ( $('.cch-1').attr('place') == '6' ) {
            $( ".cch-1" ).attr( "place", "1" );
            $( ".cch-2" ).attr( "place", "2" );
            $( ".cch-3" ).attr( "place", "3" );
            $( ".cch-4" ).attr( "place", "4" );
            $( ".cch-5" ).attr( "place", "5" );
            $( ".cch-6" ).attr( "place", "6" );
        } 
    });

    $( ".ac-right" ).on( "click", function() {
        if ( $('.cch-1').attr('place') == '1' ) {
            $( ".cch-1" ).attr( "place", "6" );
            $( ".cch-2" ).attr( "place", "1" );
            $( ".cch-3" ).attr( "place", "2" );
            $( ".cch-4" ).attr( "place", "3" );
            $( ".cch-5" ).attr( "place", "4" );
            $( ".cch-6" ).attr( "place", "5" );
        } else if ( $('.cch-1').attr('place') == '2' ) {
            $( ".cch-1" ).attr( "place", "1" );
            $( ".cch-2" ).attr( "place", "2" );
            $( ".cch-3" ).attr( "place", "3" );
            $( ".cch-4" ).attr( "place", "4" );
            $( ".cch-5" ).attr( "place", "5" );
            $( ".cch-6" ).attr( "place", "6" );
        } else if ( $('.cch-1').attr('place') == '3' ) {
            $( ".cch-1" ).attr( "place", "2" );
            $( ".cch-2" ).attr( "place", "3" );
            $( ".cch-3" ).attr( "place", "4" );
            $( ".cch-4" ).attr( "place", "5" );
            $( ".cch-5" ).attr( "place", "6" );
            $( ".cch-6" ).attr( "place", "1" );
        } else if ( $('.cch-1').attr('place') == '4' ) {
            $( ".cch-1" ).attr( "place", "3" );
            $( ".cch-2" ).attr( "place", "4" );
            $( ".cch-3" ).attr( "place", "5" );
            $( ".cch-4" ).attr( "place", "6" );
            $( ".cch-5" ).attr( "place", "1" );
            $( ".cch-6" ).attr( "place", "2" );
        } else if ( $('.cch-1').attr('place') == '5' ) {
            $( ".cch-1" ).attr( "place", "4" );
            $( ".cch-2" ).attr( "place", "5" );
            $( ".cch-3" ).attr( "place", "6" );
            $( ".cch-4" ).attr( "place", "1" );
            $( ".cch-5" ).attr( "place", "2" );
            $( ".cch-6" ).attr( "place", "3" );
        } else if ( $('.cch-1').attr('place') == '6' ) {
            $( ".cch-1" ).attr( "place", "5" );
            $( ".cch-2" ).attr( "place", "6" );
            $( ".cch-3" ).attr( "place", "1" );
            $( ".cch-4" ).attr( "place", "2" );
            $( ".cch-5" ).attr( "place", "3" );
            $( ".cch-6" ).attr( "place", "4" );
        } 
    });
});