<?php

include 'db_conn.php';
session_start();
    
if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

	if ($conn->connect_errno) {
     die("ERROR : -> ".$conn->connect_error);  }

else
{
          $query1 =$conn->query("select * from emp_user where email='".$_SESSION['userSession']."'");
                        
          while($result = $query1->fetch_array())
        {  
}}



if(isset($_POST["post"])){

$checkbox1=$_POST['perks'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
   
$sql = "INSERT INTO new_post
(
emp_email,
org_name,
website,
about_company,
work_profile,
primary_profile,
location,
part_time,
vacancies,
start_date,
apply_by,
posted_on,
duration,
about_internship,
stipend,
perks,
skills,
who_can,
ques1,
ques2
 )
VALUES (
'".$_POST["emp_email"]."',
'".$_POST["org_name"]."',
'".$_POST["website"]."',
'".$_POST["about_company"]."',
'".$_POST["work_profile"]."',
'".$_POST["primary_profile"]."',
'".$_POST["location"]."',
'".$_POST["part_time"]."',
'".$_POST["vacancies"]."',
'".$_POST["start_date"]."',
'".$_POST["apply_by"]."',
'".$_POST["posted_on"]."',
'".$_POST["duration"]."',
'".$_POST["about_internship"]."',
'".$_POST["stipend"]."',
'$chk',
'".$_POST["skills"]."',
'".$_POST["who_can"]."',
'".$_POST["ques1"]."',
'".$_POST["ques2"]."'
)";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Internship posted successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Employer's Dashboard</title>
	
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
                <button  style="margin:28px"  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown">
                                                             
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
                        <a style="line-height: 70px;font-size:15px" href="index.php">Internships</a>
					</li>
                    <li class="dropdown dropdown-hover">
                        <a href="" style="line-height: 70px;font-size:15px">Dashboard</a>
					</li>
                    <li class="dropdown dropdown-hover">
                        <a href="" style="line-height: 70px;font-size:15px">Post new Internship</a>
					</li>
                    <li class="dropdown dropdown-hover">
                        <a href="" style="line-height: 70px;font-size:15px">Hiring Tips</a>
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

	
	
	
	
	
<div class="container">
 

  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#home">Post a new Internship</a></li>
    <li><a data-toggle="tab" href="#menu1">View Internship</a></li>
    <li class="active"><a data-toggle="tab" href="#menu2">Application Recieved</a></li>
  </ul>

  <div class="tab-content">






  
    <div id="home" class="tab-pane fade">
     
	<form method="post" class=""> 
<div class="new_post"> 	
	       <h3 style="color:#1295c9;">Post a new Internship</h3>
		   <h4 align="center">About the internship</h4>
		   
		   	<div class="form-group">
               <label for="usr">Organization Name*</label>
               <input type="hidden" class="form-control"  name="emp_email" value="<?php echo $_SESSION['userSession']?>">
               <input type="name" class="form-control"  name="org_name" required>
            </div>
			
			<div class="form-group">
               <label for="usr">Website:</label>
               <input type="website" class="form-control"  name="website" required>
            </div>
			
			<div class="form-group">
               <label for="usr">About the company:</label>
               <textarea class="form-control" rows="5" name="about_company" required></textarea>
            </div>
			
			<label>Select primary profile*:</label><br>
		       <div class="radio">
               <label><input type="radio" name="work_profile" value="Business Development (Sales)" required> Business Development (Sales)</label>
               </div>
               <div class="radio">
               <label><input type="radio" name="work_profile" value="Web Development" required>Web Development</label>
               </div>
               <div class="radio">
               <label><input type="radio" name="work_profile" value="Mobile App Development" required> Mobile App Development</label>
               </div>
			   <div class="radio">
               <label><input type="radio" name="work_profile" value=" Human Resources (HR)" required> Human Resources (HR)</label>
               </div><br>
			
            <label>Select primary profile*:</label><br>
		       <label class="radio-inline"><input type="radio" name="primary_profile" value="Regular" required>Regular (In-office/On-field)</label>
               <label class="radio-inline"><input type="radio" name="primary_profile" value="Work from home" required>Work from home</label><br><br>
            			   
		    <div class="form-group">
               <label for="usr">Internship location(s)*</label>
               <input type="text" class="form-control"  name="location" required>
            </div>
            			
			<label>Is Part Time Allowed?*</label><br>
		       <label class="radio-inline"><input type="radio" name="part_time" value="Full time" required>Yes</label>
               <label class="radio-inline"><input type="radio" name="part_time" value="Part time Allowed" required>No</label><br><br>

		    <div class="form-group">
               <label for="usr">Number of openings*(Enter only numbers)</label>
               <input type="text" class="form-control"  name="vacancies" required>
            </div>

			<label>Internship start date*</label><br>
		        <input type="date" name="start_date" class="form-control" required><br>
				
			<label>Apply by date*</label><br>
		        <input type="date" name="apply_by" class="form-control" required><br>
            
			<label>Posted on*</label><br>
            <input type="date" name="posted_on" class="form-control" required><br>				
			   
			<div class="form-group">
               <label for="usr">Internship duration*</label>
               <input type="text" class="form-control"  name="duration" required>
            </div> <br>

            <h4 align="center">Intern's Responsibilities</h4>
			<div class="form-group">
               <label for="usr">Mention the details of work the interns will be doing*:</label>
               <textarea class="form-control" rows="5" id="comment" name="about_internship" required>The selected intern(s) will work on following during the internship:</textarea>
            </div> 

            <label>Stipend & Perks</label><br>
		       <label class="radio-inline"><input type="radio" name="stipend" value="Fixed" required> Fixed</label>
               <label class="radio-inline"><input type="radio" name="stipend" value="Negotiable" required>Negotiable</label>
			   <label class="radio-inline"><input type="radio" name="stipend" value="Performance based" required>Performance based</label>
			   <label class="radio-inline"><input type="radio" name="stipend" value="Unpaid" required>Unpaid</label><br><br>	

            <label>Perks</label><br>
			   <label><input type="checkbox" value="Certificate" name="perks[]" checked >Certificate</label>
               <label><input type="checkbox" value="Letter of recommendation" name="perks[]" >Letter of recommendation</label>
               <label><input type="checkbox" value="Free snacks & beverages" name="perks[]" >Free snacks & beverages</label>
            			   
			
			<h4 align="center">Who can apply</h4>
			<div class="form-group">
               <label for="usr">Skill(s) that you are looking for:</label>
               <input type="text" class="form-control"  name="skills" required>
			   
               <label for="usr">Who can apply:*:</label>
               <textarea class="form-control" rows="5" name="who_can" required>Only those candidates can apply who:</textarea>
            </div> <br>
			
			<h4 align="center">Assessment</h4>
			<div class="form-group">
               <label for="usr">Question 1: Why should you be hired for this internship?</label><br><br>
			   
			   <label for="usr">Question 2:(Optional)</label>
			   <input type="text" class="form-control" name="ques1">
			   <br>
			   
			   <label for="usr">Question 3:(Optional)</label>
			   <input type="text" class="form-control" name="ques2">
			   <br>
			</div>
			</div>
			<div style="text-align:right;padding:20px 100px"><input type="submit" value="Post Internship" class="btn btn-primary" name="post"/></div>
			
			</form>
	        </div>




			
    <div id="menu1" class="tab-pane fade">
      <h3>Internships Posted by you:</h3>
	<?php 
	
	include 'db_conn.php';
    $query1 =$conn->query("select * from new_post where emp_email = '".$_SESSION['userSession']."'");	
     while($row = $query1->fetch_array())
        { 	?>
	
	
	<div class="container" style="padding:3% 8% 0% 8%">
	 <h4 style="color:#1295c9;font-weight:bold;line-height:0px"><?php echo "$row[work_profile]";?></h4>
	 <h4><?php echo "$row[org_name]";?></h4>
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

	  <form action="view description.php" method="post" > 
	  <input type="text" value="<?php echo "$row[post_id]";?>" name="post_id" hidden>
	  <button type="submit"  style="padding:8px;float:right" class="btn btn-primary" name="view">View Details</button>
	  </form> 

	 <span style="background:#888;color:white;padding:3px;margin-right:3px"><?php echo "$row[part_time]";?></span>
	  <span style="background:#888;color:white;padding:3px"><?php echo "$row[primary_profile]";?></span>
	  
	 </p>
		</div><hr style="margin-bottom:0px"><?php } ?>
	</div>
	





    <div id="menu2" class="tab-pane fade in active">
	   
      <h3>Application(s) Recieved</h3>
	<?php 	
	include 'db_conn.php';
				  
    $query1 =$conn->query("select * from app_recieved where id=$_POST[id]");	
     while($row = $query1->fetch_array())
        { 
	?>
	  <div class="new_post" style="margin:2% 5%; padding:2% 5%; color:#777;">
      <p><label>Work Profile: </label><?php echo " $row[profile]";?><br>
	  <label>Name: </label><?php echo "$row[name]";?><br>
	  <label>Email: </label><?php echo "$row[email]";?></p>
	  <label style="color:black">Assessment-Question(s): </label><br>
	  <label>Why should you be hired for this internship?</label><br>
	  <?php echo "$row[ans1]";?><br>
	  <?php echo "$row[ans2]";?><br>
	  <?php echo "$row[ans3]";?>
	
	 </div>
	<?php } ?>
	</div>
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