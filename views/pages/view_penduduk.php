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
    <style media="screen">
    fieldset.coba-border {
      border: 1px groove #ddd !important;
      padding: 0 1.4em 1.4em 1.4em !important;
      margin: 0 0 1.5em 0 !important;
      -webkit-box-shadow:  0px 0px 0px 0px #000;
              box-shadow:  0px 0px 0px 0px #000;
    }
    legend.coba-border {
      width:inherit; /* Or auto */
      padding:0 10px; /* To give a bit of padding on the left and right */
      border-bottom:none;
}
    </style>
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
      <fieldset class="coba-border">

        <legend class="coba-border">Informasi biodata</legend>
        <table>
          <?php foreach($penduduk as $row){
            $gender = $row->j_kel == 'L' ? 'Laki-laki' : 'Perempuan';
            ?>
          <tr>
            <td>NIK</td>
            <td> :</td>
            <td> <?php echo $row-> nik; ?></td>
          </tr>
          <tr>
            <td>Nama Penduduk</td>
            <td> :</td>
            <td><?php echo $row-> nama; ?></td>
          </tr>
          <tr>
            <td>Tempat/ Tgl Lahir</td>
            <td> :</td>
            <td><?php echo $row-> tempatlahir; ?>, <?php echo $row-> tgl_lahir; ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td> :</td>
            <td><?php echo $gender; ?></td>
          </tr>
          <tr>
            <td>Agama</td>
            <td> :</td>
            <td><?php echo $row-> agama; ?></td>
          </tr>
          <tr>
            <td>Pekerjaan</td>
            <td> :</td>
            <td><?php echo $row-> pekerjaan; ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td> :</td>
            <td><?php echo $row-> alamat; ?></td>
          </tr>
          <?php }; ?>
        </table>
      </fieldset>
      <br>
      <fieldset class="coba-border">
        <legend class="coba-border">Informasi Tambahan</legend>
        <table>
          <?php foreach($penduduk as $row){ ?>
          <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td><?php echo $row-> kewarganegaraan; ?></td>
          </tr>
          <tr>
            <td>Tanggal Input</td>
            <td>:</td>
            <td><?php echo $row-> tgl_input; ?></td>
          </tr>
          <tr>
            <td>Masa Berlaku</td>
            <td>:</td>
            <td><?php echo $row-> masa_berlaku; ?></td>
          </tr>
          <?php }; ?>
        </table>
      </fieldset>
<div >

</div>
      <br>
      <footer class="footer">
        <p>&copy; Juergen Batubara</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
