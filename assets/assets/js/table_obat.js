//list obat ----------------------------------------------------------------------------------------------------
 $(document).ready(function() {
     var table = $('#list-jual').DataTable( { 
         "processing": true,
         "serverSide": true,
         "ajax": "asset/ajax/table_obat.php",
         "columnDefs": [ {
             "targets": -1,
             "data": null,
     "defaultContent": "<button class='btn btn-dark btn-sm addcart'><span class='fa fa-plus'></span> Pilih</button>",
         }]
     });
 
     $('#list-jual tbody').on( 'click', '.addcart', function () {
         var data = table.row( $(this).parents('tr') ).data();
         window.location.href = "?p=form-penjualan&&data="+ data[1] +"&&kode="+ data[0];
     } );
 });
//end list obat-------------------------------------------------------------------------------------------------


// view data penjualan --------------------------------------------------------------------------------------------------------------------------- -->
 $(document).ready(function() {
     var table = $('#data_penjualan').DataTable( { 
         "ordering" : false,
         "processing": true,
         "serverSide": true,
         "ajax": "asset/ajax/data_penjualan.php",
         "columnDefs": [ {
             "targets": -1,
             "data": null,
             "defaultContent": "<button class='btn btn-danger btn-sm struk' target='_blank'><span class='fa fa-print'></span> Cetak</button>",
         }]
     });
 

     $('#data_penjualan tbody').on( 'click', '.struk', function () {
         var data = table.row( $(this).parents('tr') ).data();
         window.location.href = "pages/view/struk.php?kode="+ data[0];
     } );

 });


// end view data penjualan  ------------------------------------------------------------------------------------------------------------------ -->
