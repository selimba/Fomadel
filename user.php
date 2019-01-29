<?php include ("includes/header.php"); ?>
<?php include 'includes/navbar.php'?>


<div class="jumbotron">
		<h1 class="text-center">
			<?php 

			if(logged_in()){
				echo "Profil";
				if($_SESSION['email']){

					$SESSION = $_SESSION['email'];

					$result = mysqli_query($con, "select * from `users` where `email` = '$SESSION'");
					$show=mysqli_fetch_assoc($result);
			}else {
				redirect("index.php");
			}
			} else {
				redirect("index.php");
			}

			 ?>
		</h1>
	</div>

<?php 






 ?>
	<div class="container admin">
		<div class="row">
			<div class="col col-md-6"> 
				<h1><strong>Modifier sont Profil</strong></h1>
					<br>
					<form class="form" role="form" action="<?php echo 'update.php?email=' .$email; ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name">Prenom:</label>
							<input type="text" class="form-control" id="first_name" placeholder="" name="first_name"
							value="<?php echo $show['first_name'];?>">
						</div>
						<div class="form-group">
							<label for="description">Nom:</label>
							<input type="text" class="form-control" id="last_name" placeholder="" name="last_name" value="<?php echo $show['last_name'];?>">
						</div>
						<div class="form-group">
							<label for="description">Username:</label>
							<input type="text" class="form-control" id="username" placeholder="" name="username" value="<?php echo $show['username'];?>">
						</div>
						<div class="form-group">
							<label for="description">Email:</label>
							<input type="text" class="form-control" id="email" placeholder="" name="email" value="<?php echo $show['email'];?>">
						</div>
<!-- 					<div class="form-group">
							<label>Image:</label>
							<p> <?php echo $image; ?> </p>
							<label for="image">Selectionner une Image:</label>
							<input type="file" id="image" name="image">
							<span class="help-inline"><?php echo $imageError;?></span>
						</div> -->
					<br>
					<div class="form-actions">
						<button type="submit" class="btn btn-success" name="update"><span class="glyphicon glyphicon-pencil"> Modifier</span></button>
						<a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"> Retour</span></a>
					</div>
					</form>
			</div>
		</div>
	</div>	
					</form>
			</div>
				</div>
			</div>
		</div>
	</div>	








<?php include ("includes/footer.php"); ?>

