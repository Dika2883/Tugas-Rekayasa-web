<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal Tabel HTML</title>
</head>
<body>
    <table border="1">
       <h2>Daftar Wisata</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <!-- Header tabel -->
        <tr>
            <th>ID WISATA</th>
            <th>KOTA</th>
            <th>LANDMARK</th>
            <th>TARIF</th>
        </tr>
    

        <?php
        // ambil data dari tampilWisata.php
        function curl($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            return $output;
        }

        $send = curl("http://localhost/punyadika/getWisata.php");
        $data = json_decode($send, true);

        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>{$row['id_wisata']}</td>";
            echo "<td>{$row['kota']}</td>";
            echo "<td>{$row['landmark']}</td>";
            echo "<td>{$row['tarif']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </body>  
 
