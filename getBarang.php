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
$table = 'mobil';

// Table's primary key
$primaryKey = 'ID_mobil';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'ID_mobil', 'dt' => 0 ),
    array( 'db' => 'nama',  'dt' => 1 ),
    array( 'db' => 'stok',   'dt' => 2 ),
    array( 'db' => 'harga',     'dt' => 3 ),
);

require( 'ssp.class.php' );
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>
