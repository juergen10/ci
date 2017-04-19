<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Data Penduduk</title>

    <!-- Bootstrap  <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug-->


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/jumbotron-narrow.css');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="<?=site_url('home/index');?>">Master Data</a></li>
            <li role="presentation" class="active"><a href="<?=site_url('home/penduduk');?>">Master Input</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Data Penduduk</h3>
      </div>
      <div class="">
        <h3 align="right">FORM INPUT DATA PENDUDUK</h3>
        <hr>
        <form class = "form-horizontal" role = "form" action="<?php echo site_url("home/update"); ?>"  method="POST">
          <?php $row = current($penduduk); ?>
          <div class = "form-group">
             <label for = "namadepan" class = "col-sm-2 control-label">NIK</label>
             <div class = "col-sm-10">
                <input type = "text" class = "form-control" name="nik" value="<?php echo $row-> nik; ?>" readonly>
             </div>
          </div>
           <div class = "form-group">
              <label for = "namadepan" class = "col-sm-2 control-label">Nama Lengkap</label>
              <div class = "col-sm-10">
                 <input type = "text" class = "form-control" name="nd" value="<?php echo $row-> nama; ?>">
              </div>
           </div>
           <div class = "form-group">
              <label for = "tempatlahir" class = "col-sm-2 control-label">Tempat Lahir</label>
              <div class = "col-sm-10">
                 <input type = "text" class = "form-control" name="tl" value="<?php echo $row-> tempatlahir; ?>">
              </div>
           </div>
           <div class = "form-group">
              <label for = "tanggallahir" class = "col-sm-2 control-label">Tanggal Lahir</label>
              <div class = "col-sm-10">
                <div class='input-group date' id='datetimepicker'>
                  <input type='text' class="form-control" name="tgl" value="<?php echo $row-> tgl_lahir; ?>"/>
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar">
                      </span>
                    </span>
                  </div>
              </div>
          </div>
           <div class = "form-group">
              <label for = "lastname" class = "col-sm-2 control-label">Jenis Kelamin</label>
              <div class = "col-sm-10">
                 <select class="" name="jk" >
                   <option value="0">Pilih jenis kelamin</option>
                   <option value="L">Laki-laki</option>
                   <option value="P">Perempuan</option>
                 </select>
              </div>
           </div>
           <div class = "form-group">
              <label for = "lastname" class = "col-sm-2 control-label">Agama</label>
              <div class = "col-sm-10">
                 <select class="0" name="agama">
                   <option value="">Pilih agama</option>
                   <option value="Islam">Islam</option>
                   <option value="Kristen Protestan">Kristen Protestan</option>
                   <option value="Kristen Khatolik">Kristen Khatolik</option>
                   <option value="Budha">Budha</option>
                   <option value="Hindu">Hindu</option>
                   <option value="Konghucu">Konghucu</option>
                 </select>
              </div>
           </div>
           <div class = "form-group">
              <label for = "Pekerjaan" class = "col-sm-2 control-label">Pekerjaan</label>
              <div class = "col-sm-10">
                 <input type = "text" class = "form-control" name="pk" value="<?php echo $row-> pekerjaan; ?>">
              </div>
           </div>
           <div class = "form-group">
              <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
              <div class = "col-sm-10">
                 <textarea name="al" style="width:100%"><?php echo $row-> alamat; ?></textarea>
              </div>
           </div>
           <div class = "form-group">
              <div class = "col-sm-offset-2 col-sm-10">
                 <button type = "submit" class = "btn btn-info"><i class="glyphicon glyphicon-floppy-saved"></i> Update</button>
                 <button type = "reset" class = "btn btn-danger"><i class="glyphicon glyphicon-floppy-remove"></i> Reset</button>
              </div>
           </div>

        </form>
      </div>
      <br>
      <footer class="footer">
        <p>&copy; Juergen Batubara</p>
      </footer>

    </div> <!-- /container -->
    <script type="text/javascript">
      $(document).ready(function() {
        $(function () {
            $('#datetimepicker').datetimepicker({
              viewMode: 'years',
              format: 'YYYY/MM/DD'
            });
        });
    });
</script>
  </body>
</html>
