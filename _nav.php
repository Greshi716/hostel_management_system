<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <div class="container-fluid">
            <!-- <img src="bed-142517_960_720.jpg" alt=""> -->
            <a class="navbar-brand" href="#">Tweshi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>






      $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Full Name</th>
     <th>Room No.</th>
     <th>Reason for leave</th>
     <th>Contact Number</th>
    </tr>
 ';

      $output .= '
   <tr>
    <td>'.$row["Full Name"].'</td>
    <td>'.$row["Room No."].'</td>
    <td>'.$row["Reason for leave"].'</td>
    <td>'.$row["Contact Number"].'</td>
    <td><a href=leaves.php?>accept</a></td>
   </tr>

  ';  