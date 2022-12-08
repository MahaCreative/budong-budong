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


<page backtop="50mm" backbottom="10mm" backleft="25mm" backright="25mm">
  <page_header>
    <div class="" style="width:100%;">
      <img style="width:600px; margin-left: 75px; margin-top: 22px; text-align:center;" src="<?= FCPATH. 'assets/dist/img/kop_surat2.png' ?>" alt="">
    </div>
  </page_header>
  <page_footer>

  </page_footer>

    <div style="font-size:11pt; font-weight:bold; margin-bottom: 8px; text-align:center;">
    <span style="text-decoration:underline;">SURAT IZIN USAHA MIKRO DAN KECIL</span> <br>
      NO : <?= $data->no_surat ?>
    </div>

    <br>
    <span style="text-align:justify;">
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Berdasarkan peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan untuk Usaha Mikro dan Kecil Lembaran Negara Republik Indonesia Tahun 2014 Nomor 222 Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014  tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil  Peraturan Bupati Mamuju Tengah Nomor 31 Tahun 2015 Tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada camat di kabupaten Mamuju Tengah bersama ini menyatakan dan memberikan izin kepada :
    </span>
    <br>
    <br>
    <table style="width: 100%; border-collapse: collapse;" class="bdall">


      <tr>
        <td style="padding: 4px;  width:15%; font-size:10pt; border:none;">
          Nama
        </td>
        <td style="padding: 4px; width:2%; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;">HJ. Najir  S. Pd, M.Pd </td>
      </tr>

      <tr>
        <td style="padding: 4px; padding-top: 10px;  width:15%; font-size:10pt; border:none;">
          Alamat
        </td>
        <td style="padding: 4px; padding-top: 10px; width:2%; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;">19711104 199203 2 007  </td>
      </tr>

      <tr>
        <td style="padding: 4px; padding-top: 10px;  width:15%; font-size:10pt; border:none;">
          No. Telpon
        </td>
        <td style="padding: 4px; padding-top: 10px; width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;">Camat Budong – Budong</td>
      </tr>

    </table>
    <br>
    <span style="text-align:justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Untuk mendirikan Usaha Mikro dan Kecil  yang mencakup perizinan dasar berupa menempati lokasi/domisili melakukan kegiatan usaha baik produksi maupun penjualan barang dan jasa dengan identitas:
    </span>
    <br>
    <table style="width: 100%; border-collapse: collapse;" class="bdall">


      <tr>
        <td style="padding: 4px;  width:36%; font-size:10pt; border:none;">
          Nama Usaha
        </td>
        <td style="padding: 4px; width:2%; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; font-weight: bold; padding-left:4px; border:none;"> "<?= $data->nama_usaha ?>" </td>
      </tr>

      <tr>
        <td style="padding: 4px; width:36%; font-size:10pt; border:none;">
          Bentuk Usaha
        </td>
        <td style="padding: 4px;width:2%; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;"><?= $data->bentuk_usaha ?></td>
      </tr>

      <tr>
        <td style="padding: 4px; width:36%; font-size:10pt; border:none;">
          NPWP
        </td>
        <td style="padding: 4px;width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;"><?= $data->npwp ?></td>
      </tr>
      <tr>
        <td style="padding: 4px; width:36%; font-size:10pt; border:none;">
          Kegiatan Usaha
        </td>
        <td style="padding: 4px;width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;"><?= $data->kegiatan_usaha ?></td>
      </tr>
      <tr>
        <td style="padding: 4px; width:36%; font-size:10pt; border:none;">
          Sarana Usaha yang digunakan
        </td>
        <td style="padding: 4px;width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;"><?= $data->sarana ?></td>
      </tr>
      <tr>
        <td style="padding: 4px; width:36%; font-size:10pt; border:none;">
          Alamat Usaha
        </td>
        <td style="padding: 4px;width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;"><?= $data->alamat_usaha ?></td>
      </tr>
      <tr>
        <td style="padding: 4px; width:36%; font-size:10pt; border:none;">
          Jumlah Modal Usaha
        </td>
        <td style="padding: 4px;width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-weight: bold;font-size:10pt; padding-left:4px; border:none;"><?= $data->modal ?></td>
      </tr>
      <tr>
        <td style="padding: 4px; width:36%; font-size:10pt; border:none;">
          Nomor Pendaftaran
        </td>
        <td style="padding: 4px;width:2%; font-weight:bold; font-size:10pt; border:none;">:  </td>
        <td style="padding: 1px; text-align:left; width:50%; font-size:10pt; padding-left:4px; border:none;"><?= $data->no_pendaftaran ?></td>
      </tr>

    </table>
    <br>
    <br>
    <br>
    <div class="" style="margin-left:385px; width:300px;">
      Ditetapkan di   : Budong-Budong <br>
    <span style="text-decoration:underline;">Pada Tanggal   : <?= tanggal_indo($data->created_at) ?></span> <br>

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
