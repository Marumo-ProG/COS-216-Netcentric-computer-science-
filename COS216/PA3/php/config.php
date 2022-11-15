<?php

    // making a database connection
    $db= mysqli_connect("wheatley.cs.up.ac.za", "u20485001", "HM25O3NPZMZLSZVGPUXAP3CPPHYJOUFQ", "u20485001");

    // Check connection
    if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
    }

    echo("<script>console.log('Connected to database successfully')</script>");
    $login = false;
    $userValide = false;
    $userFound = false;
?>