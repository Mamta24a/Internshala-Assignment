<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Internshala | Description</title>
	
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
                                <a style="line-height: 70px;font-size:15px" href="#" class="dropbtn dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  <span class="caret"></span></a>
								<div class="dropdown-content">
                                     <a href="index.php" rel="modal" >Login</a>
                                     <hr style="margin:0px">
                                     <a href="stu_signin.php" rel="modal" >Register</a>
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
	include 'db_conn.php';
	
	if(isset($_POST['view'])){
		  
	$id = $_POST['post_id'];	  
		  
    $query1 =$conn->query("select * from new_post where post_id=$id");	
     while($row = $query1->fetch_array())
        { 
	?>

	<div class="container" style="padding:3% 8%">
	<h3 ><?php echo "$row[work_profile]";?> Internship in <?php echo "$row[location]";?> at <?php echo "$row[org_name]";?></h3>
	<hr>
	<h4 style="color:#1295c9"><?php echo "$row[work_profile]";?></h4>
	<h4><?php echo "$row[org_name]";?></h4>
	<p><span class="greyhead">Location(s):</span> <?php echo "$row[location]";?></p>
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
            </table>
	<p>
	  <span style="background:#888;color:white;padding:3px;margin-right:3px"><?php echo "$row[part_time]";?></span>
	  <span style="background:#888;color:white;padding:3px"><?php echo "$row[primary_profile]";?></span>
	</p>
	
	<hr>
	
	<h4>About <?php echo "$row[org_name]";?> (<a style="color:#1295c9"><?php echo "$row[website]";?></a>):</h4>
	<p><?php echo "$row[about_company]";?></p>
	
	<p style="font-weight:bold"><br>About the Internship:</p>
	<p><?php echo "$row[about_internship]";?></p>

	<p><span style="font-weight:bold"><br># of Internships available: </span> <?php echo "$row[vacancies]";?></p>
	<p style="font-weight:bold"><br>Who can apply:</p>
	<p><?php echo "$row[who_can]";?></p>
	<p style="font-weight:bold"><br>Perks:</p>
	<p><?php echo "$row[perks]";?><br><br>

You can also share meaningful internship that you know and join the movement to build a Wikipedia of internships and win exciting prizes. Check out the <a style="color:#1295c9">Share an Internship Contest</a> for more details.</p>

<div style="text-align:center"><br>
<form action="stu_login.php" method="post">
<input type="text" value="<?php echo "$row[post_id]";?>" name="post_id" hidden>
  
  
<?php
 if (isset($_SESSION['userSession'])) { ?>
              <div class='alert alert-danger'>
                <h4><span class='glyphicon glyphicon-info-sign'></span> &nbsp; You are signed-in as Employer..Please sign-in as student to apply for this internship!</h4>
              </div>
 <?php
} else{
?>  
   
   <button type="submit" name="apply" class="btn btn-primary" >Apply Now</button>	

   
</form>	 	<?php } }} ?> 
</div>
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