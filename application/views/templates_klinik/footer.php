  <footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; KLINIK FITRI MEDIKA 2021 <div class="bullet"></div> Design By <a href="#">HOMEZI</a>
    </div>
</footer>

    </div>
  </div>

  <script>
  function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[2];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>

  <script type="text/javascript">
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value);
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? rupiah : "";
    }

  </script>

  <script type="text/javascript">
    function penjumlahanobat()
    {
      var stok   = $('input[name="stok"]').val();
      var harga = $('input[name="harga_obat"]').val();
      var total = parseFloat(stok) * parseFloat(harga);
      if(!isNaN(total))
      {
        $('input[name="total_harga"]').val(total);
      }else{
        $('input[name="total_harga"]').val(0);
      }
    }
    function penjualanobat()
    {
      var qty   = $('input[name="jual"]').val();
      var harga = $('input[name="harga_obat"]').val();
      var total = parseFloat(qty) * parseFloat(harga);
      if(!isNaN(total))
      {
        $('input[name="grandtotal"]').val(total);
      }else{
        $('input[name="grandtotal"]').val(0);
      }
    }
    function penjumlahanrawatinap()
    {
      var visite   = $('input[name="biaya_visite"]').val();
      var jumlah   = $('input[name="jumlah_biaya"]').val();
      var total = parseFloat(visite) + parseFloat(jumlah);
      if(!isNaN(total))
      {
        $('input[name="total_biaya"]').val(total);
      }else{
        $('input[name="total_biaya"]').val(0);
      }
    }
    function penjumlahanrawatjalan()
    {
      var obat          = $('input[name="biaya_obat"]').val();
      var pendaftaran   = $('input[name="biaya_pendaftaran"]').val();
      var total = parseFloat(obat) + parseFloat(pendaftaran);
      if(!isNaN(total))
      {
        $('input[name="total_pembayaran"]').val(total);
      }else{
        $('input[name="total_pembayaran"]').val(0);
      }
    }
    function penjumlahanbiaya()
    {
      var dokter          = $('input[name="biaya_dokter"]').val();
      var klinik   = $('input[name="biaya_klinik"]').val();
      var total = parseFloat(dokter) + parseFloat(klinik);
      if(!isNaN(total))
      {
        $('input[name="total"]').val(total);
      }else{
        $('input[name="total"]').val(0);
      }
    }
    function penjumlahankwitansi()
    {
      var uang_makan          = $('input[name="uang_makan"]').val();
      var uang_duduk          = $('input[name="uang_duduk"]').val();
      var rawat_jalan_umum    = $('input[name="rawat_jalan_umum"]').val();
      var rawat_jalan_bpjs    = $('input[name="rawat_jalan_bpjs"]').val();
      var rawat_inap_umum     = $('input[name="rawat_inap_umum"]').val();
      var rawat_inap_bpjs     = $('input[name="rawat_inap_bpjs"]').val();
      var antigen             = $('input[name="antigen"]').val();
      var rapidtest           = $('input[name="rapidtest"]').val();
      var tindakan_umum       = $('input[name="tindakan_umum"]').val();
      var tindakan_bpjs       = $('input[name="tindakan_bpjs"]').val();
      var visite_umum         = $('input[name="visite_umum"]').val();
      var visite_bpjs         = $('input[name="visite_bpjs"]').val();
      var observasi           = $('input[name="observasi"]').val();
      var home_visite         = $('input[name="home_visite"]').val();
      var total               = parseFloat(uang_makan) + parseFloat(uang_duduk) + parseFloat(rawat_jalan_umum) + parseFloat(rawat_jalan_bpjs) + parseFloat(rawat_inap_umum) + parseFloat(rawat_inap_bpjs) + parseFloat(antigen) + parseFloat(rapidtest) + parseFloat(tindakan_umum) + parseFloat(tindakan_bpjs) + parseFloat(visite_umum) + parseFloat(visite_bpjs) + parseFloat(observasi) + parseFloat(home_visite);
      if(!isNaN(total))
      {
        $('input[name="total_bayar"]').val(total);
      }else{
        $('input[name="total_bayar"]').val(0);
      }
    }
  </script>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets') ?>/assets/js/scripts.js"></script>
  <script src="<?php echo base_url('assets') ?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets') ?>/assets/js/page/index-0.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets') ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets') ?>/assets/js/demo/datatables-demo.js"></script>

</body>
</html>