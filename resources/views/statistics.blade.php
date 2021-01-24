<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UKom INF 2021</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">UKom</div>
      <div class="list-group list-group-flush">
        <a href="/" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="/multimedia" class="list-group-item list-group-item-action bg-light">Multimedia</a>
        <a href="/database" class="list-group-item list-group-item-action bg-light">Database</a>
        <a href="/statistics" class="list-group-item list-group-item-action bg-light">Statistics</a>
        <a href="/pageform" class="list-group-item list-group-item-action bg-light">Form</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Sidebar</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Muhammad Avicenna (J3C218177) <span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>-->
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <!--
            <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
         -->
             
      </div>
      <div class="container-fluid">
      <div class="container">
          <div class="row-md-5 text-center">
          <h1 class="h3 mb-3 font-weight-normal">Statistics</h1>
          <p class="text-justify">Statistics is the discipline that concerns the collection, organization, analysis, interpretation, and presentation of data.
             In applying statistics to a scientific, industrial, or social problem, it is conventional to begin with a statistical population 
             or a statistical model to be studied. Populations can be diverse groups of people or objects such as "all people living in a country" 
             or "every atom composing a crystal". Statistics deals with every aspect of data, including the planning of data collection in terms of 
             the design of surveys and experiments.</p>
             <p class="text-justify">One of the ways to calculate statistical problems is by using R. 
              R is a programming language and free software environment for statistical computing and graphics supported by the R Foundation for Statistical Computing.
              Below is a tutorial document for learning R.
             </p>
             <iframe src="{{ asset('file/stat1.pdf') }}" width="100%" height="500px">
              
            </div>
        </div>
      </div>
    
      <p>&nbsp</p>

    <footer>
      <div class="card text-center bg-info text-white">
        <div class="card-body container">
            Copyright &copy; Muhammad Avicenna, 2021
        </div>
      </div>
    </footer>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>