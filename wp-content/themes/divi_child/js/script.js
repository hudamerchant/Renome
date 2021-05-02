(function($) {
    $(document).ready(function(){
        $('.et-readmore-toggle .et_pb_toggle_title').on('click', function(e) {
            if ($(e.target).closest('.et-readmore-toggle').hasClass('et_pb_toggle_open')) {
                $(this).text('...');
            } else {
                $(this).text('Show Less');
            }
        });
    });
})(jQuery);