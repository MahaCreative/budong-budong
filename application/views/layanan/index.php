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
               <!-- <h3 class="card-title">DataTable with default features</h3> -->
               <a href="<?= site_url('master_data/tambah') ?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> Tambah Data</a>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                 <tr>
                   <th>No.</th>
                   <th>NIK</th>
                   <th>Nama</th>
                   <th>Alamat</th>
                   <th>Jenis Kelamin</th>
                   <th>Tempat Lahir</th>
                   <th>Tanggal Lahir</th>
                   <th>Aksi</th>
                 </tr>
                 </thead>
                 <tbody>
                   <?php
                   $no = 1;
                   foreach ($data as $key => $v) : ?>
                     <tr>
                       <td><?= $no++ ?></td>
                       <td><?= $v->nik ?></td>
                       <td><?= $v->nama ?></td>
                       <td><?= $v->alamat ?></td>
                       <td><?= $v->jk ?></td>
                       <td><?= $v->tempat_lahir ?></td>
                       <td><?= $v->tanggal_lahir ?></td>
                       <td>
                         <a onclick="return confirm('Yakin ingin  menghapus?')" href="<?= site_url('master_data/hapus/'.$v->penduduk_id) ?>" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Delete</a>
                          <a href="<?= site_url('master_data/edit/'.$v->penduduk_id) ?>" class="btn btn-primary btn-xs"> <i class="fa fa-pen"></i> Edit</a>
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
