<!DOCTYPE html>
 <html >
    <head>
<script src="js/jspdf.js"></script>
<script src="js/autotable.js"></script>
<script src="js/pdfmake.min.js"></script>


        <title>Nandni Studio</title>		
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="css/jdatatable.css">
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
                
                    <div class="sec-title text-center mb50 wow bounceInDown animated animated" data-wow-duration="500ms" style="visibility: visible; animation-duration: 500ms; animation-name: bounceInDown;">
                        <h2>Complete photo details</h2></div>
                       
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
    


           
         <table id="table" style="font-size: 15px;width: 1088px" class="table table-hover table table-responsive">
         <thead>
           <tr>
           <th>status</th>
                    <th>id</th>
                    <th>Name</th>
                     <th>clicked date</th>
                    <th>size</th>
                    <th>number of pic</th>
                    <th>Phone Number</th>
                     <!-- <th>city</th> -->
                     <!-- <th>clicked gender</th> -->
                    <th>amount paid</th>
                     <th>due amt</th>
                     <th>total amount</th>
                        <th>comment</th>
                        <th>edit</th>
                        <th>delete</th>

            </tr>
</thead>
<tbody>
        <?php


             while($row =  mysqli_fetch_array($con))

             {
                 ?>

            <tr>
          <td><select id="status<?php echo $row['id']; ?>" name="status" value="" onchange="status(<?php echo $row['id']; ?>,this.value)"><option value="IC">incomplete</option><option value="C">completed</option><option value="G">gone</option></select></td>
                <td class="edit"><?php echo $row['id']; ?></td>
                <td class="edit"><?php echo $row['name']; ?>,<br><?php echo $row['city']; ?>, (<?php echo $row['clickedby']; ?>)</td>
                <td class="edit"><?php echo $row['clickdate'] ;?></td>
                <td class="edit"><?php echo $row['size']; ?></td>
                <td class="edit"><?php echo $row['numberofphoto'] ;?></td>
                
                <td class="edit"><?php echo $row['phonenumber'] ;?></td>
                 <!-- <td class="edit"><?php echo $row['city']; ?></td> -->
                <!-- <td class="edit"><?php echo $row['clickedby']; ?></td> -->
                <td class="edit"><?php echo $row['amountpaid'] ;?></td>
                <td class="edit"><?php echo $row['dueamount']; ?></td>
                <td class="edit"><?php echo $row['totalamount'] ;?></td>
                
                <td class="edit"><?php echo $row['comment'] ;?></td>
                  <td >
                         <div class="modal fade" id="btn<?php echo $row['id']; ?>" role="dialog">
            <div class="modal-dialog modal-sm vertical-align-center">
              <div class="modal-content" style="
    width: 344px;
">
                <div class="modal-header" style="
    background-color: #0eb493;
">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
                        <h2 style="color: white;">Customer details</h2>
                </div>
                <div class="modal-body">
                       <form action="editnormal.php" method="post">
                    
                        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     <br> <strong><span>name</span> </strong>  <br> <input type="text" name="name" value="<?php echo $row['name']; ?>">
      <input type="hidden" name="city" value="<?php echo $row['city']; ?>">
      <input type="hidden" name="gender" value="<?php echo $row['clickedby']; ?>">
      <input type="hidden" name="clickeddate" value="<?php echo $row['clickdate']; ?>">
      <br> <strong><span>size</span> </strong> <br> <input type="text" name="size" value="<?php echo $row['size']; ?>">
       <br> <strong><span>phone no</span> </strong> <br><input type="text" name="phoneno" value="<?php echo $row['phonenumber']; ?>">
       
       <br> <strong><span>number of pic</span> </strong> <br><input type="text" name="numpic" value="<?php echo $row['numberofphoto']; ?>">
       <br> <strong><span>total amount</span> </strong> <br><input id="totalamt" type="text" name="totalamt" value="<?php echo $row['totalamount']; ?>" onchange="amount()">
       <br> <strong><span>advance amount</span> </strong><br> <input id="advpaid" type="text" name="advpaid" value="<?php echo $row['amountpaid']; ?>" onchange="amount()">
     <br> <strong><span>due amount</span> </strong><br>  <input id="dueamt" type="text" name="dueamt" value="<?php echo $row['dueamount']; ?>">
      <br> <strong><span>comment</span> </strong> <br> <input type="text" name="comment" value="<?php echo $row['comment']; ?>">
       <br><br> <input type="submit" class="btn btn-primary" name="submit2" value="update">
    </form>
    <script type="text/javascript">
        var amount=function(){
            var totalAmt=document.getElementById("totalamt").value;
                var advAmt=document.getElementById("advpaid").value;
                var dueamt= totalAmt-advAmt;
                document.getElementById("dueamt").value=dueamt;
            } 
    </script>
                

              
              </div>
            </div>
        </div>
        </div>
        <!-- recipt -->

                    <div class="modal fade" id="rec<?php echo $row['id']; ?>" role="dialog">
          <!--   <div class="modal-dialog modal-lg vertical-align-center"> -->
   <!--            <div class="modal-content" 
"> -->
                <div class="modal-body ">
              <div class="row">
        <div id="print<?php echo $row['id']; ?>" class="  well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" style="
    width: 307px;
    /* height: 206px; */
">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Nandni Studio, Rath</strong>
                        <br>
                        Near Bada Mandir
                        <br>
                       9936210492
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em><?php echo $row['clickdate']; ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                   
                    <h3>Receipt</h3>
                </div>
                <h5><?php echo $row['name']; ?></h5>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>#</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row['size']; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"><?php echo $row['numberofphoto']; ?></td>
                            <td class="col-md-1 text-center"><?php echo $row['totalamount']; ?></td>
                        </tr>
                      <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Advance: </strong>
                            </p>
                            <p>
                                <strong>Due: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong><?php echo $row['amountpaid']; ?></strong>
                            </p>
                            <p>
                                <strong><?php echo $row['dueamount']; ?></strong>
                            </p></td>
                        </tr>
                       
                    </tbody>
                </table>
                <small style="
    padding: 85px;
">Signature</small>
            </div>
        </div>
         <button onclick="printDiv(<?php echo $row['id']; ?>)">print</button>
    </div>
              </div>
            <!-- </div> -->
        <!-- </div> -->

        </div>              
              
                   
        <!-- recipt end -->
    
     <button  class="btn btn-success" id="btn" onclick="editData(<?php echo $row['id']; ?>)">Edit</button>
      <div ><i style="
    color: #0eb493;
" class="fa fa-print fa-lg" onclick="printRecipt(<?php echo $row['id']; ?>)"></i></div> 
</td>
         <td >
           <form action='delete.php?id="<?php echo $row['id']; ?>"' onSubmit="return confirm('delete this entry?')" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" class="btn btn-danger" name="submit" value="delete">
    </form>
</td>
               
            </tr>

        <?php
             }
             ?>
              </tbody>
             </table>

              <?php
        $con1=  mysqli_connect("localhost", "root", "", "nandnistudiodata");

        if(!$con)
       {
           die('not connected');
       }
            $con1=  mysqli_query($con1, "select * from bookingphoto ORDER BY bookingphoto.id DESC ");

       ?>

         <table  id="table1" style="font-size: 15px;width: 1088px;display: none" class="table table-hover table table-responsive">
         <thead>
           <tr>
           <th>id</th>
                    <th>Name</th>
                     <th>Booking date</th>
                    <th>function date</th>
                    <th>occasion type</th>
                    <th>Phone Number</th>
                     <th>no. of phpto</th>
                     <!-- <th>clicked gender</th> -->
                     <th>size</th>
                    <th>amount paid</th>
                     <th>due amt</th>
                     <th>total amount</th>
                        <th>comment</th>
                        <th>edit</th>
                        <th>delete</th>

            </tr>
</thead>
<tbody>
        <?php


             while($row1 =  mysqli_fetch_array($con1))

             {
                 ?>

            <tr>
                <td class="edit"><?php echo $row1['id']; ?></td>
                <td class="edit"><?php echo $row1['name']; ?>,<br><?php echo $row['city']; ?></td>
                <td class="edit"><?php echo $row1['bookingdate'] ;?></td>
                <td class="edit"><?php echo $row1['functiondate']; ?></td>
                <td class="edit"><?php echo $row1['occasiontype'] ;?></td>
                
                <td class="edit"><?php echo $row1['phonenumber'] ;?></td>
                <td class="edit"><?php echo $row1['numberofphoto'] ;?></td>
                <td class="edit"><?php echo $row1['size'] ;?></td>
                <td class="edit"><?php echo $row1['amountpaid'] ;?></td>
                <td class="edit"><?php echo $row1['dueamount']; ?></td>
                <td class="edit"><?php echo $row1['totalamount'] ;?></td>
                
                <td class="edit"><?php echo $row1['comment'] ;?></td>
                  <td >
                         <div class="modal fade" id="btn1<?php echo $row1['id']; ?>" role="dialog">
            <div class="modal-dialog modal-sm vertical-align-center">
              <div class="modal-content" style="
    width: 344px;
">
                <div class="modal-header" style="
    background-color: #0eb493;
">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
                        <h2 style="color: white;">Booking details</h2>
                </div>
                <div class="modal-body">
                       <form action="editbooking.php" method="post">
                    
                        
        <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
     <br> <strong><span>name</span> </strong>  <br> <input type="text" name="name" value="<?php echo $row1['name']; ?>">
     <br> <strong><span>city</span> </strong>  <br> <input type="text" name="city" value="<?php echo $row1['city']; ?>">
      <br> <strong><span>function date</span> </strong>  <br> <input type="text" name="gender" value="<?php echo $row1['functiondate']; ?>">
      <br> <strong><span>booking date</span> </strong>  <br> <input type="text" name="clickeddate" value="<?php echo $row1['bookingdate'] ;?>">
      <br> <strong><span>size</span> </strong> <br> <input type="text" name="size" value="<?php echo $row1['size']; ?>">
       <br> <strong><span>phone no</span> </strong> <br><input type="text" name="phoneno" value="<?php echo $row1['phonenumber']; ?>">
        <br> <strong><span>occasion type</span> </strong> <br><input type="text" name="type" value="<?php echo $row1['occasiontype']; ?>">
       <br> <strong><span>number of pic</span> </strong> <br><input type="text" name="numpic" value="<?php echo $row1['numberofphoto']; ?>">
       <br> <strong><span>total amount</span> </strong> <br><input id="totalamt" type="text" name="totalamt" value="<?php echo $row1['totalamount']; ?>" onchange="amount()">
       <br> <strong><span>advance amount</span> </strong><br> <input id="advpaid" type="text" name="advpaid" value="<?php echo $row1['amountpaid']; ?>" onchange="amount()">
     <br> <strong><span>due amount</span> </strong><br>  <input id="dueamt" type="text" name="dueamt" value="<?php echo $row1['dueamount']; ?>">
      <br> <strong><span>comment</span> </strong> <br> <input type="text" name="comment" value="<?php echo $row1['comment']; ?>">
       <br><br> <input type="submit" class="btn btn-primary" name="submit3" value="update">
    </form>

                

              
              </div>
            </div>
        </div>
        </div>
        <!-- recipt -->

                    <div class="modal fade" id="rec<?php echo $row['id']; ?>" role="dialog">
          <!--   <div class="modal-dialog modal-lg vertical-align-center"> -->
   <!--            <div class="modal-content" 
"> -->
                <div class="modal-body ">
              <div class="row">
        <div id="print<?php echo $row['id']; ?>" class="  well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" style="
    width: 307px;
    /* height: 206px; */
">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Nandni Studio, Rath</strong>
                        <br>
                        Near Bada Mandir
                        <br>
                       9936210492
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em><?php echo $row['clickdate']; ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                   
                    <h3>Receipt</h3>
                </div>
                <h5><?php echo $row['name']; ?></h5>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>#</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row['size']; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"><?php echo $row['numberofphoto']; ?></td>
                            <td class="col-md-1 text-center"><?php echo $row['totalamount']; ?></td>
                        </tr>
                      <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Advance: </strong>
                            </p>
                            <p>
                                <strong>Due: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong><?php echo $row['amountpaid']; ?></strong>
                            </p>
                            <p>
                                <strong><?php echo $row['dueamount']; ?></strong>
                            </p></td>
                        </tr>
                       
                    </tbody>
                </table>
                <small style="
    padding: 85px;
">Signature</small>
            </div>
        </div>
         <button onclick="printDiv(<?php echo $row['id']; ?>)">print</button>
    </div>
              </div>
            <!-- </div> -->
        <!-- </div> -->

        </div>              
              
                   
        <!-- recipt end -->
    
     <button  class="btn btn-success" id="btn" onclick="editData1(<?php echo $row1['id']; ?>)">Edit</button>
      <div ><i style="
    color: #0eb493;
" class="fa fa-print fa-lg" onclick="printRecipt(<?php echo $row['id']; ?>)"></i></div> 
</td>
         <td >
           <form action='deletebook.php?id="<?php echo $row1['id']; ?>"' onSubmit="return confirm('delete this entry?')" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" class="btn btn-danger" name="submit" value="delete">
    </form>
</td>
               
            </tr>

        <?php
             }
             ?>
              </tbody>
             </table>
             
</div>
            </div>

                    </div>
                    </div>
                    </section>
           
    
                              <script src="js/jquery-1.11.1.min.js"></script>
                              <script src="js/jquery.dataTables.js"></script>
                                
                                   
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
       
        <!-- Google Map -->
      
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function() {
  $('#table').DataTable({ "order": []});
  //$('#table1').DataTable({ "order": []});
  function getstatus(){
    $.ajax({
            url:'getstatus.php',
           type:'GET',
            success:function(result){
              
              var s = result.substring(0, result.length - 1);
             
              var str = s;
var jsonObj = $.parseJSON('[' + str + ']');
                 for(var i=0;i<jsonObj.length;i++){
                 //   console.log(jsonObj[i]);
                    $("#status"+jsonObj[i].id).val(jsonObj[i].status);
                 }
            }
        });
  };
  getstatus();
});
    </script>
        <script>

       
            var wow = new WOW ({
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       120,          // distance to the element when triggering the animation (default is 0)
                mobile:       false,       // trigger animations on mobile devices (default is true)
                live:         true        // act on asynchronously loaded content (default is true)
              }
            );
            wow.init();


var editData = function(id){
  $("#btn"+id).modal('show');
};
var editData1 = function(id){
  $("#btn1"+id).modal('show');
};
function status(id,status){
    
    var statusObj={c_id:id,status:status};
   
      $.ajax({
            url:'status.php',
            data:statusObj,
            type:'POST',
            success:function(result){
               //success
            }
        });
}

var printRecipt=function(id){
   $("#rec"+id).modal('show');
}

function printDiv(id) {
     $("#rec"+id).modal('hide');
   w=window.open();
w.document.write($('#print'+id).html());
//console.log(document.getElementById('#print'+id).outerHTML())
w.print();
w.close();
}
function pdfP(){

}
 </script> 
        <!-- Custom Functions -->
        <script src="js/custom.js"></script>
 

    
        </body>
        </html>