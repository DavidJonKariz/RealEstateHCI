<!DOCTYPE html>
<html>
<head>
  <title>RENT</title>
  <link rel="shortcut icon" type="image/x-icon" href="pics/TZRealEstate Logo 2.PNG"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="rent.css">
</head>
<body>
  <header>
    <div class="container-fluid">
      <section id="intro-header" style="background-image: url('pics/To-Buy-or-Build-a-House.jpg'); background-size: cover; height: 600px;">
        <div class="row" style="margin-left: 10px;">
                            <div id="logo" ><a href="index.php"><img src="pics/TZRealEstate Logo 2.PNG" style="border-radius: 50%;width: 40px;
  height: 40px; margin-left: 5%; margin-top: 20px;" /></a></div>
          <ul class="list-inline list-unstyled pull-left" style="margin-left: 5px;">
              <li><a href="index.php">Home</a></li>
            <li><a href="#">Sales</a></li>
<!--            <li><a href="#">Rent</a></li>-->
            <li><a href="#">Lands</a></li>
          </ul>
        </div>

        <div class="row">
          <div class="container">
            <div class="wrap-headline">
              <h1 class="text-center">Find The Perfect Property</h1>
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
                      <img class="imguno" src="pics/Kenyan-House-2.jpg" class="img-responsive" height="225" width="300">
                </div>
                <div class="row">
                  <h3>Tzsh. 100000</h3>
                </div>
                <div class="row">
                  <h4>Sam's Residential Estate</h4>
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
                    <section>
                        <img class="imgdes" src="pics/Westlands-Mirage-Towers-Office-Suites-_2.jpg" class="img-responsive" height="300" width="350">
                    </section>
                </div>
                <div class="row">
                  <h3>Tzsh. 650000</h3>
                </div>
                <div class="row">
                  <h4>Sam's Commercial Estate</h4>
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

<!--    Pop Up Information-->
    <div class="popuno">
        <span>✖</span>
            <h1>Detailed Residential Pop Up</h1>
        <p>Further Details About the Residential Property/House On Display.</p>
    </div>
    <div class="popdes">
        <span>✖</span>
            <h1>Detailed Commercial Pop Up</h1>
        <p>Further Details About the Commercial Property/Building On Display.</p>
    </div>
    
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h5>Further Information and Enquiries</h5>
          <ul class="list-unstyled">
              <li><a href="information.php">Help</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="team.php">Our Team</a></li>
          </ul>
        </div>
        <div class="col-sm-5">
          <h5>Locations</h5>
          <ul class="list-unstyled">
            <li><a href="#">Arusha</a></li>
            <li><a href="#">Dar es Salaam</a></li>
            <li><a href="#">Dodoma</a></li>
          </ul>
        </div>
      </div>
      <div class="row bottom text-left">Copyright &copy <?php echo date("Y");?> Real_Estate</div>
    </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</body>
<style>
   .popuno, .popdes {
  display: none;
  position: fixed;
  top: 10.3%;
  left: 10.3%;
  width: 80%;
  height: 80%;
  background: #ffffff;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  -ms-border-radius: 6px;
  -o-border-radius: 6px;
  border-radius: 6px;
  outline: 10px solid rgba(0, 0, 0, 0.1);
}
.popuno > h1, .popdes > h1 {
  padding: 30px 30px 10px 30px;
  color: #2a3644;
  font-size: 100%;
}
.popuno > p, .popdes > p {
  padding-left: 30px;
  font-size: 100%;
  color: #777;
}
.popuno > span, .popdes > span {
  cursor: pointer;
  position: absolute;
  top: 4%;
  right: 4%;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  background: #cccccc;
  color: #ffffff;
  padding: 6px 0px 0px 9px;
  width: 30px;
  height: 30px;
</style>
<script>
//    For Residential
    $(document).ready(function () {
            $(".imguno").click(function () {
                $(".popuno").fadeIn(300);
                positionPopup();
            });

            $(".popuno > span, .popuno").click(function () {
                $(".popuno").fadeOut(300);
            });
    });
    
    //For Commercial
    $(document).ready(function () {
            $(".imgdes").click(function () {
                $(".popdes").fadeIn(300);
                positionPopup();
            });

            $(".popdes > span, .popes").click(function () {
                $(".popdes").fadeOut(300);
            });
    });
</script>
</html>