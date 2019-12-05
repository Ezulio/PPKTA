function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
$(document).ready(function () {
    $('#stock').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax":"http://web111048.000webhostapp.com/getBarang.php",
    } );
});
$(document).ready(function () {
    $('#kasir').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax":"http://web111048.000webhostapp.com/beli.php",
    } );
});
$(document).ready(function () {
    $('#list').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax":"http://web111048.000webhostapp.com/getKaryawan.php",
    } );
});

$(document).ready(function () {
    $('#history').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax":"http://web111048.000webhostapp.com/getPesanan.php",
    } );
});

