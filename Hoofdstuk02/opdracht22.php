<!--
 User: Nadir Regragui
 Date: 13-02-2020
 Time: 08:55
 File: template.php
-->
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
                        <a href="opdracht21.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="opdracht22.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 3.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 4.2</a>
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
        <a href="../index.php">Terug</a>
    </section>
</aside>
<main>
    <h2 id="uitwerking">Uitwerkingen</h2>
    <?php


    $text1 = " Hallo";
    $text2 = " een makkelijke taal";
    $text3 = " toch zo'n makkelijke taal";
    $text4 = " wat is";
    $text5 = " PHP";
    $text6 = " Nooit gedacht dat";
    $text7 = " De installatie is best ingewikkeld";
    $text8 = " Fijn";
    $text9 = " ?";
    $text10 = ".";
    $text11 = ",";
    $text12 = " <br>";
    $text13 = " is";
    $text14 = " vind je niet";
    $text15 = " toch";

    echo "<p>". "$text1" . "$text11"."$text4" . "$text5"."$text15"."$text2" . "$text12"."$text7" . "$text10"."$text8" . "$text15"."$text9". "$text12"."$text6" . "$text5"."$text3" ."</p>" ;
    echo "<p>"."$text1" . "$text11"."$text12" . "$text8"."$text15"."$text5" . "$text3"."$text13" . "$text12"."$text7" . "$text10"."$text14". "$text9"."</p>";


    ?>
</main>
</body>
</html>



