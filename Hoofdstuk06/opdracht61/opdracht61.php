<!--
 User: Nadir Regragui
 Date: 13-02-2020
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
   $message = "";
    $aUsers = array ('Nadir' => '1234', 'Devon' => '456');

    if (isset($_GET['submit'])) {
//controleren ingevulde username en wachtwoord
        if ( $aUsers[ $_GET['username'] ]  == $_GET['password'] )  {
            //$message = "login ok";
            session_start();
            $_SESSION['username'] = $_GET['username'];
            header('location: welcome.php');
        }   else {
            $message = "Verkeerde gebruikersnaam en wachtwoord combinatie";
        }
    }

    echo "<h2>Login formulier</h2>";

    echo
    "<form method='get' action='opdracht61.php'>
    <table>
        <tr>
            <td><label>Username</label></td>
            <td><input type='text' name='username'></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td><input type='password' name='password'></td>
        </tr>
        <tr>
            <td><input type='submit' name='submit' value='login' class='btn'></td>
            <td id='message'></td>
        </tr>
    </table>
    ";
    ?>


</main>

</body>
</html>




