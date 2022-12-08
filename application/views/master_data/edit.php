<!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">

<!-- Horizontal Form -->
           <div class="card card-info">
             <div class="card-header">
               <h3 class="card-title"> Form Edit Data Penduduk</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->
             <form class="form-horizontal" action="<?= site_url('master_data/update/'.$data->penduduk_id) ?>" method="post" enctype="multipart/form-data">
               <div class="card-body">
                 <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                   <div class="col-sm-10">
                     <input type="text" name="nik" class="form-control" value="<?= $data->nik ?>" placeholder="NIK 16 Digit" required>
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                   <div class="col-sm-10">
                     <input type="text" name="nama" class="form-control" value="<?= $data->nama ?>" placeholder="Nama">
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                   <div class="col-sm-10">
                     <input type="text" name="tempat_lahir" class="form-control" value="<?= $data->tempat_lahir ?>" placeholder="Tempat Lahir">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                   <div class="col-sm-10">
                     <input type="date" name="tanggal_lahir" class="form-control" value="<?= $data->tanggal_lahir ?>" placeholder="Tanggal Lahir">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                   <div class="col-sm-10">
                     <select class="form-control" name="jk">
                       <optgroup label="Pilih Jenis Kelamin">
                         <option value=""></option>
                         <option <?= $data->jk == 'L'?'selected':'' ?> value="1">Laki-Laki</option>
                         <option <?= $data->jk == 'P'?'selected':'' ?> value="2">Perempuan</option>
                       </optgroup>
                     </select>
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                   <div class="col-sm-10">
                     <input type="text" name="alamat" class="form-control" value="<?= $data->alamat ?>" placeholder="Alamat">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                   <div class="col-sm-10">
                     <input type="file" name="foto" class="form-control" placeholder="Alamat">
                   </div>
                 </div>

               </div>
               <!-- /.card-body -->
               <div class="card-footer">
                 <a href="<?= site_url('master_data') ?>" class="btn btn-default">Batal</a>
                 <button type="submit" class="btn btn-info float-right">Update</button>

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
