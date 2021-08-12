<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit History</title>
  
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
    .card{
      font-family: 'Roboto', sans-serif !important;

    }
    h1{
      font-family: 'Raleway', sans-serif;

    }
    body{
      background-color:rgb(230, 176, 170);
    }
    .ft{
      position: absolute;
      bottom: 0;
      width: 100%;
      }
    </style>
</head>
<body>
  <div class="container pb-0">
  <div class="text-center">
  <h1 class="h3 m-5">Edit History of <span class="font-italic text-info"><?php echo $history[0]['pdf_name']; ?></span></h1>
  <hr>
  
  <!-- <table class="table table-hover m-5">
    <thead>
      <tr>
        <th>PDF id</th>
        <th>PDF Name</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
     <?php $i=0;?>
     <?php foreach ($history as $text): $i++;?>
      <tr class="p-5">
        <td><p><?php echo $i;?></p></td>
        <td><?php echo $text['pdf_name']; ?></td>
        
        <td>
            <a type="submit" class="btn btn-outline-info" name="success" href='<?= base_url("index.php/upload/show_pdf/".$text['id']."/"); ?>'>View</a>
        </td>
        <td>
            <a type="submit" class="btn btn-outline-primary" name="success" href='<?= base_url("index.php/upload/edit_pdf/".$text['id']."/"); ?>'>Edit</a>
        </td>
        <td>
            <a type="submit" class="btn btn-outline-danger" name="success" href='<?= base_url("index.php/upload/show_pdf/".$text['id']."/"); ?>'>Delete                                               </a>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table> -->
  <div class="row mb-5">
    <div class="col-lg-12 shadow-lg">
        <table class="table table-hover ">
        <thead>
        <tr class="table-primary">
        <th scope="col" class="text-center">Edit Type</th>
        <th scope="col" class="text-center">PDF Name</th>
        <th scope="col" class="text-center">Editing Time</th>
        <th scope="col" class="text-center">View</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($history as $text): 
       if($text['isDelete']==1){
         continue;
       }
       $i++;
    ?>
     
    <tr class="table-active">
      <td scope="row" class="text-center"> <?php echo $text['edit_type']; ?></td>
      <td class="text-center"><?php echo $text['pdf_name']; ?></td>
      <td class="text-center"><?php echo $text['editing_time']; ?></td>
      <td class="text-center"><a href='<?= base_url("index.php/upload/pdf_version/".$text['pdf_name']."/".$text['edit_id']."/"); ?>' class="btn btn-success">View Version</a></td>
    </tr>
     <?php endforeach;?>
     </tbody>
     </table>
     </div>
  </div>
</div>
</div>
<div class="container-fluid bg-primary text-white pl-1 ft" style="width:100%;">
  <div class="footer">
   <div class="row">
     <div class="col-lg-4">
     <img src="https://www.freelogodesign.org/file/app/client/thumb/a32a4c35-b18c-4c25-b5c1-dd1b126b4835_200x200.png?1606635553802" alt="" height="80px;">   
     </div>
     <div class="col-lg-4 text-center mt-4">
        
        <p> Copyright © 2020 All rights reserved</p>
     </div>
     <div class="col-lg-4 d-flex justify-content-end  mt-4">
     <i class="fa fa-facebook text-white mr-4"></i>
     <i class="fa fa-twitter  text-white mr-4"></i>
     <i class="fa fa-youtube  text-white mr-5"></i>
     </div>
   </div>
</div>
</div>
</body>
<script>
$(document).ready(function(){

  $('.delete').click(function(){
    //alert($(this).attr('id')); // gets the id of a clicked link that has a class of menu
    //alert('deleted');
    let pdfId=$(this).attr('id');
    alert(pdfId);
    $(`.c-${pdfId}`).remove();
    $.ajax({
				    type: 'ajax',
            method:'POST',
			    	url: '<?= base_url("index.php/upload/pdf_delete"); ?>',
            data:{pdf_id:pdfId},
            dataType: 'json',
				    async: true,
				success: function(data){

					alert('PDF is successfully deleted.');
          console.log(data);
          $('.alert').show();
				},
        error: function (request, status, error) {
        alert(request.responseText);
        }
        });
  });
    
});
</script>
</html>