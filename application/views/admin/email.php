
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Keluar
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Email Keluar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
             <div class="container">
  <h1>Email Example With attchment</h1>
  <form action="<?php echo base_url()?>admin/sendEmail" method="POST" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="exampleInputEmail1">Enter Email</label>
      <input type="email" class="form-control" placeholder="Enter Email id" name="email_id"/>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Enter Subject</label>
      <input type="text" class="form-control" placeholder="Enter Email Subject" name="subject"/>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Body Content</label>
      <textarea class="form-control"  rows="3" placeholder="Enter Email Body Content" name="body"></textarea>
    </div>
    <div class="form-group">
                  <label>upload file</label>
                  <input type="file" name="lampiran[]" accept=".doc,.docx, .pdf, .jpg" required />

                
    <button type="submit" name="sendEmail" value="sendEmail" class="btn btn-default">Submit</button>
  </form>
 </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                

                </div>
             </div>
          </div>
        </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


</div>