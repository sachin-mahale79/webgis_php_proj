<?php
    ob_start();
    session_start();

    try {

        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];

        $dsn = "pgsql:host= webmap-webgis2025.h.aivencloud.com;dbname=defaultdb;port= 16943";
        $pdo = new PDO($dsn, 'avnadmin', 'AVNS_4qv_r8sFizmz4OYPApU', $opt);

    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
?>