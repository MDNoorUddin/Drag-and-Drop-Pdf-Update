<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Updater</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>

a {
    text-decoration: none !important;
}
#bgb{
    width:100%;
}
body{
    font-family:"Roboto";
}

.banar{
    background-image: url(https://images.ctfassets.net/l3l0sjr15nav/11JUObfpG4oiuKEe0Ys824/bb0d66d70c05b770278c598f62cf06ba/pdf-maker-make-pdf-online-with-one-click_2x.png?w=2000);
    background-repeat: no-repeat;
    background-size: cover;
    height: 350px;
    width: 100%;
    margin: 0 auto;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    }
    a{
       font-family: 'Raleway', sans-serif;
    }
</style>
    </head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mr-0">
  <a class="navbar-brand" href="#">PDF Editor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/upload/do_upload"); ?>'>Upload PDF</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/upload/show_uploads"); ?>'>Show PDF</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/upload/logout"); ?>'>Sign Out</a>
      </li>
    </ul>
    <ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
  <img src="https://www.freelogodesign.org/file/app/client/thumb/a32a4c35-b18c-4c25-b5c1-dd1b126b4835_200x200.png?1606635553802" alt="" height="80px">
  <a class="navbar-brand" href="#">PDF Updater</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href='<?= base_url("index.php/upload/do_upload"); ?>'>Upload PDF</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href='<?= base_url("index.php/upload/show_uploads"); ?>'>Show PDF's</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">History<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href='<?= base_url("index.php/upload/logout"); ?>'>Logout</a>
      </li>
    </ul>
  </div>
</nav>
 -->

<!-- <div class="container-fluid mb-3">
    <div class="row">
       <div class="banar text-white col-lg-12">
          <H1>PDF Updater</H1>
       </div>
    </div>
</div> -->
</body>
</html>