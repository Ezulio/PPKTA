    <?php
// DB details
$sql_details = array(
    'user' => 'id11576188_user111048',
    'pass' => '983ysa65h',
    'db'   => 'id11576188_tugasppk',
    'host' => 'localhost'
);
//Create connection and select DB
// DB table to use
$table = 'pembelian';

// Table's primary key
$primaryKey = 'ID_pembelian';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'ID_pembelian', 'dt' => 0 ),
    array( 'db' => 'ID_mobil',  'dt' => 1 ),
    array( 'db' => 'No_ktp',   'dt' => 2 ),
    array( 'db' => 'Nama_pembeli', 'dt' => 3 ),
    array( 'db' => 'tanggal_beli', 'dt' => 4 ),
    array( 'db' => 'jumlah_beli', 'dt' => 5 ),
    array( 'db' => 'ID_karyawan', 'dt' => 6 ),
);

require( 'ssp.class.php' );
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>
