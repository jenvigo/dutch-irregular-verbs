$(function () {
    let favsa = Cookies.get('favs');

    Quiz.listener_delete_local_storage();

    check_saved_values();

    checkbox_change();

    Quiz.input_text_listener();
    Quiz.star_checkbox_listener();

})
