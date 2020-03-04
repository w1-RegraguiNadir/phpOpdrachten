<?php
/**
 * User: nadir
 * Date: 2/3/2018
 * Time: 12:06 PM
 * Bestand: template.php
 * Template voor alle opdrachten
 */
?>
<html>
<head>
    <title></title>
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside id="Menu">
    <section>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="Hoofdstuk02/opdracht21.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk02/opdracht22.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="hoofdstuk03/opdracht_2-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk03/opdracht_2-2.php">Opdracht 3.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="hoofdstuk04/opdracht_2-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk04/opdracht_2-2.php">Opdracht 4.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<main>
    <h2 id="uitwerking">Uitwerkingen</h2>
    <p>
        <?php
        $elfstedentocht = "elfstedentocht";
        $alvestedetocht = "alvestedetocht";
        $number1 = 200;
        $schaatstocht = "schaatstocht";
        $natuurijs = "natuurijs";
        $KVDFE = "Koninklijke Vereniging De Friesche Elf Steden";
        $Leeuwarden = "Leeuwarden";
        $friesland = "Friesland";
        $number2 = 15;
        $number3 = 1909;
        $number4 = 1;
        $verhaal = "De $elfstedentocht (Fries: $alvestedetocht) is een $number1 kilometer lange 
           $schaatstocht over $natuurijs die word georganiseerd  door de $KVDFE. $Leeuwarden,
           de hoofdstad van $friesland, is start- en aankomstplaats. De $elfstedentocht is inmiddels    
           $number1 maal verreden en werd voor het eerst in $number2 gereden en word maximaal $number4 keer per winter gehouden";

        echo $verhaal;


        $verhaal2 = "De". $elfstedentocht."(Fries:". $alvestedetocht.") is een".$number1." kilometer lange 
           ".$schaatstocht."over".$natuurijs ."die word georganiseerd  door de".$KVDFE.$Leeuwarden.",
           de hoofdstad van". $friesland.", is start- en aankomstplaats. De". $elfstedentocht. "is inmiddels".
            $number1 ."maal verreden en werd voor het eerst in". $number2. "gereden en word maximaal". $number4 ."keer per winter gehouden";
        echo "<p>$verhaal2</p>";
        ?>
    </p>
</main>
</body>
</html>