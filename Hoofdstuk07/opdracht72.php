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

    // Query schrijven
    $query = "SELECT * FROM  joke WHERE jokedate < GETDATE()";


    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
        echo "De Database connectie is gelukt";
    }
    catch(PDOException $e)
    {
        echo "<h1>Fout</h1>";
        echo "<p>" . $error->getMessage() . "</p>";
    };

    // Query gaan uitvoeren
    try{
        $result = $pdo->query($query);
    }
    catch(PDOException $error)
    {
        echo "<p>Error: " . $error->getMessage() . "</p>";
    };



    ?>
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
</main>

</body>
</html>


