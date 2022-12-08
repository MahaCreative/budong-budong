<!-- Main content -->
   <section class="content">

     <div class="container-fluid">
       <div class="<?= $this->session->flashdata('message')?'':'d-none' ?> alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <?= $this->session->flashdata('message'); ?>
       </div>
       <div class="row">

         <div class="col-12">

           <div class="card">
             <div class="card-header dnone">
              LAPORAN PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                 <tr>
                   <th>No.</th>
                   <th>No Permohonan</th>
                   <th>Nama</th>
                   <th>RT/RW</th>
                   <th>Tipe Permohonan</th>
                   <th>Tanggal Permohonan</th>
                   <th>Dokumen</th>
                 </tr>
                 </thead>
                 <tbody>
                   <?php
                   $no = 1;
                   foreach ($data as $key => $v) : ?>
                     <tr>
                       <td><?= $no++ ?>.</td>
                       <td><?= 'P-EKTP-'.str_pad($v->no_permohonan, 10, 0, STR_PAD_LEFT) ?></td>
                       <td><?= $v->nama ?></td>
                       <td><?= "$v->rt/$v->rw" ?></td>
                       <td><?= $v->tipe_permohonan ?></td>
                       <td><?= $v->date_created ?></td>
                       <td class="textcenter">
                          <a target="_blank" href="<?= site_url('laporan/download_lektp/'.$v->perektp_id) ?>" class="btn btn-primary btn-xs dflex"> <i class="fa fa-download"></i> &nbsp; Download</a>
                       </td>
                     </tr>
                   <?php endforeach; ?>

                 </tfoot>
               </table>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
