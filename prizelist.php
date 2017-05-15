<!DOCTYPE html>
 <html style="height: 100%">
    <head>
     <style>
            
            #normalform{
                padding-left: 380px;
            }
            #bookingform{
                padding-left: 380px;
            }
            .name input{
                width: 50%;
            }
            .customradio input{
                cursor: pointer;
            }
            .name textarea{
                width: 50%;
            }
            .name select{
                width:50%;
                height: 50px;

            } 
        </style>
    
		
        <title>Nandni Studio</title>		
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body" style="height: 100%">
	
		<!-- preloader -->
		<!-- <div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div> -->
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header  class="navbar-fixed-top navbar" style="background-color: rgb(14, 180, 147);">
            <div class="container" style="height: 100%">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo">
                        Nandni Studio
                            
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul  class="nav navbar-nav">
                        <li class="current"><a href="index.php" class="">Home</a></li>
                        <li><a href="clickedpic.php">Clicked Pic</a></li>
                        <li><a href="completedpic.php">Completed pic</a></li>
                        <li><a href="#">prize List</a></li>
                       
                    </ul>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>
        <section id="features" class="features" style="height: 100%">
            <div class="container" style="height: 100%">
                <div class="row">
                
                    <div class="sec-title text-center mb50 wow bounceInDown animated animated" data-wow-duration="500ms" style="visibility: visible; animation-duration: 500ms; animation-name: bounceInDown;">
                        <h2>prize list</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>
                    <table summary="Summary Here" class="table table-hover table table-responsive" style="font-size: 35px" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
          <th>status</th>
            <th>passport</th>
            <th>4X6</th>
            <th>5X7</th>
            <th>8X10</th>
            <th>10X12</th>
            <th>12X15</th>
            <th>12X18</th>
            <th>16X20</th>



          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td><b>urgent</b></td>
            <td>30/6</td>
            <td>90/1</td>
            <td>120/1</td>
            <td>N.A</td>
             <td>N.A</td>
              <td>N.A</td>
               <td>N.A</td>
                <td>N.A</td>
          </tr>
          <tr class="dark">
             <td><b>LAB</b></td>
            <td>60/45</td>
            <td>50/1</td>
            <td>60/1</td>
            <td>240/1</td>
             <td>430/1  </td>
                         <td>560/1</td>
               <td>620/1</td>
                <td>760/1</td>
          </tr>
         
        </tbody>
      </table>

                    </div>
                    </div>
                    </section>
                              <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- jquery.parallax -->
         <script src="js/custom1.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- Contact form validation -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <!-- Google Map -->
      
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        <script>

        console.log("ab")
            var wow = new WOW ({
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       120,          // distance to the element when triggering the animation (default is 0)
                mobile:       false,       // trigger animations on mobile devices (default is true)
                live:         true        // act on asynchronously loaded content (default is true)
              }
            );
            wow.init();
        </script> 
        <!-- Custom Functions -->
        <script src="js/custom.js"></script>
 
    
        </body>
        </html>