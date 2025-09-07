$(document).ready(function() {
    const navLinks = $('.main-menu ul li a');
    const contents = $('.content-section');

    navLinks.on('click', function(event) {
        event.preventDefault();

        const targetId = $(this).attr('href').substring(1);

        contents.hide();

        $(`#${targetId}-content`).show();
    });

    $('#home-content').show();
});
