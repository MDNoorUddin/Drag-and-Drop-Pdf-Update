<!doctype html>
<html lang="en">
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
                <a class="nav-link" href='<?= base_url("index.php/admin/show_all_pdf");?>'>
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
      </div>
      <div class="container" style="margin-left:500px;margin-top:50px;">
       <div class="row">
       <div class="col-lg-12 text-center">
        <h1 class="display-3 p-2">Dashboard</h1>
        <hr>
       </div>
       </div>

       <div class="row mt-3">
       <div class="col-lg-3 text-center card bg-light shadow-lg mr-1">
        <h1 class="">Total User's</h1>
        <p class="lead "><?php echo $users;?></p>
       </div>
       <div class="col-lg-1"></div>
       <div class="col-lg-3 text-center card bg-light shadow-lg mr-1">
        <h1 class=""> Total PDF's</h1>
        <p class="lead "><?php echo $pdfs;?></p>
       </div>
       <div class="col-lg-1"></div>
       <div class="col-lg-3 text-center card bg-light shadow-lg">
        <h1 class="">Total Edit's</h1>
        <p class="lead "><?php echo $edits;?></p>
       </div>
       <div class="col-lg-1"></div>
       </div>
       
    </div>
    </div>
    <div class="container" style="margin-left:500px;margin-top:70px;">
    <div class="row d-flex justify-content-center">
       <h1 class="h2 mb-1">Recent Activities</h1>
          <?php $i=0; ?>
            <div class="col-lg-12 p-0 m-0">
                <table class='table table-hover border table-striped bg-light shadow-lg'>
                   <thead>
                     <tr class="table-primary text-white">
                     <th>#</th>
                     <th>Name</th>
                     <th>Activity Type</th>
                     <th>Activity</th>
                     <th>Time</th>
                     </tr>
                   </thead>
                   <tbody>
                        <?php //print_r($stat); 
                        foreach ($activity as $text): $i++;?>
                        <tr  class="shadow-lg spacer table-light">
                           <td><?php echo $i; ?></td>
                           <td><?php echo $text['NAME']; ?></td>
                           <td><?php echo $text['TYPE']; ?></td>
                           <td><?php echo $text['activity']; ?></td>
                           <td><?php echo $text['created_at']; ?></td>
                        </tr>
                        <?php endforeach;?>
                   </tbody>
                   </table>
                    
                    </div>
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
  </body>
</html>
