<?php
//array Multidimensi
$buku = [
    [
        "Nama Book" => "Sejarah",
        "No seri" => "14045512",
        "Pembelian book" => "Gramedia",
        "Kritik saran book" => "Andrena@gmail.com"            
    ],

    [
        "Nama book" => "Geografi",
        "No seri" => "1402212",
        "Pembelian book" => "Gramedia",
        "Kritik saran book" => "Andreno@gmail.com"            
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Unyil</title>
</head>

<body>
    <h1>Daftar Perpustakaan Online</h1>
    <?php foreach ($buku as $bks): ?>
    <ul>
        <li>Nama book : <?= $bks[Nama book] ?></li>    
        <li>No seri : <?= $bks[No seri] ?></li>
        <li>Pembelian book : <?= $bks[Pembelian book] ?></li>
        <li>Kritik saran book : <?= $bks[Kritik saran book] ?></li>
    </ul>
    <?php endforeach; ?>            
</body>

</html>