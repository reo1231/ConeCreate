$(document).ready(function() {
    const modal = $('#createPostModal');
    const openModalBtn = $('#openModalBtn');
    const closeButton = modal.find('.close-button');

    //モーダルを表示
    openModalBtn.on('click', function() {
        modal.css('display', 'flex');
    });

    //モーダルを非表示
    closeButton.on('click', function() {
        modal.css('display', 'none');
    });

    //外側をクリックで非表示
    $(window).on('click', function(event) {
        if ($(event.target).is(modal)) {
            modal.css('display', 'none');
        }
    });
});
