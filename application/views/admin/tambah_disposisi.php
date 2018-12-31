<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Disposisi</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/disposisi">Disposisi</a></li>
              <li class="active">Tambah</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Disposisi</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
               
             <form action="<?php base_url('admin/add/') ?>" method="post" enctype="multipart/form-data" >
               <div class="form-group">
                <label for="name">gambar</label>
                <input type="file" name="gambar" />
                
              </div>
                <div class="form-group">
                    <label for="surat">Tanggal Surat</label>
                      <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" placeholder="Tanggal Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="nama"/>
                  </div>
              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

</div>

           
            <!--   
                  <a href="<?php echo base_url(); ?>admin/disposisi" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button> -->
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>