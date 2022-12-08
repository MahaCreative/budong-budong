<style>
*{
  font-family: arial;
  line-height:1.5;
}
td,th{
    padding: 1.5mm;
}
div,p{
    font-family: arial;
}

table.border, tr, td{
  border-collapse: collapse;
  border: 1px solid #555;
  z-index: 1;
}
.bd-all{
  border:3px solid #333;
}
.bd-l{
  border-left:2px solid #333;
}
.bd-r{
  border-right:2px solid #333;
}
.bd-t{
  border-top:2px solid #333;
}
.bd-b{
  border-bottom:2px solid #333;
}
.bd-0{
  border:2px solid white;
}
.bd-l-0{
  border-left:2px solid white;
}
.bd-r-0{
  border-right:2px solid white;
}
.bd-t-0{
  border-top:2px solid white;
}
.bd-b-0{
  border-bottom:2px solid white;
}
.tx-center{
  text-align:center;
}
.tx-bold{
  font-weight: bold;
}
.v-align-middle {
  vertical-align: middle;
}
table .perhatian .bold{
  font-weight: bold;
  font-size: 9pt;
  margin-left:2px;
}

table .perhatian {
  margin: 0;
  padding: 0;
  line-height: 2 !important;

}

table .perhatian ol{
  padding-top: -1px;
  margin-left: -18px;
  margin-bottom: 0;
  padding-bottom: 2px;

}

table .perhatian ol li{
  font-size: 8pt;
  padding: 0;
  margin:0;
  line-height: 2 !important;

}

.arsip ol {
  font-size: 8pt;
  padding-left: -55px;
  margin:0;
}

.arsip ol li{
  font-size: 8pt;
  padding: 0;
  margin:0;

}

.arsip {
  width: 66%;
}




</style>


<page backtop="40mm" backbottom="25mm" backleft="25mm" backright="25mm">
  <page_header>
    <div class="" style="width:100%;">
      <img style="width:600px; margin-left: 75px; margin-top: 44px; text-align:center;" src="<?= FCPATH. 'assets/dist/img/kop_surat.png' ?>" alt="">
    </div>
  </page_header>
  <page_footer>

  </page_footer>

    <div style="font-size:11pt; font-weight:bold; margin-bottom: 8px; text-align:center;">
    <span style="text-decoration:underline;">REKOMENDASI PERMOHONAN BANTUAN DANA RUMAH IBADAH</span> <br>
      NO : <?= $data->no_surat ?>
    </div>

    <br>
    Pemerintah Kecamatan Budong-Budong dalam hal ini :
    <br>
    <br>
    <table style="width: 100%; border-collapse: collapse; margin-left:55px;" class="bdall">


      <tr>
        <td style="padding: 4px; width:15%; font-weight:bold; font-size:10pt; border:none;">
          Nama
        </td>
        <td style="padding: 4px; width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:45.5%; font-size:10pt; padding-left:4px; border:none;">HJ. Najir  S. Pd, M.Pd </td>
      </tr>

      <tr>
        <td style="padding: 4px; width:15%; font-weight:bold; font-size:10pt; border:none;">
          NIP
        </td>
        <td style="padding: 4px; width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:45.5%; font-size:10pt; padding-left:4px; border:none;">19711104 199203 2 007  </td>
      </tr>

      <tr>
        <td style="padding: 4px; width:15%; font-weight:bold; font-size:10pt; border:none;">
          Jabatan
        </td>
        <td style="padding: 4px; width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:45.5%; font-size:10pt; padding-left:4px; border:none;">Camat Budong – Budong</td>
      </tr>

    </table>
    <br>
    Memberikan rekomendasi Permohonan bantuan dana atas Proposal Pembangunan Mesjid yang terletak di Dsn Karondang Desa Babana yang di wakili oleh :
    <br>
    <br>
    <table style="width: 100%; border-collapse: collapse; margin-left:55px;" class="bdall">


      <tr>
        <td style="padding: 4px; width:15%; font-weight:bold; font-size:10pt; border:none;">
          Nama
        </td>
        <td style="padding: 4px; width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:45.5%; font-size:10pt; padding-left:4px; border:none;"><?= $data->nama ?> </td>
      </tr>

      <tr>
        <td style="padding: 4px; width:15%; font-weight:bold; font-size:10pt; border:none;">
          NIK
        </td>
        <td style="padding: 4px; width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:45.5%; font-size:10pt; padding-left:4px; border:none;"><?= $data->nik ?> </td>
      </tr>

      <tr>
        <td style="padding: 4px; width:15%; font-weight:bold; font-size:10pt; border:none;">
          Jabatan
        </td>
        <td style="padding: 4px; width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:45.5%; font-size:10pt; padding-left:4px; border:none;"><?= $data->jabatan ?></td>
      </tr>

    </table>
    <br>
    <span style="text-align:justify;">Dalam proses pembangunan dan penggalangan dana agar mematuhi Peraturan Perundang-Undangan yang berlaku dan membina ketertiban kehidupan bermasyarakat di lingkungan sekitar dan berkewajiban melakukan laporan pembangunan di akhir tahun melalui Kepala Desa dan Kepada Camat Budong-budong.
    </span>
    <br>
    <br>
    <br>
    <br>
    <br>
    <span style="text-align:justify;">Demikian rekomendasi ini dibuat untuk menjadi bahan selanjutnya. Atas perhatiannya diucapkan banyak terima kasih.
    </span>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="" style="margin-left:400px; width:300px;">
      Budong-budong, <?= tanggal_indo($data->created_at) ?> <br>
      Camat Budong-budong
      <br>
      <br>
      <br>
      <br>
      <br>
      <span style="font-weight:bold; text-decoration:underline;">  Hj. NAJIR, S.Pd.,M.Pd</span>
      <br>
      NIP : 19711104 199203 2 007
    </div>



</page>
