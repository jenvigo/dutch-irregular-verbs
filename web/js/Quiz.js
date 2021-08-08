function compare_value(expected, actual) {
    if (expected == actual) {
        return true;
    } else {
        return false
    }
}

function background(color) {
    // console.log('background ' + color);
    $(target).css('background', color);
}

function check_saved_values() {
    $('.input_text').each(function (i, e) {
        // console.log($(e).attr('answer'));
        target = e;
        let expected = $(e).attr('answer');
        expected = expected.trim();

        let saved_value = localStorage.getItem(expected);
        // console.log(saved_value);
        if (saved_value !== null) {
            $(e).val(saved_value);
            result_compare = compare_value(expected, saved_value);
            // console.log(expected);
            if (result_compare) {
                background('greenyellow');
            } else {
                background('orangered');
            }
        }

    });
}

function checkbox_change() {
    $('.input_radio').change(function (e) {
        // localStorage.setItem('input_radio', e.target.value);
        setCookie('input_radio', e.target.value, 1);
        location.reload();
    });
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function input_radio_link(index) {
    let scroll_y = window.scrollY;
    scroll_y = Math.round(scroll_y);
    console.log(scroll_y);
    setCookie('scroll_y', scroll_y, 1);
    location = 'web/index.php?input_radio=' + index;

}

class Quiz {
    favs_c;

    static input_text_listener() {
        $('.input_text').keyup(function (e) {
            target = e.target;

            let actual = target.value;
            let expected = $(target).attr('answer');
            expected = expected.trim();
            actual = actual.trim();

            let result_compare = compare_value(expected, actual);
            //    save variable
            localStorage.setItem(expected, actual);

            if (result_compare) {
                background('greenyellow');
            } else {
                background('orangered');
            }
        });
    }

    static star_checkbox_listener() {
        $('.star_cb').change(function () {
            this.favs_c = Cookies.get('favs');
            // alert(this.favs_c);

            alert('tocaron');
        });
    }

    static listener_delete_local_storage() {

        $('#btn_del_loc_storage').on('click', Quiz.clearLocalStorage);

    }

    static clearLocalStorage() {

        localStorage.clear();
    }
}
