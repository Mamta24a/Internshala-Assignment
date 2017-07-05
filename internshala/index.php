<!--This page is for guest users-->
  
  <?php
session_start();
require_once 'db_conn.php';

if (isset($_POST['login2'])) {
      
          $email = strip_tags($_POST['email2']);
          $password = strip_tags($_POST['password2']);
        
          $email = $conn->real_escape_string($email);
          $password = $conn->real_escape_string($password);
          
          $query = $conn->query("SELECT user_id, email, password FROM stu_user WHERE email='$email'");
          $row=$query->fetch_array();
          
          $count = $query->num_rows; // if email/password are correct returns must be 1 row
        
        if (password_verify($password, $row['password']) && $count==1) {
          $_SESSION['userSession2'] = $row['email'];
          header("Location:loggedin_users.php");
        } else {
          $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
              </div>";
              }
      $conn->close();
}
?>


  <?php
require_once 'db_conn.php';

//if (isset($_SESSION['userSession'])!="") {
//header("Location:emp_dashboard.php");
//exit;
//}

if (isset($_POST['login1'])) {
      
          $email = strip_tags($_POST['email1']);
          $password = strip_tags($_POST['password1']);
        
          $email = $conn->real_escape_string($email);
          $password = $conn->real_escape_string($password);
          
          $query = $conn->query("SELECT user_id, email, password FROM emp_user WHERE email='$email'");
          $row=$query->fetch_array();
          
          $count = $query->num_rows; // if email/password are correct returns must be 1 row
        
        if (password_verify($password, $row['password']) && $count==1) {
          $_SESSION['userSession'] = $row['email'];
          header("Location:emp_dashboard.php");
        } else {
          $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
              </div>";
              }
      $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Internshala</title>
	
	<!-- Favicon -->
    <link rel="icon" href="img/logo1.png" type="image/png" sizes="32x32"/>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<!-- Modal -->
  <div class="modal fade" id="stulog" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
                  
        <div class="row">
                    

		  <div class="col-sm-10 col-sm-offset-1 form-box" style="margin-top:0px">
                        	<div class="form-bottom" >
							
							<h2 style="color:#1295c9">Login for students</h2><br>
		           <button type="button" class="close" data-dismiss="modal" style="color:black"></button>
				       
			                    <form role="form" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label for="form-username">Email</label>
			                        	<input type="text" name="email2" placeholder="Enter your Email-id..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label for="form-password">Password</label>
										<a href="" style="float:right;" data-toggle="modal" data-target="#myModal-3" data-dismiss="modal">forgot password?</a>
			                        	<input type="password" name="password2" placeholder="Enter your Password..." class="form-password form-control" id="form-password">
			                        </div>
			                     <br>   
			                    <p class="greyhead">Don't have an account? Register (
								<a href="stu_signin.php" >Student </a> / <a href="emp_signin.php" > Company</a>)</p>
								
								<div style="text-align:right">
								<button class="btn-primary" name="login2">Login</button></div>
								</form>
		                    </div>
                        </div>
                    </div>
        </div>
        
      </div>
      
    </div>
  </div>
  
  
  
  	<!-- Modal -->
  <div class="modal fade" id="emplog" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
                  
        <div class="row">
                    

		  <div class="col-sm-10 col-sm-offset-1 form-box" style="margin-top:0px">
                        	<div class="form-bottom" >
							
							<h2 style="color:#1295c9">Login for Employers</h2><br>
		           <button type="button" class="close" data-dismiss="modal" style="color:black"></button>

			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label for="form-username">Email</label>
			                        	<input type="text" name="email1" placeholder="Enter your Email-id..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label for="form-password">Password</label>
										<a href="" style=" float: right; " data-toggle="modal" data-target="#myModal-3" data-dismiss="modal">forgot password?</a>
			                        	<input type="password" name="password1" placeholder="Enter your Password..." class="form-password form-control" id="form-password">
			                        </div>
			                     <br>   
			                    <p class="greyhead">Don't have an account? Register (
								<a href="stu_signin.php" >Student </a> / <a href="emp_signin.php" > Company</a>)</p>
								
								<div style="text-align:right">
								<button class="btn-primary" name="login1">Login</button></div>
								</form>
		                    </div>
                        </div>
                    </div>
        </div>
        
      </div>
      
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  

	
   	   
    <div id="header" >
    <div class="max-width-container-header">
        <div id="header-inner">
            
<div id="navbar-container" style="line-height: 80px;">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header" id="main-navbar-header">
                <button style="margin:28px" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown">
                                                             
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" >
                    <img src="img/logo2.png" width="190" >
                </a>
            </div>

            <div class="collapse navbar-collapse" id="dropdown">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-hover">
                        <a style="line-height: 70px;font-size:15px">Internships <b class="caret hidden-xs hidden-sm"></b></a>
					</li>
                    <li class="dropdown dropdown-hover">
                        <a href="" style="line-height: 70px;font-size:15px">Summer Trainings <b class="caret hidden-xs hidden-sm"></b></a>
					</li>
                    <li class="dropdown dropdown-hover">
                        <a href="" style="line-height: 70px;font-size:15px">Blog <b class="caret hidden-xs hidden-sm"></b></a>
					</li>
					
									
					<li class="dropdown dropdown-hover" style="padding-top:20px;">
                        <a class="dropbtn" href="" ><button class="btn-primary" >Login <b class="caret hidden-xs hidden-sm"></b> </button></a>
						<div class="dropdown-content">
                             <a data-toggle="modal" data-target="#stulog" href="" rel="modal" >As Students</a>
                             <hr style="margin:0px">
                             <a data-toggle="modal" data-target="#emplog" href="" rel="modal" >As Employers</a>
                        </div>
					</li>
					<li class="dropdown dropdown-hover" style="padding-top:20px;">
                        <a class="dropbtn" href="" ><button class="btn-primary" >Register <b class="caret hidden-xs hidden-sm"></b> </button></a>
						<div class="dropdown-content">
                             <a href="stu_signin.php" rel="modal" >For Students</a>
                             <hr style="margin:0px">
                             <a href="emp_signin.php" rel="modal" >For Employers</a>
                        </div>
					</li>
                </ul>
				
			</div>
		</div>
	</div>
	    </div>
	
	</div>
	</div>

	
	 <?php
                        if(isset($msg)){
                        echo $msg;
                         }
                        ?>
	
	
	
	
	
	
	
	
	
	
	<?php 
	
	include 'db_conn.php';
    $query1 =$conn->query("select * from new_post");	
     while($row = $query1->fetch_array())
        { 	?>
	
	
	<div class="container" style="padding:3% 8% 0% 8%">
	 <h3 style="color:#1295c9;font-weight:bold;line-height:0px"><?php echo "$row[work_profile]";?></h3>
	 <h3><?php echo "$row[org_name]";?></h3>
	 <p><span class="greyhead">Location(s):</span> <?php echo "$row[location]";?></p>
	 <p>
	    <table class="table" style="">
                    <tr class="greyhead">
                        <td width="150">Start Date</td>
                        <td width="150">Duration</td>
                        <td width="150">Stipend</td>
                        <td width="150">Posted On</td>
                        <td >Apply By</td>
                    </tr>
                
                    <tr>
                        <td><?php echo "$row[start_date]";?></td>
                        <td><?php echo "$row[duration]";?></td>
                        <td><i class="fa fa-inr"></i><?php echo "$row[stipend]";?></td>
                        <td><?php echo "$row[posted_on]";?></td>
                        <td><?php echo "$row[apply_by]";?></td>
                    </tr>
            </table></p>
	 <p>
	  <span style="background:#888;color:white;padding:3px;margin-right:3px"><?php echo "$row[part_time]";?></span>
	  <span style="background:#888;color:white;padding:3px"><?php echo "$row[primary_profile]";?></span>
	  
	  <form action="view description.php" method="post" > 
	  <input type="text" value="<?php echo "$row[post_id]";?>" name="post_id" hidden>
	  <button type="submit"  style="padding:8px" class="btn btn-primary pull-right" name="view">View Details</button>
	  </form> 
	 </p>
		</div><hr style="margin-bottom:0px"><?php } ?>
	
		
		
		
	<div  style="background:#2d2d2d;color:white;padding:20px;">
	<div id="footer">
    <div class="">
        <div class='container' >
            <div class='row' >
                <div class='col-md-3 visible-md visible-lg  footer-column'>
                    <div class="footer-list">
                        <h4>Internships by places</h4>
                        <div class='footer-list-item'>
                            <a href ="/internships">Internship in India</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/internship-in-delhi">Internship in Delhi</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/internship-in-bangalore">Internship in Bangalore</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/internship-in-hyderabad">Internship in Hyderabad</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/internship-in-mumbai">Internship in Mumbai</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/internship-in-chennai">Internship in Chennai</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/internship-in-gurgaon">Internship in Gurgaon</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/internship-in-kolkata">Internship in Kolkata</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/virtual-internship">Virtual internship</a>
                        </div>
                    </div>
                </div>
                <div class='col-md-3 visible-md visible-lg  footer-column'>
                    <div class="footer-list">
                        <h4>Internship by Stream</h4>
                        <div class='footer-list-item'>
                            <a href ="/internships/computer%20science-internship">Computer Science Internship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/electronics-internship">Electronics Internship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/mechanical-internship">Mechanical Internship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/civil-internship">Civil Internship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/marketing-internship">Marketing Internship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/chemical-internship">Chemical Internship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/finance-internship">Finance Internship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/summer%20research%20fellowship-internship">Summer Research Fellowship</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/internships/iit-internship">IIT Internship</a>
                        </div>
                    </div>
                </div>

                <div class='col-md-3 visible-md visible-lg  footer-column'>
                    <div class="footer-list">
                        <h4>
                            Online Trainings
                                                            <span class = "offer">OFFER</span>
                        </h4>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/android?course=android101&utm_source=is-footer-FTUD" target="_blank">Android Training</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/web-development?course=webdev101&utm_source=is-footer-FTUD" target="_blank">Web Development Training</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/digital-marketing?course=marketing101&utm_source=is-footer-FTUD" target="_blank">Digital Marketing Training</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/c-plus-plus?course=c101&utm_source=is-footer-FTUD" target="_blank">Programming with C & C++</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/autocad?course=autocad101&utm_source=is-footer-FTUD" target="_blank">AutoCAD Training</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/hacking?course=hacking101&utm_source=is-footer-FTUD" target="_blank">Hacking</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/data-analytics?course=analytics101&utm_source=is-footer-FTUD" target="_blank">Data Analytics Training</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/python?course=python101&utm_source=is-footer-FTUD" target="_blank">Python Online Training
                            </a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="https://trainings.internshala.com/iot?course=iot101&utm_source=is-footer-FTUD" target="_blank">IoT Training</a>
                        </div>
                    </div>
                </div>

                <div class='col-md-3 footer-column' id='about-us-container'>
                    <div class="footer-list">
                        <h4>About Internshala</h4>
                        <div class='footer-list-item'>
                            <a href ="/about_us">About us</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/careers">We're hiring</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/registration/employer?utm_source=ISfooter">Hire interns for your company</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/advertise">Advertise with us</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="http://blog.internshala.com/internshala-editorials/team-diary/" target="_blank">Team Diary</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/products_services">Our Services</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/terms">Terms &amp; Conditions</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/privacy">Privacy</a>
                        </div>
                        <div class='footer-list-item'>
                            <a href ="/contact">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border-top: 1px solid #111;border-bottom: 1px solid #555;">
            <div class='row' id='footer-bottom'>
                <div class='col-xs-12' id='copyright' style="text-align:right;padding-bottom:0px;font-weight:bold">
                    &copy; Copyright 2017 Internshala
                </div>
            </div>
        </div>
    </div>
</div>
</div>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>