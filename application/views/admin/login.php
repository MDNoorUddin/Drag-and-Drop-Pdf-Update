<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>"/>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
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

</style>
   </style>
   </head>
<body style="margin:150px;">

<div class="container d-flex justify-content-center mt-5">
<div class="row" style="margin-top:50px;">
<h1 class="display-5 text-secondary">Admin Log In</h1>
</div>
</div>
<div class="container d-flex justify-content-center">
<div class="row text-center card p-5 bg-light shadow-lg">

<div class="col">
  <form action='<?= base_url("index.php/admin/login"); ?>' method="POST">
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" id="usr" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-2" >Login</button>
    
      </form>
</div>
</div>
</div>
<div>
</body>
</html>
