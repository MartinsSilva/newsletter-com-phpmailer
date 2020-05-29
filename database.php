<?php

// substitui por dados da sua database
$pdo = new PDO('mysql:host=localhost;dbname=libraries;charset=utf8mb4', 'root', '');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
