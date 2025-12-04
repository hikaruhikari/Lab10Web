<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contoh Modularisasi</title>
        <link href="/Projek2/assets/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Modularisasi Menggunakan Require</h1>
            </header>
            <nav>
                <a href="/Projek2/views/dashboard.php">Home</a>
                <a href="/Projek2/indeks.php">Data</a>
                <a href="/Projek2/modules/auth/logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar dari akun Anda?');">
                    logout
                </a>
            </nav>