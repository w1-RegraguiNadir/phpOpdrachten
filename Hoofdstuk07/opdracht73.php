<!--
 User: Nadir Regragui
 Date: 19-05-2020
 Time: 08:55
 File: template.php
-->
<html>
<head>
    <title></title>
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
    <link href="opdracht73.css" type="text/css" rel="stylesheet">
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
</main>
<?php
include "functions.php";
?>

<?php

// Starten conectie
startConnection();

// Query schrijven
$query = "SELECT * FROM joke";
if(isset($_GET["query"]) == true)
{
    $query = "SELECT * FROM joke WHERE joketext LIKE '%" . $_GET["query"] . "%'";
}

// Query uitvoeren en result opslaan
$result =  executeQuery($query);

?>
<?php
echo"<p>$query</p>";
?>
<form method="GET">
    <input type="text" name="query">
    <input type="submit" value="zoeken">
</form>
<hr>
<table>
    <tr>
        <th>ID</th>
        <th>Joketext</th>
        <th>Jokeclou</th>
        <th>Date</th>
    </tr>
    <?php

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["joketext"] . "</td><td>" . $row["jokeclou"] . "</td><td>" . $row["jokedate"] . "</td></tr>";
    }
    ?>
</table>
</body>
</html>



