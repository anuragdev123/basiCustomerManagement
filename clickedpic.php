<!DOCTYPE html>
 <html >
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
                        <li class="current"><a href="index.php" class="">Home</a></li>
                        <li><a href="#" class="current">Clicked Pic</a></li>
                        <li><a href="completedpic.php">Completed pic</a></li>
                        <li><a href="prizelist.php">prize List</a></li>
                        
                    </ul>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                
                    <div class="sec-title text-center mb50 wow bounceInDown animated animated" data-wow-duration="500ms" style="visibility: visible; animation-duration: 500ms; animation-name: bounceInDown;">
                        <h2>Customer details</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

<button type="button" class="btn btn-success" onclick="loadnormal()">normal</button>
<button type="button" class="btn btn-success" onclick="loadbooking()" style="
    border-right-width: 0px;
    margin-right: 0px;
    margin-left: 966px;
">booking</button>

                    
            </div>
            <div class="container" >
        <form id="normalform" name="normalform" style="display: block;" method="POST" action="insertnormal.php" >
            <div class="form-group">
                <div class="name">
                    customer name
                    <input type="text" class="form-control" name="name" id="name"  autocomplete="off"/>
                </div> 
            </div>

            <br>

         <div class="form-group">
                <div class="name">
                   phone number
                    <input type="text" class="form-control" name="phoneno" id="phoneno"  autocomplete="off"/>
                </div> 
            </div><br>

           <div class="form-group">
                <div class="name">
                   clicked date
                    <input type="date" id="datePicker" class="form-control" name="clickeddate" id="clickeddate"  />
                </div> 
            </div>
        <br>
       

    
    <div class="form-group customradio"  style='display:inline-block;' >

       clicked(gen)
        <br>
        <div class="radio">
            <label><input type="radio" name="gender" value="male"  /> Male</label>

            <label><input type="radio" name="gender" value="female" /> Female</label>
        </div>
    </div>
    <br>
     <div class="form-group">
                <div class="name">
                   city
                    <input type="text" class="form-control" name="city" id="city"  />
                </div> 
            </div>
    <br>
 <div class="form-group">
                <div class="name">
                    photo size:
                    <input type="text" class="form-control" name="size" id="size" list="size" >
                    <datalist id="size">
    <option value="4x6">
    <option value="5x7">
    <option value="4x6 5x7">
    <option value="8x10">
    <option value="10x12">
  </datalist>
                </div> 
            </div>
    
    <br>
    
     <div class="form-group">
                <div class="name">
                   number of photo
                    <input type="text" class="form-control" name="numpic" id="numpic"  autocomplete="off"/>
                </div> 
            </div>
            <br>
             <div class="form-group">
                <div class="name">
                   total amount:
                    <input type="text" class="form-control" name="totalamt" id="totalamt" autocomplete="off" />
                </div> 
            </div>
            <br>
             <div class="form-group">
                <div class="name">
                   advanced paid
                    <input type="text" class="form-control" name="advpaid" id="advpaid"  autocomplete="off"/>
                </div> 
            </div>
            <br>
             <div class="form-group">
                <div class="name">
                   due amount
                    <input type="text" class="form-control" name="dueamt" id="dueamt"  autocomplete="off"/>
                </div> 
            </div>
            <br>
    <div class="form-group name">
        Any Comment<sup style=color:red;>*</sup>
        <br>

        <textarea rows="10" cols="50" maxlength="1000" name="comment" id="comment" autocomplete="off"> </textarea>
        <p class="help-block"><i>Max:1000 character</i></p>

    </div>
    
    
    
    
    
    
   
    <br>
    <hr>
    <div class="form-group">
     
       <input type="reset" class="btn btn-primary" >
       <button type="submit"  class="btn btn-primary" name="submit1" style=" margin-left: 32px;">Submit</button>
    </div>

    
</form>
 <form id="bookingform" name="bookingform" style="display: none;" method="POST" action="insertbooking.php">
            <div class="form-group">
                <div class="name">
                    customer name
                    <input type="text" class="form-control" name="name" id="name"  autocomplete="off"/>
                </div> 
            </div>

            <br>

         <div class="form-group">
                <div class="name">
                   phone number
                    <input type="text" class="form-control" name="phoneno" id="phoneno"  autocomplete="off"/>
                </div> 
            </div><br>

           <div class="form-group">
                <div class="name">
                   booking date
                    <input type="date" id="datePicker" class="form-control" name="bookingdate" id="bookingdate"  />
                </div> 
            </div>
        <br>
       
 <div class="form-group">
                <div class="name">
                   function date
                    <input type="date" class="form-control" name="functiondate" id="functiondate"  />
                </div> 
            </div>
            <br>
            <div class="form-group">
                <div class="name">
                   city
                    <input type="text" class="form-control" name="city" id="city"  />
                </div> 
            </div><br>
            <div class="form-group name">
        occasion<br>

        <select class="selectpicker" name="occasion">
        <option value="">select occasion type</option>
            <option value="party">party</option>
            <option value="marrige">marrige</option>
            <option value="kuapujan">kuapujan</option>
            <option value="birthday"> birthday</option>
            <option value="ring ceremony">ring ceremony</option>
            <option value="party">any other</option>
        </select>
    </div>
            <br>
    
    
    <br>
 <div class="form-group">
                <div class="name">
                    photo size:
                    <input type="text" class="form-control" name="size" id="size" list="size" >
                    <datalist id="size">
    <option value="4x6">
    <option value="5x7">
    <option value="4x6 5x7">
    <option value="8x10">
    <option value="10x12">
  </datalist>
                </div> 
            </div>
    
    <br>
    
     <div class="form-group">
                <div class="name">
                   number of photo(approx)
                    <input type="text" class="form-control" name="numpic" id="numpic"  autocomplete="off"/>
                </div> 
            </div>
            <br>
             <div class="form-group">
                <div class="name">
                   total amount:
                    <input type="text" class="form-control" name="totalamt" id="totalamt" autocomplete="off" />
                </div> 
            </div>
            <br>
             <div class="form-group">
                <div class="name">
                   advanced paid
                    <input type="text" class="form-control" name="advpaid" id="advpaid"  autocomplete="off"/>
                </div> 
            </div>
            <br>
             <div class="form-group">
                <div class="name">
                   due amount
                    <input type="text" class="form-control" name="dueamt" id="dueamt"  autocomplete="off"/>
                </div> 
            </div>
            <br>
    <div class="form-group name">
        Any Comment<sup style=color:red;>*</sup>
        <br>

        <textarea rows="10" cols="50" maxlength="1000" name="comment" id="comment" autocomplete="off"> </textarea>
        <p class="help-block"><i>Max:1000 character</i></p>

    </div>
    
    
    
    
    <input type="hidden" name="jlt" value="
    true">
    
   
    <br>
    <hr>
    <div class="form-group">
     
       <input type="reset" class="btn btn-primary" >
       <button type="submit" class="btn btn-primary" name="submit2"  style=" margin-left: 32px;">Submit</button>
    </div>

    
</form>


        </div>
        </section>
        <script type="text/javascript">
            document.getElementById('datePicker').valueAsDate = new Date();
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