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
        <!--<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light">Pages</a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
            <li class="list-group-item list-group-item-action bg-light">
                <a href="#" class="list-group-item list-group-item-action bg-light">Page 1</a>
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <a href="#" class="list-group-item list-group-item-action bg-light">Page 2</a>
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <a href="#" class="list-group-item list-group-item-action bg-light">Page 3</a>
            </li>
        </ul>-->
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
         
             <h1 class="mt-4">Welcome to Ukom INF 2021 website</h1>
        <p>Click on the sidebar menu to go to task pages.</p>-->

        <div class="container">
            <div class="row-md-5 text-center">
                &nbsp;
            </div>
          <div class="row-md-5 text-center">
            <img class="mb-4" src="{{ asset('media/logoi.PNG') }}" alt="mainlogo" width="150">
            <h1 class="h3 mb-3 font-weight-normal">COVID-19 Information System</h1>
            <h5> Spreading awareness and information about the COVID-19 pandemic </h5>
              &nbsp;
          </div>
        </div>

        <hr />
        <div class="container">
          <div class="row-md-5 text-center">
          <h1 class="h3 mb-3 font-weight-normal">What is COVID-19?</h1>
          <div class="text-justify">
            <p> The COVID-19 pandemic, also known as the coronavirus pandemic, 
              is an ongoing pandemic of coronavirus disease 2019 (COVID-19) caused by severe 
              acute respiratory syndrome coronavirus 2 (SARS-CoV-2). It was first identified 
              in December 2019 in Wuhan, China. The World Health Organization declared the 
              outbreak a Public Health Emergency of International Concern in January 2020 and 
              a pandemic in March 2020. </p>
          </div>
              &nbsp;
          </div>
        </div>
      </div>

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