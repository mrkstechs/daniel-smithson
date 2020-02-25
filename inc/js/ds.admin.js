jQuery(document).ready(function($){
    var mediaUploader,
        key,
        index,
        input = $('.image'),
        buttons = $('.button-secondary');
    buttons.on('mouseenter', function() {
        let button = $(this);
        button.addClass('active');
    });
    buttons.on('mouseleave', function() {
        let button = $(this);
        button.removeClass('active');
    })
    buttons.on('click', function(e) {
        e.preventDefault();
        
        for(key = 0; key < buttons.length; key++){
            let button = buttons[key];
            if ($(button).hasClass('active')) {
                $(input[key]).addClass('active');
            } else {
                $(input[key]).removeClass('active');
            }
        }

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose an Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('.image.active').val(attachment.url);
        });
        mediaUploader.open();
    });
});