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
             <!--<h1 class="mt-4">Database Tasks</h1>-->
        
             <div class="container">
                <div class="row-md-5 text-center">
                <h1 class="h3 mb-3 font-weight-bold">Information System</h1>
                <h3>Task 1</h3>
                <img src="{{ asset('media/Capture1.PNG') }}" alt="1">
                <p>&nbsp</p>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Kelurahan</th>
                      <th scope="col">Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bedahan</td>
                      <td>15</td>
                    </tr>
                    <tr>
                      <td>Cinangka</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>Kedaung</td>
                      <td>23</td>
                    </tr>
                    <tr>
                      <td>Pasir Putih</td>
                      <td>26</td>
                    </tr>
                    <tr>
                      <td>Pengasinan</td>
                      <td>17</td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp</p>

                <h3>Task 2</h3>
                <img src="{{ asset('media/Capture2.PNG') }}" alt="2">
                <p>&nbsp</p>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Tahun</th>
                      <th scope="col">Bulan</th>
                      <th scope="col">Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2020</td>
                      <td>Maret</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>April</td>
                      <td>491</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>Mei</td>
                      <td>3476</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>Juni</td>
                      <td>5847</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>Juli</td>
                      <td>7819</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>Agustus</td>
                      <td>8172</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>September</td>
                      <td>10028</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>Oktober</td>
                      <td>13473</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>November</td>
                      <td>15623</td>
                    </tr>
                    <tr>
                      <td>2020</td>
                      <td>Desember</td>
                      <td>17392</td>
                    </tr>
                    <tr>
                      <td>2021</td>
                      <td>Januari</td>
                      <td>20319</td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp</p>

                <h3>Task 3</h3>
                <img src="{{ asset('media/Capture3_1.PNG') }}" alt="3">
                <p>&nbsp</p>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Usia</th>
                      <th scope="col">Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>16</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>19</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>25</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>27</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>38</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>45</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>51</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>58</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>72</td>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp</p>

                <h3>Task 4</h3>
                <img src="{{ asset('media/Capture4.PNG') }}" alt="4">
                <p>&nbsp</p>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Rumah Sakit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>5</td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp</p>

                <h3>Task 5</h3>
                <img src="{{ asset('media/Capture5.PNG') }}" alt="5">
                <p>&nbsp</p>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Jumlah Dokter</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>5</td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp</p>

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