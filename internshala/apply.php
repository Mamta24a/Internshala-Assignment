 <?php 
    session_start();
      
        if (!isset($_SESSION['userSession2'])) {
        header("Location: stu_login.php");
        }
		
		
  ?>
  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Internshala | Assessment</title>
	
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
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo2.png" width="190">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="dropdown">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-hover">
                        <a href="index.php" style="line-height: 70px;font-size:15px">Internships <b class="caret hidden-xs hidden-sm"></b></a>
					</li>
                    <li class="dropdown dropdown-hover">
                        <a href="/internships" style="line-height: 70px;font-size:15px">Summer Trainings <b class="caret hidden-xs hidden-sm"></b></a>
					</li>
                    <li class="dropdown dropdown-hover">
                        <a href="/internships" style="line-height: 70px;font-size:15px">Blog <b class="caret hidden-xs hidden-sm"></b></a>
					</li>
					
					<li class="dropdown dropdown-hover">
                        <a style="line-height: 70px;font-size:15px" href=""  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  <span class="caret"></span></a>
                                    
							<ul class="dropdown-menu" role="menu" id="user_settings">
                                <li><a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Edit Profile</a></li>
                                <li class="divider"></li>
                                <li><a href=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php?logout" name="logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
                            </ul>
                    </li>			
					
                </ul>
				
			</div>
		</div>
	</div>
	    </div>
	
	</div>
	</div>
	
	
	
	
	
	
	
		<?php 	
		require_once 'db_conn.php';
		$query1 =$conn->query("select * from stu_user where email='".$_SESSION['userSession2']."'");
                        
          while($result = $query1->fetch_array()) {  
            $stu_name=$result['f_name'] ; 
		
		
		
	include 'db_conn.php';
	
	if(isset($_POST['apply'])){
		  
	$id = $_POST['post_id'];	  
		  
    $query1 =$conn->query("select * from new_post where post_id = $id ");	
     while($row = $query1->fetch_array())
        { 
	?>
	
	<div class="container" style="padding:0% 18%;">
	<h3 class="bluehead" style="color:#1295c9;">Assessment Questions:</h3>
	<label>Why should you be hired for this internship?</label>
	<p style="line-height:9px;color:#999">please answer this question carefully. It will increase your chances of getting hired.</p><br>
	
	<form action="success.php" method="post">
	<textarea class="form-control" rows="5" name="ans1" placeholder="Enter your answer...." required></textarea>
		
	<label><?php echo "$row[ques1]";?></label>
	<textarea class="form-control" rows="5" name="ans2" placeholder="Enter your answer...." style="display:none;"></textarea>
	
	<label><?php echo "$row[ques2]";?></label>
    <textarea class="form-control" rows="5" name="ans3" placeholder="Enter your answer...." style="display:none;"></textarea>
	
	<input type="hidden" class="form-control"  name="name" value="<?php echo "$stu_name";?>">
	<input type="hidden" class="form-control"  name="email" value="<?php echo "$_SESSION[userSession2]";?>">
	<input type="hidden" class="form-control"  name="profile" value="<?php echo "$row[work_profile]";?>" >
	<input type="hidden" class="form-control"  name="org_name" value="<?php echo "$row[org_name]";?>" >
	<input type="hidden" class="form-control"  name="emp_email" value="<?php echo "$row[emp_email]";?>" >
	
	<div style="text-align:center">

<input type="text" value="<?php echo "$row[post_id]";?>" name="post_id" hidden>
<button style="padding:1% 8%" type="submit" name="submit" class="btn btn-primary" >Submit</button><br><br><br><br>
</form>	  
</div>

	
		  <?php }} }?>
	</div>

	
	
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