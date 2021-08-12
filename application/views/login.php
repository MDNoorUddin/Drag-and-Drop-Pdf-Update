<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    background-image: url(https://www.freelogodesign.org/file/app/client/thumb/a32a4c35-b18c-4c25-b5c1-dd1b126b4835_200x200.png?1606635553802);
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
<body style="margin:70px;">
<div class="container-fluid" >
      <div class="row d-flex justify-content-center ">
          <div class="col-lg-12 d-flex justify-content-center">
              <img src="https://www.freelogodesign.org/file/app/client/thumb/a32a4c35-b18c-4c25-b5c1-dd1b126b4835_200x200.png?1606635553802" alt="" height="150px;">   
          </div>
      </div>  
</div> 
<!-- <div class="container d-flex justify-content-center mt-3">
<div class="row">
<h1 class="display-5 text-secondary">Log in to continue</h1>
</div>
</div>
<div class="container d-flex justify-content-center">
<div class="row text-center card p-5 bg-light shadow-lg">

<div class="col">
  <form action='<?= base_url("index.php/upload/login"); ?>' method="POST">
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" id="usr" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" required>
    </div>
    <button type="submit" class="btn btn-outline-primary px-3 mx-3" >Login</button>
    <button type="button" class="btn btn-outline-success px-3 mx-3" onclick="window.location='<?php echo site_url('upload/register');?>'">Register</button>
      </form>
</div>
</div>
</div> -->
<div>
<div class="container d-flex justify-content-center" style="margin-top:40px;">
    <div class="row card bg-light shadow-lg p-5">
    <div class="col-lg-12">
    <form action='<?= base_url("index.php/upload/login"); ?>' method="POST">
      <h1 class="h2 m-3 font-weight-normal text-center lead" style=" font-family: 'Raleway', sans-serif;">Sign in to Continue</h1>
      <div class="form-group">
          <label for="usr"><p class="lead m-0">Email*</p></label>
          <input type="text" class="form-control" id="usr" name="email" required>
      </div>
      <div class="form-group">
      <label for="pwd"><p class="lead m-0">Password*</p></label>
      <input type="password" class="form-control" id="pwd" name="password" required>
    </div>
      <!-- <button class=" mt-5 btn btn-lg btn-primary btn-block" value="upload" type="submit">Upload</button> -->
      <div class="row">
      <div class="col-md-6">
      <button type="submit" class="btn btn-primary btn-block" >Login</button>
      </div>
      <div class="col-md-6">
       <button type="button" class="btn btn-success btn-block" onclick="window.location='<?php echo site_url('upload/register');?>'">Register</button>
       </div>
      
    </form>
    </div>
    </div>
    </div>
</div>
</body>
</html>
