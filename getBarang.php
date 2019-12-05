    <?php
    // DB details
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'tugasakhirppk';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }



    $query = "SELECT * FROM `barang`";
    $exec = mysqli_query($db, $query);
    $fetch = mysqli_fetch_array($exec);

    $Barang_ID= $fetch["Barang_ID"];
    $nama_barang = $fetch["Nama_Barang"];
    $stok = $fetch["Stok"];
    $harga = $fetch["Harga"];

    $return_arr[] = array("Barang_ID" => $Barang_ID,"Nama_Barang" => $nama_barang, "Stok" => $stok, "Harga" => $harga);
    header('Content-Type:application/json;charset=utf-8');
    echo json_encode($return_arr);
    ?>