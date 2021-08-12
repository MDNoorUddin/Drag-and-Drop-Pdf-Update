<html>
<head>
<title>Upload Form</title>
</head>
<style>
.ft{
      position: absolute;
      bottom: 0;
      width: 100%;
      }
  body{
     font-family: 'Raleway', sans-serif;
  }
  
</style>
<body>

<div class="container d-flex justify-content-center" style="margin-top:160px;">
    <div class="row card bg-light shadow-lg p-5">
    <div class="col-lg-12">
    <?php echo form_open_multipart('upload/do_upload');?>
      <h1 class="display-4 m-5 font-weight-normal text-center lead" style=" font-family: 'Raleway', sans-serif;">PDF Selecter</h1>
      <p class="lead">Please Choose a PDF</p>
      <div class="form-group">
      <label for="inputEmail" class="sr-only lead" style=" font-family: 'Raleway', sans-serif;">Choose PDF</label>
      <input type="file" class="form-control-file" name="userfile" size="20" required />
      </div>
      <div class="form-group">
      <label style=" font-family: 'Raleway', sans-serif;">Write Short Note about PDF(<span class="text-danger">with-in 100 characters</span>)</label>
      <br>
      
      <textarea name="notes" rows="3" cols="40" style="resize:none;font-size:20px;" maxlength="100" required></textarea>
      </div>
      
      <button class=" mt-5 btn btn-lg btn-primary btn-block" value="upload" type="submit">Upload</button>
      
    </form>
    </div>
    </div>
    </div>
    <div class="container-fluid bg-primary text-white" style="margin-top:162px;">
   <div class="row">
     <div class="col-lg-4 mt-2 pl-1">
     <img src="https://www.freelogodesign.org/file/app/client/thumb/a32a4c35-b18c-4c25-b5c1-dd1b126b4835_200x200.png?1606635553802" alt="" height="80px;">   
     </div>
     <div class="col-lg-4 text-center mt-5">
        
        <p> Copyright © 2020 All rights reserved</p>
     </div>
     <div class="col-lg-4 d-flex justify-content-end  mt-5">
     <i class="fa fa-facebook text-white mr-4"></i>
     <i class="fa fa-twitter  text-white mr-4"></i>
     <i class="fa fa-youtube  text-white mr-5"></i>
     </div>
   </div>
</div>
</div>

  </body>
</html> 
