<?php include ("includes/header.php"); ?>

<div class="container">

	<h2 class="blog-post-title">Modifier le mot de passe</h2>
	<hr class="mb-5">
	<div class="alert-placeholder">
		<?php recover_password(); ?>
		<?php display_message(); ?>
	</div>
		
	<div class="row panel panel-success">
		<div class="col-6 panel-body">
			<form id="register-form"  method="post" role="form" autocomplete="off">
				<div class="form-group">
					<label for="email">Votre adresse email</label>
					<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="email@exemple.com" value="" autocomplete="off" />
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-6"><input type="submit" name="cancel-submit" id="cencel-submit" tabindex="2" class="form-control btn btn-outline-secondary" value="Annuler" />
						</div>
						<div class="col-6"><input type="submit" name="recover-submit" id="recover-submit" tabindex="2" class="form-control btn btn-outline-success" value="Envoyer le lien de réinitialisation" />
						</div>	
					</div>
				</div>
				<input type="hidden" class="hide" name="token" id="token" value="
					<?php echo token_generator(); ?>
					">
			</form>
		</div>
		<div class="col-6"></div>
	</div>
</div>
<?php include ("includes/footer.php"); ?>