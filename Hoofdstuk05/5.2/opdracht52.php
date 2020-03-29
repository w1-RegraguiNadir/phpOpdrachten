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

    <h1>Uitschrijfformulier KW1C</h1>
    <hr>
    <form method="get" action="versturen.php">
        <table>
            <tr>
                <td>voor en achter naam</td>
                <td>
                    <input type="text" name="nameStudent" required>
                </td>
            </tr>
            <tr>
                <td> studentennummer</td>
                <td>
                    <input type="number" name="studentNumber" required>
                </td>
            </tr>
            <tr>
                <td>datum van uitschrijving</td>
                <td>
                    <input type="text" name="dateLeave">
                </td>
            </tr>
            <tr>
                <td>reden van uitschrijving</td>
                <td>
                    <select name="Reden">
                        <option name="Reason" value="1">verkeerde keuze</option>
                        <option name="Reason" value="2">andere intresse</option>
                        <option name="Reason" value="3"> tegenvallende cijfer</option>
                        <option name="Reason" value="4">relatie met leraren</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Leerjaar</td>
                <td>
                    <input type="radio" name="leerjaar" value="1e leerjaar">1e leerjaar<br>
                    <input type="radio" name="leerjaar" value="2e leerjaar">2eleerjaar<br>
                    <input type="radio" name="leerjaar" value="3e leerjaar">3e leerjaar
                </td>
            </tr>
            <tr>
            </tr>
            <td>
                <input type="checkbox" name="succesClass" value="succesklas">Ik wil me aanmeldden bij de succesklas<br>
                <input type="checkbox" name="deleteData" value="gegevens">Verwijder mijn gegevens uit het systeem
            </td>
            <tr>
                <td>
                    Geef hieronder de reden van je uitschrijving
            </tr>
            <tr>
                <td>
                    <textarea name="reasonLeaving">

                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="buttonSend" value="versturen">
                </td>
            </tr>
        </table>
    </form>
</main>

</body>
</html>



