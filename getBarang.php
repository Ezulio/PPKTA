<?php
// DB details
$sql_details = array(
    'user' => 'web111048',
    'pass' => 'projekppk',
    'db'   => 'tugasakhirppk',
    'host' => 'web111048'
);
//Create connection and select DB
// DB table to use
$table = 'barang';

// Table's primary key
$primaryKey = 'Barang_ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'Barang_ID', 'dt' => 0 ),
    array( 'db' => 'Nama_Barang',  'dt' => 1 ),
    array( 'db' => 'Stok',   'dt' => 2 ),
    array( 'db' => 'Harga',     'dt' => 3 ),
);

require( 'ssp.class.php' );
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>
