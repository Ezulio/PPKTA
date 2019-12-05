<?php
 $dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'tugasakhirppk';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

 $query = "SELECT * FROM barang";
$exec = mysqli_query($db, $query) or die("Bad Connection");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jual Beli Mobil</title>
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
    <link href="CSS.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
    <script src=" https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
    <script src="Script.js"></script>
</head>
<body>
<div class="w3-sidebar w3-bar-block w3-white w3-animate-left" style="display:none;z-index:4" id="mySidebar">
    <button class="w3-bar-item w3-button" onclick="w3_close()">Close</button>
    <a href="Index.html" class="w3-bar-item w3-button">Home</a>
    <a href="Edit.html" class="w3-bar-item w3-button">Edit</a>
    <a href="Hapus.html" class="w3-bar-item w3-button">Hapus</a>
    <a class="w3-bar-item w3-button" href="Tambah_Barang.html">Tambah Barang</a>
    <a href="Stock.html" class="w3-bar-item w3-button">Stock</a>
    <a href="Tambah_Petugas.html" class="w3-bar-item w3-button">Tambah Petugas</a>
    <a href="List_Petugas.html" class="w3-bar-item w3-button">List Petugas</a>
</div>
<div class="w3-overlay w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer"></div>
<div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
        <h1>Kasir</h1>
            <form name="Tambah Mobil" action="" method="post">
                <label>
                    <select>
                        <?php

                        while($row=mysqli_fetch_array($exec)):;?>
                        <option value="Nama Barang"><?php echo $row[i];?></option>
                        <?php endwhile; ?>
                        <!--                <a href="#">Link 1</a>-->
                        <!--                <a href="#">Link 2</a>-->
                        <!--                <a href="#">Link 3</a>-->
                    </select>
                </label>
            </form>
        <br>
        <br>
        <table>
            <thead>
            <th>ID Mobil</th>
            <th>Nama Mobil</th>
            <th>Harga Mobil</th>
            <th>Jumlah Mobil</th>
            <th>Total Harga Mobil</th>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>a</td>
                <td><input class="price" disabled type="number" value="5000"></td>
                <td>
                    <div class="input-group">
                        <input class="button-minus" data-field="quantity" type="button" value="-">
                        <input class="quantity-field" max="" name="quantity" onchange="calculate()" step="1" type="number"
                               value="1">
                        <input class="button-plus" data-field="quantity" type="button" value="+">
                    </div>
                </td>
                <td class="total"><input class="total" disabled value=""></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Petugas :<input disabled class="petugas"></th>
                <th colspan="3" style="text-align:right">Total Harga :</th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>
</html>
<script>
    function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    $('.input-group').on('click', '.button-plus', function (e) {
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function (e) {
        decrementValue(e);
    });

    function calculate() {
        row = $(this).closest("tr");
        var qty = row.find("quantity-field").val();
        var price = row.find("price").val();
        var result = row.find(".total").val(qty * price);
        $(".total").text(result)
    }
</script>