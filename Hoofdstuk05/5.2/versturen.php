
<!--
 User: Nadir Regragui
 Date: 28-03-2020
 Time: 08:55
 File: template.php
-->
<html>
<head>
    <title></title>
    <link href="../../CSS/style.css" type="text/css" rel="stylesheet">
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
    <?php
    if (count($_GET) == 8)
    {
    echo " <h1>Uitschrijfformulier KW1C</h1>
    <hr>
    <table>
        <tr >
            <td>
                voor en achternaam
            </td>
            <td  >
                ". $_GET[nameStudent]."
            </td>
        </tr>
        <tr >
            <td>
                studentennummer
            </td>
            <td>
                ".$_GET[studentNumber]."
            </td>
        </tr>
        <tr >
            <td >
                datum van uitschrijving
            </td>
            <td >
                ".$_GET[dateLeave]."
            </td>
        </tr>
        <tr >
            <td>
                reden van uitschrijving
            </td>
            <td>".  $_GET["Reden"] ."

            </td>
        </tr>
        <tr >
            <td >
                leerjaar
            </td>
            <td>
               " . $_GET["leerjaar"]."
            </td>
        </tr>
        <tr>
            <td>
                Aanmeldden bij de succesklas
            </td>
            <td>
                ". $_GET["succesClass"] ."
            </td>
        </tr>
        <tr >
            <td>
                Verwijderen gegevens
            </td>
            <td>". $_GET["deleteData"] ."

            </td>
        </tr>
        <tr >
            <td >
                reden van uitschrijving:
            </td>
            <td >
                ".$_GET["reasonLeaving"]."
            </td>
        </tr>
    </table>";
    }

    //if isset($_GET['checkbox'] == '1')
    //{
    //  $checkbox = 'JA';
    //}
    //else
    //{
    //    $checkbox = "NEE";//
    //}

    if (isset($_GET["deleteData"]) == false)
    {

    };
    ?>
</main>

</body>
</html>




