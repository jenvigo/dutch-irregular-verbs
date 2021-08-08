<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//var_dump($_SERVER["DOCUMENT_ROOT"]);
//var_dump($_SERVER);
if (isset($_SERVER["HEROKU_APP_DIR"])) {
$_SERVER["DOCUMENT_ROOT"] = "/app";
}
include_once $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';

use App\Table;
?>
<html>
<head>
    <?= Table::styles(); ?>

</head>
<body>
<div class="container">

    <div class="row">

        <div class="col-md-12">
            <table class="table">
                <?php Table::thead(); ?>
                <tbody>

                <?php

                include_once $_SERVER["DOCUMENT_ROOT"] . '/web/verbs.php';
//                var_dump($verbs);

                /** @var  $verbs */
                foreach ($verbs as $verb):
                    $english = $verb[0];
                    $infinitive = $verb[1];
                    $past = $verb[2];
                    $participle = $verb[3];
                    Table::create_tr($english, $infinitive, $past, $participle);
                endforeach; ?>

                <tr>
                    <td>to stay</td>
                    <td><input class="input_text" type="text"
                               value="" answer="blijven "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> bleef </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gebleven
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="js/Quiz.js"></script>


    <script src="logic.js?v=174"></script>
</div>
</body>
</html>
