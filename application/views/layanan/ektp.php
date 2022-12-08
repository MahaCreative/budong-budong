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
               <h3 class="card-title"> FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA (F-1.21)</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->
             <form class="form-horizontal" action="<?= site_url('layanan/simpan_ektp') ?>" method="post">


               <div class="card-body">
                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">No. Permohonan</label>
                   <div class="col-sm-10">
                     <input type="text" name="" class="form-control" disabled value="<?= 'P-EKTP-'.str_pad($no_permohonan->no_permohonan, 10, 0, STR_PAD_LEFT) ?>" placeholder="<?= 'P-EKTP'.str_pad($no_permohonan->no_permohonan, 10, 0, STR_PAD_LEFT) ?>">
                     <input type="hidden"  name="no_permohonan" value="<?= $no_permohonan->no_permohonan ?>">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Penduduk</label>
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
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Permohonan KTP</label>
                   <div class="col-sm-10">
                     <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tipe_permohonan" value="1" id="r1">
                          <label class="form-check-label" for="r1">Baru</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tipe_permohonan" value="2" id="r2">
                          <label class="form-check-label" for="r2">Perpanjangan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tipe_permohonan" value="3" id="r3">
                          <label class="form-check-label" for="r3">Penggantian</label>
                        </div>
                      </div>
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">No. KK</label>
                   <div class="col-sm-10">
                     <input type="text" name="no_kk" class="form-control" value="" placeholder="">
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">RT/RW</label>
                   <div class="col-sm-3">
                     <input type="text" name="rt" class="form-control" value="" placeholder="RT">
                   </div>
                   <div class="col-sm-3">
                     <input type="text" name="rw" class="form-control" value="" placeholder="RW">
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
