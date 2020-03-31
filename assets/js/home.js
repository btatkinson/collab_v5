jQuery(document).ready(function($) {
    var animation_elements = [
        ' no litigation.',
        ' respect.',
        ' transparency.',
        ' self-esteem.',
        ' creativity.',
        ' empowerment.',
        ' a path forward.',
    ];

    (function displayClass(i) {
        $('#fadeIn').text(animation_elements[i]).fadeIn(3200).delay(800).fadeOut(1000, function() {
            displayClass((i + 1) % animation_elements.length);
        });
    })(0);

});
