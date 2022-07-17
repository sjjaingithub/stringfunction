<!DOCTYPE html>
<html lang="en">

<head>
  <title< /title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </nav>



  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3" ></li>
    <li data-target="#demo" data-slide-to="4"></li>
    </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <center>
      <img src="images.png" alt="Los Angeles" width = "70%">
      </center>
    </div>
    <div class="carousel-item">
      <center>
      <img src="wc.jpg" alt="Chicago" width = "70%">
      </center>
    </div>
    <div class="carousel-item">
    <center>
      <img src="string-reverse.jpg" alt="New York" width = "70%">
      </center>
    </div>
    <div class="carousel-item">
    <center>
      <img src="ft.jpg" alt="Los Angeles" width = "70%">
      </center>
    </div>
    <div class="carousel-item">
    <center>
      <img src="rw.png" alt="Chicago" width = "70%">
      </center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  
</div>






  <center>
    <h1>String function</h1>
  </center>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <p>strlen:</p>
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">string length</h4>
              <p class="card-text"> function returns the length of a string.</p>
              <a href="#" class="btn btn-primary">click</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <p>Count Words in a String:</p>
          <div class="card" style="width:400px">
            <img class="card-img-bottom" src="wc.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Jane Doe</h4>
              <p class="card-text">function counts the number of words in a string.</p>
              <a href="#" class="btn btn-primary">click</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <p>Reverse a String:</p>
          <div class="card" style="width:400px">
            <img class="card-img-bottom" src="string-reverse.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Jane Doe</h4>
              <p class="card-text">function reverses a string.</p>
              <a href="#" class="btn btn-primary">click</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <p>Search For a Text Within a String:</p>
          <div class="card" style="width:400px">
            <img class="card-img-bottom" src="ft.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Jane Doe</h4>
              <p class="card-text">function searches for a specific text within a string. If a match is found, the
                function
                returns the character position of the first match. If no match is found, it will return FALSE.</p>
              <a href="#" class="btn btn-primary">click</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <p>Replace Text Within a String:</p>
          <div class="card" style="width:400px">
            <img class="card-img-bottom" src="rw.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Jane Doe</h4>
              <p class="card-text">function replaces some characters with some other characters in a string.</p>
              <a href="#" class="btn btn-primary">click</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>