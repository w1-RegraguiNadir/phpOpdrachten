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
    <link href="5.1.css" type="text/css" rel="stylesheet">
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

    if (count($_GET) == 5)
    {
        echo "   <table id='tableOutput'>
            <tr class='trBorder'>
                <td class='tdBorder' >
                   Naam 
                </td>
                <td class='tdBorder' >
                 $_GET[namePerson]   
                </td>
            </tr>
            <tr class='trBorder' >
                <td class='tdBorder'>
                Email
                </td>
                <td class='tdBorder' >
                $_GET[emailPerson]
                </td>
            </tr>
            <tr class='trBorder'>
                <td class='tdBorder'>
                 Onderwerp                     
                </td>
                <td class='tdBorder'>
                 $_GET[subjectForm]   
                </td>
            </tr>
            <tr class='trBorder'>
                <td class='tdBorder'>
                    Bericht
                </td>
                <td class='tdBorder'>
                 $_GET[textMessage]   
                </td>
            </tr>
        </table>";
    }
    ?>
</main>

</body>
</html>





