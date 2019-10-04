export default function menu() {
    $('.navbar__burger').click(function() {
        $('body').addClass('overlay-active');
        $('.overlay').fadeIn();
    });
}
