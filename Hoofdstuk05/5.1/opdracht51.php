<!--
 User: Nadir Regragui
 Date: 28-02-2020
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

    file_put_contents('log.txt', $_SERVER['REMOTE_ADDR']);

    ?>

    <form method="get" action="form_data.php">
        <table>
            <tr>
                <td>Naam</td>
                <td>
                    <input type="text" name="namePerson" required>
                </td>
            </tr>
            <tr>
                <td> Email</td>
                <td>
                    <input type="email" name="emailPerson" required>
                </td>
            </tr>
            <tr>
                <td>Onderwerp</td>
                <td>
                    <input type="text" name="subjectForm">
                </td>
            </tr>
            <tr>
                <td>Bericht</td>
                <td>
                <textarea name="textMessage">

                </textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submitForm" id="submit">
                </td>
            </tr>

        </table>

</body>
</html>





