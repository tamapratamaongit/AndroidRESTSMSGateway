<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

  <style type="text/css">
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      padding: 10px;

    }
  </style>

</head>
<body>
	 
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">ANDROID SMS GATEWAY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('sms'); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('sms/docs'); ?>">docs</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h1 style="margin-top: 40px">EXAMPLE FOR SENDING SMS</h1>
          <form method="post" action="<?= site_url('sms/send');?>">
            <div class="form-group">
              <label for="to">Nomor Tujuan</label>
              <input type="text" class="form-control" id="to" placeholder="to" name="to">
            </div>
             <div class="form-group">
              <label for="message">Pesan</label>
              <textarea name="message" class="form-control" id="message" placeholder="message">
                
              </textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <footer>
      <a class="float-right">AUTHOR : KUSMANTO PRATAMA (TAMA)</a>
    </footer>
</body>
<!-- JQUERY -->

<script src="<?= base_url('assets/js/jquery.min.js');?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
</html>
