<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//var_dump($_SERVER);
include_once $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';
use App\Table;
?>
<html>
<head>
    <?= Table::styles();?>

</head>
<body>
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <table class="table">
                <tr class="position-fixed fixed_custom">
<!--                <tr class="position-fixed fixed_custom">-->
                    <td>Engels</td>
                    <td>
                        <input class="input_radio" type="radio"
                               name="tense"
                               value="0" checked>
                    </td>
                    <td>
                        <input class="input_radio" type="radio"
                               name="tense"
                               value="1">
                    </td>
                    <td>
                        <input class="input_radio" type="radio"
                               name="tense"
                               value="2">
                    </td>
                </tr>
                <tr>
                    <td>to begin</td>
                    <td><input class="input_text" type="text"
                               value="" answer="beginnen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> begon </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> begonnen
                        </a>
                    </td>
                </tr>
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
                <tr>
                    <td>to bring</td>
                    <td><input class="input_text" type="text"
                               value="" answer="brengen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> bracht </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gebracht
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to think</td>
                    <td><input class="input_text" type="text"
                               value="" answer="denken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> dacht </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gedacht
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to do</td>
                    <td><input class="input_text" type="text"
                               value="" answer="doen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> deed </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gedaan
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to drink</td>
                    <td><input class="input_text" type="text"
                               value="" answer="drinken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> dronk </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gedronken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to eat</td>
                    <td><input class="input_text" type="text"
                               value="" answer="eten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> at </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gegeten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to go</td>
                    <td><input class="input_text" type="text"
                               value="" answer="gaan "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> ging </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gegaan
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to have</td>
                    <td><input class="input_text" type="text"
                               value="" answer="hebben "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> had </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gehad
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to need (negative)</td>
                    <td><input class="input_text" type="text"
                               value="" answer="hoeven "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> hoefde </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gehoeven
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to watch</td>
                    <td><input class="input_text" type="text"
                               value="" answer="kijken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> keek </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gekeken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to come</td>
                    <td><input class="input_text" type="text"
                               value="" answer="komen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> kwam </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gekomen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>can</td>
                    <td><input class="input_text" type="text"
                               value="" answer="kunnen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> kon </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gekund
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to read</td>
                    <td><input class="input_text" type="text"
                               value="" answer="lezen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> las </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gelezen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to lay down</td>
                    <td><input class="input_text" type="text"
                               value="" answer="liggen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> lag </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gelegen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to walk</td>
                    <td><input class="input_text" type="text"
                               value="" answer="lopen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> liep </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gelopen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to have to</td>
                    <td><input class="input_text" type="text"
                               value="" answer="moeten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> moest </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gemoeten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>may</td>
                    <td><input class="input_text" type="text"
                               value="" answer="mogen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> mocht </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gemogen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to ask</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vragen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> vroeg </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gevraagd
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to want</td>
                    <td><input class="input_text" type="text"
                               value="" answer="willen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> wilde </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gewild
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to become</td>
                    <td><input class="input_text" type="text"
                               value="" answer="worden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> werd </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geworden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to say</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zeggen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zei </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezegd
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to see</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zien "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zag </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezien
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to be</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zijn "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> was </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geweest
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>will</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zullen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zou </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> (no past participle)
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to arrive</td>
                    <td><input class="input_text" type="text"
                               value="" answer="aankomen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> kwam aan </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> aangekomen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to cheat</td>
                    <td><input class="input_text" type="text"
                               value="" answer="bedriegen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> bedroog </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> bedrogen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to understand</td>
                    <td><input class="input_text" type="text"
                               value="" answer="begrijpen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> begreep </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> begrepen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to prove</td>
                    <td><input class="input_text" type="text"
                               value="" answer="bewijzen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> bewees </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> bewezen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to pray</td>
                    <td><input class="input_text" type="text"
                               value="" answer="bidden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> bad </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gebeden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to bite</td>
                    <td><input class="input_text" type="text"
                               value="" answer="bijten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> beet </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gebeten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to blow</td>
                    <td><input class="input_text" type="text"
                               value="" answer="blazen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> blies </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geblazen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to turn out</td>
                    <td><input class="input_text" type="text"
                               value="" answer="blijken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> bleek </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gebleken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to break</td>
                    <td><input class="input_text" type="text"
                               value="" answer="breken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> brak </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gebroken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to wear</td>
                    <td><input class="input_text" type="text"
                               value="" answer=" dragen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> droeg </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gedragen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to force</td>
                    <td><input class="input_text" type="text"
                               value="" answer="dwingen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> dwong </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gedwongen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to experience</td>
                    <td><input class="input_text" type="text"
                               value="" answer="ervaren "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> ervoer </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> ervaren
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to cure</td>
                    <td><input class="input_text" type="text"
                               value="" answer="genezen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> genas </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> genezen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to enjoy</td>
                    <td><input class="input_text" type="text"
                               value="" answer="genieten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> genoot </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> genoten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to give</td>
                    <td><input class="input_text" type="text"
                               value="" answer="geven "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> gaf </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gegeven
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to slide</td>
                    <td><input class="input_text" type="text"
                               value="" answer="glijden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> gleed </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gegleden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to hang</td>
                    <td><input class="input_text" type="text"
                               value="" answer="hangen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> hing </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gehangen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to help</td>
                    <td><input class="input_text" type="text"
                               value="" answer="helpen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> hielp </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geholpen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to be called (name)</td>
                    <td><input class="input_text" type="text"
                               value="" answer="heten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> heette </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geheten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to keep</td>
                    <td><input class="input_text" type="text"
                               value="" answer="houden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> hield </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gehouden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to choose</td>
                    <td><input class="input_text" type="text"
                               value="" answer="kiezen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> koos </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gekozen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to climb</td>
                    <td><input class="input_text" type="text"
                               value="" answer="klimmen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> klom </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geklommen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to buy</td>
                    <td><input class="input_text" type="text"
                               value="" answer="kopen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> kocht </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gekocht
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to get</td>
                    <td><input class="input_text" type="text"
                               value="" answer="krijgen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> kreeg </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gekregen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to let</td>
                    <td><input class="input_text" type="text"
                               value="" answer="laten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> liet </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gelaten
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
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
                    <td></td>
                    <td>
                        <input class="input_radio" type="radio"
                               name="tense"
                               value="0" checked>
                    </td>
                    <td>
                        <input class="input_radio" type="radio"
                               name="tense"
                               value="1">
                    </td>
                    <td>
                        <input class="input_radio" type="radio"
                               name="tense"
                               value="2">
                    </td>
                </tr>
                <tr>
                    <td>to lie</td>
                    <td><input class="input_text" type="text"
                               value="" answer="liegen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> loog </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gelogen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to suffer</td>
                    <td><input class="input_text" type="text"
                               value="" answer="lijden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> leed </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geleden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to appear</td>
                    <td><input class="input_text" type="text"
                               value="" answer="lijken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> leek </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geleken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to participate</td>
                    <td><input class="input_text" type="text"
                               value="" answer="meedoen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> deed mee </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> meegedaan
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to fail</td>
                    <td><input class="input_text" type="text"
                               value="" answer="mislukken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> mislukte </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> mislukt
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to take</td>
                    <td><input class="input_text" type="text"
                               value="" answer="nemen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> nam </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> genomen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to get up</td>
                    <td><input class="input_text" type="text"
                               value="" answer="opstaan "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> stond op </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> opgestaan
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to drive</td>
                    <td><input class="input_text" type="text"
                               value="" answer="rijden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> reed </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gereden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to call (to shout)</td>
                    <td><input class="input_text" type="text"
                               value="" answer="roepen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> riep </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geroepen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to smell</td>
                    <td><input class="input_text" type="text"
                               value="" answer="ruiken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> rook </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geroken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to curse</td>
                    <td><input class="input_text" type="text"
                               value="" answer="schelden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> schold </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gescholden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to shoot</td>
                    <td><input class="input_text" type="text"
                               value="" answer="schieten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> schoot </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geschoten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to shine</td>
                    <td><input class="input_text" type="text"
                               value="" answer="schijnen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> scheen </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geschenen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to write</td>
                    <td><input class="input_text" type="text"
                               value="" answer="schrijven "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> schreef </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geschreven
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to be shocked</td>
                    <td><input class="input_text" type="text"
                               value="" answer="schrikken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> schrok </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geschrokken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to beat</td>
                    <td><input class="input_text" type="text"
                               value="" answer="slaan "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> sloeg </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geslagen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to sleep</td>
                    <td><input class="input_text" type="text"
                               value="" answer="slapen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> sliep </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geslapen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to close</td>
                    <td><input class="input_text" type="text"
                               value="" answer="sluiten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> sloot </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gesloten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to cut</td>
                    <td><input class="input_text" type="text"
                               value="" answer="snijden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> sneed </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gesneden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to speak</td>
                    <td><input class="input_text" type="text"
                               value="" answer="spreken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> sprak </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gesproken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to jump</td>
                    <td><input class="input_text" type="text"
                               value="" answer="springen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> sprong </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gesprongen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to stand</td>
                    <td><input class="input_text" type="text"
                               value="" answer="staan "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> stond </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gestaan
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to steal</td>
                    <td><input class="input_text" type="text"
                               value="" answer="stelen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> stal </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gestolen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to die</td>
                    <td><input class="input_text" type="text"
                               value="" answer="sterven "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> stierf </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gestorven
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to smell bad</td>
                    <td><input class="input_text" type="text"
                               value="" answer="stinken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> stonk </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gestonken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to pull</td>
                    <td><input class="input_text" type="text"
                               value="" answer="trekken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> trok </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> getrokken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to fall</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vallen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> viel </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gevallen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to catch</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vangen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> ving </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gevangen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to forbid</td>
                    <td><input class="input_text" type="text"
                               value="" answer="verbieden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> verbood </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> verboden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to disappear</td>
                    <td><input class="input_text" type="text"
                               value="" answer="verdwijnen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> verdween </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> verdwenen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to compare</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vergelijken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> vergeleek </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> vergeleken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to forget</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vergeten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> vergat </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> vergeten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to sell</td>
                    <td><input class="input_text" type="text"
                               value="" answer="verkopen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> verkocht </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> verkocht
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to leave</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vertrekken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> vertrok </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> vertrokken
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to lose</td>
                    <td><input class="input_text" type="text"
                               value="" answer="verliezen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> verloor </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> verloren
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to be able to hear</td>
                    <td><input class="input_text" type="text"
                               value="" answer="verstaan "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> verstond </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> verstaan
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to think up</td>
                    <td><input class="input_text" type="text"
                               value="" answer="verzinnen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> verzon </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> verzonnen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to fly</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vliegen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> vloog </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gevlogen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to freeze</td>
                    <td><input class="input_text" type="text"
                               value="" answer="vriezen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> vroor </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gevroren
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to know</td>
                    <td><input class="input_text" type="text"
                               value="" answer="weten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> wist </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> geweten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to win</td>
                    <td><input class="input_text" type="text"
                               value="" answer="winnen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> won </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gewonnen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to rub</td>
                    <td><input class="input_text" type="text"
                               value="" answer="wrijven "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> wreef </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gewreven
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to send</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zenden "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zond </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezonden
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to sing</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zingen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zong </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezongen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to sit</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zitten "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zat </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezeten
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to search</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zoeken "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zocht </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezocht
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to drink a lot of alcohol</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zuipen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zoop </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezopen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to swim</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zwemmen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zwom </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezwommen
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>to be silent</td>
                    <td><input class="input_text" type="text"
                               value="" answer="zwijgen "></td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(1)"> zweeg </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)"
                           onclick="input_radio_link(2)"> gezwegen</a>
                    </td>
                </tr>
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
