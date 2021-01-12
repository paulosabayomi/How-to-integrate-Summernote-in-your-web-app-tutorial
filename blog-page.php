<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Page Tutorial</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <link href="dropzone/dist/dropzone.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
      <a class="navbar-brand" href="#">Paulos Ab</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

    
      <div class="starter-template mt-5 row d-flex align-center justify-center">
        <div class="col-lg-8 m-auto">
          <h1 class="mt-5">Integrate Summernote Text Editor in your Web App</h1>

          
          
        </div>

        <div class="col-lg-12">
          <?php
          $host = "localhost";
          $db = "summernote_db";
          $user = "root";
          $pwd = "";
          
          $conn = mysqli_connect($host, $user, $pwd, $db);
          
          if (!$conn) {
              die("Could not connect because " . mysqli_error($conn));
          }

          $sql = "SELECT * FROM posttable ORDER BY id DESC";
          $result = mysqli_query($conn, $sql);
          $fetchPost = mysqli_fetch_assoc($result);

          echo nl2br(html_entity_decode($fetchPost["post"]));

          ?>
        </div>


      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="bootstrap.js"></script>
    <script src="dropzone/dist/dropzone.js"></script>
    <script src="main.js"></script>
  

</body></html>