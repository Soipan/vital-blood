<?php 
 @include 'config.php';
	session_start();

	if (isset($_SESSION['email'])) {
		
	}
	else{
		header('location:login.php');
	}

?>

<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Client Request</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
        
  <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
} 
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.30)),url(about.jpg);
    background-size: cover;
    background-position: center;
}

.navbar img{
    width: 100px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 20%;

}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content:
    space-between;
}

.logo{
    width: 120px;
    cursor: pointer;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}

.navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}

.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #960032;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
    
}

.navbar ul li:hover::after{
    width: 100%;
}

.text-box{
    width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}

.text-box h1{
    font-size: 62px;

}

.text-box p{
    margin: 10px 0 40px;
    font-size: 17px;
    color: #fff;
}

.hero{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}

.fa-solid{
    display: block;
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
        left: 20px;
}


.content{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}

.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}

.cta{
        margin: 100px auto;
        width: 80%;
        background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(banner2.jpg);
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        text-align: center;
        padding: 100px 0;
    }

    .cta h1{
        color: #fff;
        margin-bottom: 40px;
        padding: 0;
    }
    .cta a{
      color: #fff;
        text-decoration: none;
    }

    .hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}

.hero-btn:hover{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
}



            </style>
             
        </head>

             <body>

             

             <div class="banner">
                 <div class="navbar">
                    <img src="logo.png" class="logo">
                    <ul>
                        <li><a href="logout.php">Logout</a></li>

                        </ul>                    
                </div>
                <div class="text-box" id="text-box">
            <h1>Courses We Offer </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi in quas minima eius, qui illo. Inventore veritatis officiis quibusdam error iste quo odio dolorem, consectetur, ut iusto, maiores vel.</p>
    <div class="hero">
   <p>Scroll Down For More Information<br><br><i class="fa-solid fa-arrow-down"></i></p>
    </div>
</div>
</div>
            
    
           
                
 <!-- EVENT LIST SECTION START -->
 <div class="container event">
          <div class="row text-center justify-content-center">
            
              <div class="offset-sm-1 col-sm-5">
                  <img src="photos/one.jpg" class="img-fluid" alt="">
                  <div class="event-content">
                      <h6>Business Mastery Event</h6>
                        <span>Blood drive held on <b> </b>18TH DECEMBER 2022</b> <br> Aga Khan Hospital for baby Naya.<br> Blood type required is AB </span><br><br>
                      <a href="client_signup.php">Join Us</a>
                  </div>
              </div>

              <div class="offset-sm-1 col-sm-5">
                <img src="photos/two.jpg" class="img-fluid" alt="">
                <div class="event-content">
                    <h6>Business Mastery Event</h6>
                    <span>Blood drive held on <b> </b>18TH JANUARY 2023</b> <br> Aga Khan Hospital for baby Marcus.<br> Blood type required is O+(O positive) </span><br><br>
                    <a href="client_signup.php">Join Us</a>
                </div>
            </div>
          </div>

          <!--This is section-->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<section id="sections" class="py-4 mb-4 bg-faded">
		<div class="container">
			<div class="row">
				<div class="col-md"></div>
				<div class="col-md-3">
					<a href="#" class="btn btn-primary btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-plus"></i> Apply Leave</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="btn btn-warning btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addCateModal"><i class="fa fa-spinner"></i> Pendings</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="btn btn-success btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addUsertModal"><i class="fa fa-check"></i> Approved Leaves</a>
				</div>
				<div class="col-md"></div>
			</div>
		</div>
	
	</section>
	<!----Section2 for showing Post Model ---->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<section id="post">
		<div class="container">
			<div class="row">
			<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Name</th>
								<th>Department</th>
								<th>Leave Date</th>
								<th>Reason</th>
								<th>Status</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM leaves WHERE email='".$_SESSION['email']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['department']; ?></td>
							 		<td><?php echo $result['leavedate']; ?></td>
							 		<td><?php echo $result['leavereason']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['status'] == 0) {
							 				echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
							 				echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>

							 </tbody>
						</table>
			</div>
		</div>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!----Section3 footer ---->
	<section id="main-footer" class="text-center text-white bg-inverse mt-4 p-4">
		<div class="container">
			<div class="row">
				<div class="col">
				<p class="lead">&copy; <?php echo date("Y")?> SOLM</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Creating Modal -->
    <!-- Header Post -->
	<div class="modal fade" id="addPostModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<div class="modal-title">
						<h5>Apply Leave</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="form-control-label">Name</label>
							<input type="text" name="name" class="form-control"/>
							<input type="hidden" name="email" value="<?php echo $_SESSION['email']?>">
							<label class="form-control-label">Department</label>
							<select name="department" class="form-control" >
								<option value="HR">HR</option>
								<option value="Marketing">Marketing</option>
								<option value="Development">Development</option>
								<option value="UX">UX</option>
								<option value="Test Team">Test Team</option>
								<option value="Finance">Finance</option>
								<option value="Customer Support">Customer Support</option>
							</select>
						</div>
						
						<div class="form-group">
							<label class="form-control-label">Leave Date</label>
							<input type="date" name="leavedate" class="form-control" />
						</div>
						<div class="form-group">
							<label>Reason For Leave</label>
							<textarea name="editor1" class="form-control"></textarea>
						</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger" style="border-radius:0%;" data-dismiss="modal">Close</button>
					<input type="hidden" name="status" value="0">
					<input type="submit" class="btn btn-success" style="border-radius:0%;" name="apply"  value="Apply">
				</div>
			</form>
			</div>
		</div>
	</div>
	<!--Modal Category-->
	<div class="modal fade" id="addCateModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-warning text-white">
					<div class="modal-title">
						<h5>Pending Leaves</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
				<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Name</th>
								<th>Department</th>
								<th>Leave Date</th>
								<th>Reason</th>
								<th>Status</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM leaves WHERE status = 0 && email='".$_SESSION['email']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['department']; ?></td>
							 		<td><?php echo $result['leavedate']; ?></td>
							 		<td><?php echo $result['leavereason']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['status'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>

							 </tbody>
						</table>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- User Modal -->
	<div class="modal fade" id="addUsertModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<div class="modal-title">
						<h5>Total Approved Leaves</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
				<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Name</th>
								<th>Department</th>
								<th>Leave Date</th>
								<th>Reason</th>
								<th>Status</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM leaves WHERE status = 1 AND email='".$_SESSION['email']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['department']; ?></td>
							 		<td><?php echo $result['leavedate']; ?></td>
							 		<td><?php echo $result['leavereason']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['status'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>

							 </tbody>
						</table>
				</div>
				
			</div>
		</div>
	</div>
  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
  </script>
</body>
</html>
<?php 
	if (isset($_POST['apply'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$department = $_POST['department'];
		$leavedate = $_POST['leavedate'];
		$editor1 = $_POST['editor1'];
		$status = $_POST['status'];

		$sql = "INSERT INTO leaves(name,email,department,leavedate,leavereason,status)VALUES('$name','$email','$department','$leavedate','$editor1','$status')";

		$run = mysqli_query($con,$sql);

		if($run == true){
			
			echo "<script> 
					alert('Leave Requested, Please wait for approval status');
					window.open('dashboard.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Apply');
			</script>";
		}
	}
	
 ?>


    <!-- EVENT LIST SECTION END -->

  


<script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>


    <script>
        $(document).scroll(function(){
            $(".navbar").toggleClass("scrol", $(this).scrollTop() > $(".navbar").height());
        })
    </script>
</body>
</html>
             </body>

             </html>