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
$table = 'karyawan';

// Table's primary key
$primaryKey = 'ID_karyawan';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'ID_karyawan', 'dt' => 0 ),
    array( 'db' => 'No_ktp', 'dt' => 1 ),
    array( 'db' => 'nama',  'dt' => 2 ),
    array( 'db' => 'jenis_kelamin',  'dt' => 3 ),
    array( 'db' => 'ttl',  'dt' => 4 ),
    array( 'db' => 'No_hp',  'dt' => 5 ),
    array( 'db' => 'Alamat',  'dt' => 6 ),
);

require( 'ssp.class.php' );
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>
