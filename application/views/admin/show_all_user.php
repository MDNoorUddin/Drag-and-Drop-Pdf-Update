<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>"/>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  th{
  color:rgb(7, 123, 240);
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
            <h1 class="h2">All Registered User</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              
            </div>
          </div>

          <div class="row" style="margin-top:40px;">
          <?php $i=0; ?>
          <?php foreach ($user as $text): $i++;?>
            <div class="col-lg-4 p-3">
                <div class="card shadow-lg bg-light">
<!--                   <img class="card-img-top pt-3" src="https://www.shareicon.net/data/512x512/2015/09/24/645456_users_512x512.png" alt="Card image cap" style="width=100%;height:200px;">
 -->                  <div class="card-body">
                    <h5 class="card-title text-center lead text-primary"><?php echo strtoupper($text['name']); ?></h5>
                    <p class="card-text">Email: <?php echo $text['email']; ?></p>
                    <p class="small text-muted mb-1 text-left">Created At: <?php echo $text['created_at']; ?></p>
                    <p class="small text-muted  text-left">Up[dated At: <?php echo $text['updated_at']; ?></p>
                    <div class="row">
                    <div class="col-6">
                    <a href='<?= base_url("index.php/admin/show_all_individual_pdf/".$text['user_id']."/"); ?>' class="btn btn-info btn-block"> <small>PDF's</small></a>
                    </div>
                    <div class="col-6">
                    <a href='<?= base_url("index.php/admin/show_user_activity/".$text['user_id']."/"); ?>' class="btn btn-info btn-block"> <small>Activities</small></a>
                    </div>
                    </div>
                  </div> 
                </div>
            </div>
            <?php endforeach;?>
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