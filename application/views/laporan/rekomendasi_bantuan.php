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
              LAPORAN PERMOHONAN SURAT Rekomendasi Bantuan Dana
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                 <tr>
                   <th>No.</th>
                   <th>No Permohonan</th>
                   <th>Nama Pemohon</th>
                   <th>Jabatan</th>
                   <th>No Surat</th>
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
                       <td><?= 'PDN-'.str_pad($v->no_permohonan, 10, 0, STR_PAD_LEFT) ?></td>
                       <td><?= $v->nama ?></td>
                       <td><?= $v->jabatan ?></td>
                       <td><?= $v->no_surat ?></td>
                       <td><?= $v->created_at ?></td>
                       <td class="textcenter">
                          <a target="_blank" href="<?= site_url('laporan/download_lrekomendasi_bantuan/'.$v->rekomendasi_bantuan_id) ?>" class="btn btn-primary btn-xs dflex"> <i class="fa fa-download"></i> &nbsp; Download</a>
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
