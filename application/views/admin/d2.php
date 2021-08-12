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

<style>
body {
  font-size: .875rem;
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
body {
  font-size: .875rem;
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
    .jumbotron{
        background-image: url(https://images.ctfassets.net/l3l0sjr15nav/11JUObfpG4oiuKEe0Ys824/bb0d66d70c05b770278c598f62cf06ba/pdf-maker-make-pdf-online-with-one-click_2x.png?w=2000);
    background-repeat: no-repeat;
    background-size: cover;
    height: 350px;
    width: 100%;
    }

</style>
    </head>
<body>
<div class="container-fluid">
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
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PDF Editer</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  PDF
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Edits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/logout"); ?>'>
                  <span data-feather="file-text"></span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="col-md-10">
        <h1>Recent Activities</h1>
        </div>
      </div>
    </div>
    <div class="container">
    <h1>Recent Activities</h1>
    </div>
</body>
</html>