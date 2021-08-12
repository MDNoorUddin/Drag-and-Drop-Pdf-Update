
  <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin Panel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>"/>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <style>
    body {
  font-size: .875rem;
}
body {
  font-size: .875rem;
  font-family: 'Roboto', sans-serif;
}
   td{
    font-size: .875rem;
    font-family: 'Raleway', sans-serif !important;
   }

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 48px; /* Height of navbar */
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}

/*
 * Utilities
 */

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

    </style>
  </head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PDF Updater</a>
      
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href='<?= base_url("index.php/admin/index"); ?>'>
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href='<?= base_url("index.php/admin/show_all_activity"); ?>'>
                  <span data-feather="file"></span>
                  All Activity
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/show_all_pdf"); ?>'>
                  <span data-feather="shopping-cart"></span>
                  All PDFs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/show_all_user"); ?>'>
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/show_all_stat"); ?>'>
                  <span data-feather="bar-chart-2"></span>
                  All Statistics
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/logout"); ?>'>
                  <span data-feather="layers"></span>
                  Logout
                </a>
              </li>
            </ul>

            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">All Uploaded PDF</h1>
            
          </div>

          <div class="row">
          <?php $i=0; ?>
          <?php foreach ($pdf as $text): $i++;?>
            <div class="col-lg-4 p-3"> 
                <div class="card shadow-lg bg-light" style="height:250px;">
<!--                   <img class="card-img-top p-5" src="data:image/png;base64,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" alt="Card image cap" style="width=100%;height:200px;">
 -->                  <div class="card-body">
                    <h5 class="card-title text-center text-primary" style="height:45px;"><?php echo $text['pdf_name']; ?></h5>
                    <p class="card-text" style="height:50px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="small text-muted mb-0 text-left">Created At: <?php echo $text['created_at']; ?></p>
                    <p class="small text-muted  text-left">Up[dated At: <?php echo $text['updated_at']; ?></p>
                    <div class="row">
                    <div class="col-12">
                    <a href='<?= base_url("index.php/admin/show_pdf/".$text['id']."/"); ?>' class="btn btn-info btn-block p-0 m-0  mt-2" style="width=100%;">View</a>
                    </div>
                    <!-- <div class="col-4">
                    <a href='<?= base_url("index.php/upload/edit_pdf/".$text['id']."/"); ?>' class="btn btn-secondary btn-block  p-0 m-0  mt-2">Edit</a>
                    </div>
                    <div class="col-4">
                    <button class="btn btn-secondary delete btn-block  p-0 m-0 mt-2" id=' <?php echo $text["id"]; ?>'>Delete</a>
                    </div> -->
                    </div>
                  </div> 
                </div>
            </div>
            <?php endforeach;?>
            <?php
                  if($i==0)
                  {
                      ?>
                      <h1 class="display-4" style="margin-left:450px;margin-top:200px;">No PDF Available</h1>
                  <?php
                  }
           ?>
          </div>

          <main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
<!-- <div class="container-fluid">
  <div class="jumbotron text-center pt-2 mb-5"> 
        <h1 class="display-3 text-center text-white lead"> ADMIN DASHBOARD </h1>
  </div>
</div>
  <div class="container-fluid">
     <div class="row">
        <div class="col-lg-2 admin_navbar">
           
              <div class="row"><a  href='<?= base_url("index.php/admin/index"); ?>' class="btn btn-outline-info btn-block p-3">Dashboard</a ></div>
              <div class="row"><a href='<?= base_url("index.php/admin/all_staptistics"); ?>' class="btn btn-outline-info btn-block p-3">All Statistics</a></div>
              <div class="row"><a href='<?= base_url("index.php/admin/show_uloads"); ?>' class="btn btn-outline-info btn-block p-3">All PDF's</a ></div>
              <div class="row"><a href='<?= base_url("index.php/admin/all_users"); ?>' class="btn btn-outline-info btn-block p-3">Users</a></div>
              <div class="row"><a href='<?= base_url("index.php/admin/all_edits"); ?>' class="btn btn-outline-info btn-block p-3">Edits</a></div>
              <div class="row"><a href='<?= base_url("index.php/admin/logout"); ?>' class="btn btn-outline-info btn-block p-3">Logout</a></div>
        </div>
        <div class="col-lg-8 text-secondary">
            <div class="row">
                    <div class="col-4">
                    <h1 class="text-center">Total User</h1>
                    <h4 class="display-3 text-center"><i> <?php echo $users; ?> </i></h4>
                    </div>
                    <div class="col-4">
                    <h1 class="text-center">Total PDF's</h1>
                    <h4 class="display-3 text-center"> <i> <?php echo $pdfs; ?> </i></h4>
                    </div>
                    <div class="col-4">
                    <h1 class="text-center">Total Edits</h1>
                    <h4 class="display-3 text-center"> <i><?php echo 20; ?></i> </h4>
                    </div>
            </div>
         </h1>
        </div>
     </div>
  </div>
  <div class="row mb-5">
  <?php $i=0;?>
    <?php foreach ($pdf as $text): $i++;?>
     <div class="col-lg-4">
        <div class="card m-2 shadow-lg">
          <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="Card image cap" style="width=100%;height:200px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $text['pdf_name']; ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="small text-muted mb-0 text-left">Created At: <?php echo $text['created_at']; ?></p>
            <p class="small text-muted  text-left">Up[dated At: <?php echo $text['updated_at']; ?></p>
            <p class="small text-muted text-left">User Name: Mizan</p>
            <div class="row">
            <div class="col-4">
            <a href='<?= base_url("index.php/upload/show_pdf/".$text['id']."/"); ?>' class="btn btn-outline-info btn-block" style="width=100%;">View</a>
            </div>
            <div class="col-4">
            <a href='<?= base_url("index.php/upload/edit_pdf/".$text['id']."/"); ?>' class="btn btn-outline-warning btn-block">Edit</a>
            </div>
            <div class="col-4">
            <a href="#" class="btn btn-outline-danger btn-block">Delete</a>
            </div>
            </div>
          </div> 
        </div>
     </div>
     <?php endforeach;?>
  </div>
</div>
<div class="container-fluid bg-dark text-white mt-5">
   <div class="row">
     <div class="col-lg-4 mt-5">
     <p class="ml-4 lead"><i class="material-icons bg-danger" id="'+i+'" onclick="myFunction(this)">picture_as_pdf</i></h5>
      <p class="text-danger">PDF UPDATER</h5>
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
</div> -->
</body>
</html>