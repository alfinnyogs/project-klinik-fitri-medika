<?php
$table = 'obat';
$primaryKey = 'id';
 
$columns = array(
    array(
           'db'        => 'Kode Obat',
           'dt'        => 0,
           'formatter' => function( $d, $row ) {
            return ($d);
           }
       ),
    array( 'db' => 'Nama Obat','dt' => 1 ),
    array( 'db' => 'Jenis Obat','dt' => 2 ),
    array(
       'db'        => 'Harga',
       'dt'        => 3,
       'formatter' => function( $d, $row ) {
        return 'Rp. '.(number_format($d));
       }
    ),
    array( 'db' => 'Stok', 'dt' => 4 ),
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'klinik',
    'host' => 'localhost'
);
require('ssp.class.php');
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>