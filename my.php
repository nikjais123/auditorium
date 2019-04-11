
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" colent="IE=edge">

<meta name="viewport" colent="width=device-width, initial-scale=1">

<link rel="stylesheet"  href="my.css">
<link rel="stylesheet" href="bootstrap.min.css">

  <meta name="viewport" colent="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
        


<style>
	ul li a:hover{font-size:30;}
	#col
	{
		background-color:#7CB2D5;
		font-size:20;
		font-family:cursive;
	}
</style>
</head>
<body>

		

<div id="" class="about text-center  " >
    <div class="container-fluid" id="container" style="height:150px;width:100%;">
	
	<a href="#" ><img  class="img-responsive" alt="AutoCluster" src="pic/logo.jfif" style="height:150px;width:150px;float:left;margin-left:-12px;"></a>
        <h2 style="font-size:40px;text-align:center;margin-top:30px;" > Adityapur <br>AutoCluster</h2>
       
		<p style="color:white;float:right;margin-top:-20px;"><?php echo "welcome &nbsp;" .$usermy?></p>
		<p style="color:white;float:right;margin-top:-10px;margin-right:-100px;"><a  style="color: white;font-size:18;" href="logout.php" class="btn btn-link"  onclick="return confirm('you want to logout?');">logout</a></p>
    </div>
    
</div>




<nav class="navbar navbar-inverse " style="position:relative;"  >
		

		<div class="colainer-fluid" id="col" >

			<div class="navbar-header">
			<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#menu" style="float:right;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>


			</div>
			<div class="collapse navbar-collapse div111" id="menu" >
			<ul class="nav navbar-nav  ml-auto ul1">
						<li ><a  style="color:white ;"href="http://localhost/pro/index.php">Home</a></li>
				
				<li><a style="color: white;" href="http://localhost/pro/enquiry/newpro1.php">Enquiry</a></li>

				<li class="dropdown"><a class="dropdown-toggle"  style="color: white;background-color:#7CB2D5;" href="" data-toggle="dropdown">Admission</a>
				<ul class="dropdown-menu" >
				     <li><a style="color: white;margin-left:-40px;margin-top:-5px;background-color:#7CB2D5;"  href="http://localhost/pro/adm/reg1.php">admission form</a> </li>
					 <li><a style="color: white;margin-left:-40px;margin-top:5px;background-color:#7CB2D5;"  href="http://localhost/pro/adm/disp3.php">admission details</a> </li>
				   </ul>
				</li>
				 <li class="dropdown"><a class="dropdown-toggle"  style="color: white;background-color:#7CB2D5;" href="" data-toggle="dropdown">Batch</a> 
				   <ul class="dropdown-menu">
				     <li><a style="color:white;margin-left:-40px;margin-top:-5px;background-color:#7CB2D5;" href="http://localhost/pro/b1/create.php">Batch Creation</a> </li>
					 <!--<li><a style="color: white;margin-left:-30px;" href="http://localhost/pro/b1/ash.php">Add Student</a> </li>-->
					 <li><a style="color: white;margin-left:-40px;margin-top:5px;background-color:#7CB2D5;"  href="http://localhost/pro/bclose/batch_close1.php">batch close</a> </li>
				   </ul>
				 </li>
				<li class="dropdown"><a class="dropdown-toggle"  style="color: white;background-color:#7CB2D5;" href="" data-toggle="dropdown">Fee</a>
				<ul class="dropdown-menu" >
				     <li><a style="color:white;margin-left:-40px;margin-top:-5px;background-color:#7CB2D5;"  href="http://localhost/pro/fee/fee.php"> receipt generate </a> </li>
					 <li><a style="color:white;margin-left:-40px;margin-top:5px;background-color:#7CB2D5;" href="http://localhost/pro/fee/d.php">Fee Details</a> </li>
				   </ul>
				</li>				 
				<li ><a style="color: white;" href="http://localhost/pro/chase/main_page.php">Chase Up</a></li>
			
				<li class="dropdown"><a class="dropdown-toggle"  style="color: white;background-color:#7CB2D5;" href="" data-toggle="dropdown">certificate</a>
				<ul class="dropdown-menu" >
				     <li><a style="color:white;margin-left:-40px;margin-top:-5px;background-color:#7CB2D5;"  href="http://localhost/pro/bclose/rp1.php"> certificate details </a> </li>
					 <?php
						$userty=$_SESSION['user_type'];
						if($userty=="admin")	
						{	
					 
					      echo '<li><a style="color:white;margin-left:-40px;margin-top:5px;background-color:#7CB2D5;" href="http://localhost/pro/bclose/rp2.php">
						  certificate update</a> </li>';
						}
						?>
				   </ul>
				</li>
				
				
				<?php
				$userty=$_SESSION['user_type'];
				if($userty=="admin")	
				{	
					echo '<li><a style="color: white;" href="http://localhost/pro/user.php">Authority</a>
							
				</li>';		
				}
				?>
				
			</ul>
			 	</div>






		</div>

	</nav>

</body>
</html>