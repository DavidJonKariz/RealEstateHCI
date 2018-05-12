<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>TZ REAL ESTATE</title>
        <link rel="shortcut icon" type="image/x-icon" href="pics/TZRealEstate Logo 2.PNG"/>
<!--        CSS code-->
        <link rel="stylesheet" type="text/css" href="hpage.css">
        <link href='<a href="https://icons8.com">Icon pack by Icons8</a>' rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--                Script code-->
        <script type="text/javascript" src="hpage.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
<!--        First Parallax Slide-->
        <div class="pimg1">
            <div id="logo" ><a href="index.php"><img src="pics/TZRealEstate Logo 2.PNG" style="border-top-left-radius: 50%; border-top-right-radius: 50%; width: 100px;
  height: 100px; margin-left: 45%; margin-top: 74px;" /></a></div>
            <div class="ptext">
                <!--                        Code for the navigation bar-->
                <div id="menu-nav">
                <div id="navigation-bar">
                    <ul>
                        <li><a href="land.php"><i class="fa fa-file"></i><span>Land</span></a></li><!--<img src="https://png.icons8.com/doodle/50/000000/document.png">-->
                      <li><a href="Housing.php"><i class="fa fa-home"></i><span>Housing</span></a></li>
                      <li><a href="information.php"><i class="fa fa-info"></i><span>Infomation</span></a></li>
                      <li><a href="team.php"><i class="fa fa-users"></i><span>The Team</span></a></li>
                      <li><a onclick="hideandshow('#search-bar')"><i class="fa fa-search"></i><span>Search</span></a></li>
                    </ul>
                </div>

                <div id="search-bar">
                    <form 
                        style="width: 90%;  margin: 10px auto;">
                     <input type="text" placeholder="Enter The Name of the Property" />
                    </form>
                </div>
            </div>    
		<span class="border">
			TZ REAL ESTATE
		</span>
            </div>
	</div>	
<!--The Welcome Text-->
	<section class="section section-light">
		<h2>WELCOME</h2>
		<p>FOR PROPERTY YOU CAN TRUST, YOUR SEARCH ENDS WITH US.</p>
	</section>
<!--        Second Parallax Slide-->
	<div class="pimg2">
		<div class="ptext">
			<span class="border">
				Home is Where the Heart Is.
			</span>
		</div>
	</div>	
<!--Flexbox for Sale and Rent-->
	<section class="section section-light">
<!--		<h2>Sales and Rent Options</h2>-->
                <div class="container">
                    <div class="item">
                      <div class="content">
                          <strong><h3>FOR SALE</h3></strong>
                      </div>
                    </div>
                    <div class="item">
                      <div class="content">
                        <strong><h3>FOR RENT</h3></strong>
                      </div>
                    </div>
                </div>
	</section>
<!--        Third Parallax Slide-->
	<div class="pimg3">
		<div class="ptext">
			<span class="border">
                            Fertile <strong>Lands</strong> Are Built By the Fires of Volcanoes.
			</span>
		</div>
	</div>	
<!--Flexbox for Land-->
	<section class="section section-light">
		<!--<h2>Land Options. Change name to Identify that it is Land.</h2>-->
                <div class="container">
                    <div class="itemz">
                      <div class="content">
                        <strong><h3>COMMERCIAL LAND</h3></strong>
                      </div>
                    </div>
                    <div class="itemz">
                      <div class="content">
                        <strong><h3>RESIDENTIAL LAND</h3></strong>
                      </div>
                    </div>
                </div>
	</section>
<!--Contacts-->
	<div class="pimg1">
		<div class="ptext">
			<span class="border">
				TZ REAL ESTATE
                        </span><br><br><br><br>
                        <div id="logo" ><a href="filter.php"><img src="pics/download.png" style="width: 100px; height: 100px; border-radius: 50%;" /></a></div>
<!--The Team shall be placed here. Can be A Pop Up. Less Web Pages.-->
<!--                <div class="modal-frame">
                    <div class="modal">
                      <div class="modal-inset">
                        <div class="button close"><i class="fa fa-close"></i></div>
                        <div class="modal-body">
                            
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal-overlay"></div>
                    <button class="fancy-btn open">Team</button>
                </div>-->
	</div>
        <?php
        // put your code here
        ?>
    </body>
    <script type="text/javascript">
        //JS for the pop up
        $(document).on("ready", function() {
          $modal = $(".modal-frame");
          $overlay = $(".modal-overlay");

          /* Need this to clear out the keyframe classes so they dont clash with each other between enter/leave. */
          $modal.bind(
            "webkitAnimationEnd oanimationend msAnimationEnd animationend",
            function(e) {
              if ($modal.hasClass("state-leave")) {
                $modal.removeClass("state-leave");
              }
            }
          );

          $(".close").on("click", function() {
            $overlay.removeClass("state-show");
            $modal.removeClass("state-appear").addClass("state-leave");
          });

          $(".open").on("click", function() {
            $overlay.addClass("state-show");
            $modal.removeClass("state-leave").addClass("state-appear");
          });
        });
    </script>
</html>
