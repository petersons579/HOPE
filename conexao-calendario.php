<?php
    $pdo = new PDO('mysql:host=localhost;dbname=hope', 'root', '');
    $pdo->exec("set names utf8");