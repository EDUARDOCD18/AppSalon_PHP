<?php

$db = mysqli_connect('localhost', 'root', '', 'appsalon');

if (!$db) {
    echo "Error";
    exit;
} 