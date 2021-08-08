<?php


class Quiz
{
    public static function head_quiz()
    {
        ?>
        <head>
            <link href='https://fonts.googleapis.com/css?family=Lato'
                  rel='stylesheet' type='text/css'>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
                  rel="stylesheet">

            <link rel="stylesheet"
                  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
                  crossorigin="anonymous">
        </head>
        <?
    }

    public static function if_input_radio_set_cookie_and_redirect()
    {
        if (isset($_GET["input_radio"])) {
            setcookie('input_radio', $_GET["input_radio"]);
            echo "<script>location='index.php'</script>";
        }
    }

    public static function checked_function($value)
    {
        global $input_radio;

        if ($value == $input_radio) {
            echo " checked ";
        }
    }

    public static function create_table($verbs_arr2)
    {
        ?>
        <table class="table">
            <tr>
                <th>
                    <!--                    <button>Add to favs</button>-->
                </th>
                <th>Engels</th>
                <th>Nederland</th>
            </tr>
            <tr>
                <td></td>
                <td><? $input_radio = $_COOKIE['input_radio'] ?? "" ?></td>
                <td>
                    <input class="input_radio" type="radio"
                           name="tense"
                           value="0" <?= Quiz::checked_function(0) ?>>
                </td>
                <td>
                    <input class="input_radio" type="radio"
                           name="tense"
                           value="1" <?= Quiz::checked_function(1) ?>>
                </td>
                <td>
                    <input class="input_radio" type="radio"
                           name="tense"
                           value="2" <?= Quiz::checked_function(2) ?>>
                </td>
            </tr>
            <?
            foreach ($verbs_arr2 as $eng => $dut_arr) {
                ?>
                <tr>
                    <? //Quiz::checkbox_for_favs($eng); ?>
                    <td><?= $eng; ?></td>
                    <?
                    foreach ($dut_arr as $index => $dut) {
                        if ($index == $input_radio) {
                            ?>
                            <td><input class="input_text" type="text"
                                       value="<?
                                       ?>" answer="<?= $dut; ?>"></td>
                            <?
                            continue;
                        } else {
                            ?>
                            <td>
                                <a href="javascript:void(0)"
                                   onclick="input_radio_link(<?= $index; ?>)"><?= $dut; ?></a>
                            </td>
                            <?
                        }
                    }
                    ?>
                </tr>
                <?
            }
            ?>
        </table>
        <?
    }

    public static function if_is_set_scroll_y_then_scroll_viewport()
    {
        if (isset($_COOKIE['scroll_y'])) {
            ?>
            <script>
                console.log('scroll');
                console.log(<?=$_COOKIE['scroll_y'];?>);
                $(function () {
                    window.scrollBy(0, <?=$_COOKIE['scroll_y'];?>)
                })
            </script>
            <?
//    unset($_COOKIE['scroll_y']);
        }
    }

    public static function display_errors()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }

    public static function parse_list_verbs_to_array($verbs)
    {
        $verbs_arr = explode("\n", $verbs);
        $verbs_arr2 = array();
        foreach ($verbs_arr as $verb) {
            $verb_arr = explode(",", $verb);
            $eng = $verb_arr[0];
            $dut = $verb_arr[1];
            $dut_arr = explode("-", $dut);
            $verbs_arr2[$eng] = $dut_arr;
        }
        return $verbs_arr2;
    }

    public static function verb_list_chunks($verbs_arr2)
    {
        return $irregular_verbs_chunks = array_chunk($verbs_arr2, ceil
        (count($verbs_arr2) / 2), true);
    }

    public static function js_dependencies()
    {
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script src="js/Quiz.js"></script>

        <?
    }

    public static function favs_section($display = false)
    {
        if ($display == false) return;
        ?>
        <div class="favs-section col-md-11 card">
            <h3>Favs</h3>
            <? $favs_arr = $_COOKIE['favs'] ?? "";
            ?>
            <pre>
                <?
                print_r($favs_arr);
                ?>
            </pre>
            <?
            ?>
        </div>

        <?php
    }

    public static function reset_btn()
    {
        ?>
        <div class="col-md-1 ml-2">
            <button class="btn btn-primary" type="button" id="btn_del_loc_storage">Reset
            </button>
        </div>
        <?php
    }

    private static function checkbox_for_favs($eng)
    {
        ?>
        <input type="checkbox" name="favs[]"
               value="<?= $eng ?>"
               class="star_cb">

        <?php
    }


}
