<?php
  $no_req = $no_permohonan->no_permohonan === NULL?1:3;
 ?>


<!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="<?= $this->session->flashdata('message')?'':'d-none' ?> alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <?= $this->session->flashdata('message'); ?>
       </div>
       <div class="row">
         <div class="col-12">

<!-- Horizontal Form -->
           <div class="card card-info">
             <div class="card-header">
               <h3 class="card-title"> FORMULIR PERMOHONAN SURAT REKOMENDASI BANTUAN DANA</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->
             <form class="form-horizontal" action="<?= site_url('layanan/simpan_rekomendasi_bantuan') ?>" method="post">


               <div class="card-body">
                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">No. Permohonan </label>
                   <div class="col-sm-10">
                     <input type="text" name="" class="form-control" disabled value="<?= 'RBD-'.str_pad($no_req, 10, 0, STR_PAD_LEFT) ?>" placeholder="<?= 'RBD'.str_pad($no_req, 10, 0, STR_PAD_LEFT) ?>">
                     <input type="hidden"  name="no_permohonan" value="<?= $no_req ?>">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Surat</label>
                   <div class="col-sm-10">
                     <input type="text" name="no_surat" class="form-control" value="" placeholder="">
                   </div>
                 </div>

                 <hr>

                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pemohon</label>
                   <div class="col-sm-10">
                     <select class="form-control" name="penduduk_id">
                         <option value="">-- Pilih Nama Penduduk -- </option>
                         <?php
                         $no =1;
                         foreach ($data as $key => $v) : ?>
                           <option value="<?= $v->penduduk_id ?>"><?= $no++. ". $v->nama [NIK: $v->nik]" ?></option>
                         <?php endforeach; ?>
                     </select>
                   </div>
                 </div>


                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                   <div class="col-sm-10">
                     <input type="text" name="jabatan" class="form-control" value="" placeholder="">
                   </div>
                 </div>





               </div>
               <!-- /.card-body -->
               <div class="card-footer">
                 <button type="submit" class="btn btn-info float-right">Simpan</button>

               </div>
               <!-- /.card-footer -->
             </form>
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
