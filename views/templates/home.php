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

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/jumbotron-narrow.css');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
      <h3 align="right">DATA PENDUDUK</h3>

      <div class="table-responsive">
        <table class="table table-hover">

          <th>No.</th>
          <th>NIK</th>
          <th>Nama Penduduk</th>
          <th>Tempat/Thl Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Masa Berlaku</th>
          <th>Aksi</th>
          <?php
          $no=1;
          foreach($penduduk as $row){
            $gender = $row->j_kel == 'L' ? 'Laki-laki' : 'Perempuan';
            ?>

          <tbody>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row-> nik; ?></td>
            <td><a href="<?php echo site_url("home/view/" . $row-> nik);?>"><?php echo $row-> nama; ?></a></td>
            <td><?php echo $row-> tempatlahir; ?>, <?php echo $row-> tgl_lahir; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $row-> masa_berlaku; ?></td>
            <td>
              <a href="<?php echo site_url("home/penduduk_edit/" . $row-> nik);?>" class="btn btn-info btn-xs" role="button"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a>
      				<a href="<?php echo site_url("home/del_pen/" . $row-> nik);?>" onclick="return confirm('Hapus Data Ini?');" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tbody>
          <?php } ?>
        </table>
      </div>
<div >

</div>
      <br>
      <footer class="footer">
        <p>&copy; Juergen Batubara</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
