<?php

namespace App;

class Table
{

    public static function html()
    {
        ?>
        <table class="table">
            <thead>
            <tr>
                <th>Engels</th>
                <th>Infinitivo</th>
                <th>Participio</th>
                <th>Gerundio</th>
            </tr>
            </thead>
            <tr>
                <td>to stay</td>
                <td><input type="text"></td>
                <td>bleef</td>
                <td>gebleven</td>
            </tr>
        </table>
        <?php
    }

    public static function styles()
    {
        ?>
        <link href='https://fonts.googleapis.com/css?family=Lato'
              rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
              rel="stylesheet">

        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
              crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <?php
    }

    public static function white_space()
    {
        ?>
        <div style="height: 40px;"></div>
        <?php
    }

    public static function thead()
    {
        ?>
        <thead class="table-bordered table-primary">
        <!--        <tr class="position-fixed fixed_custom">-->
        <tr>
            <th></th>
            <th colspan="3" class="text-center">Dutch</th>
        </tr>
        <tr class="sticky-ths">
            <th>Engels</th>
            <td><a href="/web/index.php?tense=infinitive">Infinitive</a></td>
            <td><a href="/web/index.php?tense=past">Past</a></td>
            <td><a href="/web/index.php?tense=participle">Participle</a></td>
        </tr>
        </thead>
        <?php
    }

    public static function create_tr($english, $infinitive, $past, $participle)
    {
        ?>
        <tr>
            <td><?= $english; ?></td>
            <td>
                <? Table::input($infinitive, "infinitive"); ?>
            </td>
            <td>
                <? Table::input($past, "past"); ?>
            </td>
            <td>
                <? Table::input($participle, "participle"); ?>
            </td>
        </tr>
        <?php
    }

    private static function input($answer, $tense)
    {
        $tense_get = $_GET["tense"]??null;
        if ($tense_get == $tense) {
            ?>
            <input class="input_text" type="text"
                   value="" answer="<?= $answer ?>">
            <?php
        }else{
            echo $answer;
        }
    }
}
