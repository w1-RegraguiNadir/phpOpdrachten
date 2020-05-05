<?php

$time = date("H") + 1;

session_start();

echo "Goedemiddag " . $_SESSION["username"];






?>