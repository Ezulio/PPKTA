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
        "ajax":"getBarang.php",
    } );
});
$(document).ready(function () {
    $('#list').DataTable();
});

