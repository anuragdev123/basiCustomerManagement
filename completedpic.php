<!DOCTYPE html>
 <html >
    <head>
     <style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('css/searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
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
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">

		<!-- Modernizer Script for old Browsers -->
        <script type="text/javascript"  src="js/jquery.js"></script>
        
        <script src="js/modernizr-2.6.2.min.js"></script>
    
    

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<!-- <div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div> -->
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header  class="navbar-fixed-top navbar" style="background-color: rgb(14, 180, 147);">
            <div class="container">
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
                            <!-- <img src="img/logo.png" alt="Brandi"> -->
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul  class="nav navbar-nav">
                    <li>     <input type="text"   id="search"   style="
    margin-right: 200px;
     padding-left: 50px;
">
        </li>
                        <li class="current"><a href="index.php" class="">Home</a></li>
                        <li><a href="clickedpic.php">Clicked Pic</a></li>
                        <li><a href="#">Completed pic</a></li>
                        <li><a href="prizelist.php">prize List</a></li>
                       
                    </ul>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>
        <section id="features" class="features" >
            <div class="container" >
                <div class="row">
                
                 <button type="button" class="btn btn-success" onclick="loadnormal()"
                 style="
                 position: fixed;">normal</button>
                 <button type="button" class="btn btn-success" onclick="loadbooking()" style="
                 position: fixed;
    border-right-width: 0px;
    margin-right: 0px;
    margin-left: 100px;
">booking</button>   <div class="sec-title text-center mb50 wow bounceInDown animated animated" data-wow-duration="500ms" style="visibility: visible; animation-duration: 500ms; animation-name: bounceInDown;">
                        <h2>Complete photo details</h2>

                        </div>
                                           

                    </div>


  
        <?php
        $con=  mysqli_connect("localhost", "root", "", "nandnistudiodata");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from normalphoto ORDER BY normalphoto.id DESC ");

       ?>
        <div>
            
         <table id="table" style="font-size: 15px;" class="table table-hover table table-responsive">
           <tr>
                    <th>id</th>
                    <th>Name</th>
                     <th>clicked date</th>
                    <th>size</th>
                    <th>number of pic</th>
                    <th>Phone Number</th>
                     <th>city</th>
                     <th>clicked gender</th>
                    <th>amount paid</th>
                     <th>due amt</th>
                     <th>total amount</th>
                        <th>comment</th>

            </tr>

        <?php


             while($row =  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['clickdate'] ;?></td>
                <td><?php echo $row['size']; ?></td>
                <td><?php echo $row['numberofphoto'] ;?></td>
                
                <td><?php echo $row['phonenumber'] ;?></td>
                 <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['clickedby']; ?></td>
                <td><?php echo $row['amountpaid'] ;?></td>
                <td><?php echo $row['dueamount']; ?></td>
                <td><?php echo $row['totalamount'] ;?></td>
                
                <td><?php echo $row['comment'] ;?></td>
               
            </tr>
        <?php
             }
             ?>
             </table>

            </div>

                    </div>
                    </div>
                    </section>
                    <script type="text/javascript">
                        var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
                    </script>
                    
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