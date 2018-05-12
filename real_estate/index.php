<!DOCTYPE html>
<html>
<head>
  <title>LAND</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <header>
    <div class="container-fluid">
      <section id="intro-header" style="background-image: url('img/Land.jpg'); background-size: cover; height: 600px;">
        <div class="row" style="margin-left: 10px;">
          <a class="brand pull-left" href="#">Logo</a>
          <ul class="list-inline list-unstyled pull-left" style="margin-left: 5px;">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Rent</a></li>
            <li><a href="#">Lands</a></li>
          </ul>
        </div>

        <div class="row">
          <div class="container">
            <div class="wrap-headline">
              <h1 class="text-center">Discover a land you want to own</h1>
              <hr>

              <ul class="list-inline list-unstyled text-center">
                <li><a href="#" class="btn btn-default btn-lg" role="button">Residential</a></li>
                <li><a href="#" class="btn btn-default btn-lg" role="button">Commercial</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    </div>
  </header>


  <div class="row">
  <div class="container">
      <h2>RESIDENTIAL</h2>
      <div class="row scroll-horizontal-1">
        <?php for($a=0; $a<6; $a++){ ?>
            <a href="#">
              <div class="col-sm-12">
                <div class="row">
                  <img src="img/landscape.jpg" class="img-responsive">
                </div>
                <div class="row">
                  <h3>Tzsh. 4000000</h3>
                </div>
                <div class="row">
                  <h4>Ana Lands</h4>
                </div>
                <div class="row">
                  <h5>400 sq ft</h5>
                </div>
                <div class="row">
                  Arusha, Tanzania
                </div>
              </div>
            </a>
        <?php } ?>
            <a href="#"><button> MORE.. </button></a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container">
    <h2>COMMERCIAL</h2>
      <div class="row scroll-horizontal-1">
        <?php for($a=0; $a<6; $a++){ ?>
            <a href="#">
              <div class="col-sm-12">
                <div class="row">
                  <img src="img/barren.jpg" class="img-responsive">
                </div>
                <div class="row">
                  <h3>Tzsh. 200000</h3>
                </div>
                <div class="row">
                  <h4>Ana Lands</h4>
                </div>
                <div class="row">
                  <h5>400 sq ft</h5>
                </div>
                <div class="row">
                  Dodoma, Tanzania
                </div>
              </div>
            </a>
        <?php } ?>
            <a href="#"><button> MORE.. </button></a>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h5>Title</h5>
          <ul class="list-unstyled">
            <li><a href="#">List one</a></li>
            <li><a href="#">List one</a></li>
            <li><a href="#">List one</a></li>
          </ul>
        </div>
        <div class="col-sm-5">
          <h5>Title</h5>
          <ul class="list-unstyled">
            <li><a href="#">List one</a></li>
            <li><a href="#">List one</a></li>
            <li><a href="#">List one</a></li>
          </ul>
        </div>
      </div>
      <div class="row bottom text-left">Copyright &copy <?php echo date("Y");?> Real_Estate</div>
    </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</body>
</html>