  <?php include ("includes/header.php"); ?>
  <?php include ("includes/navbar.php"); ?>

  
  <?php contact_us(); ?>
  <div class="container">
  <h2 class="blog-post-title" id="top">Contact</h2>
	<hr class="mb-5">
  <div class="row">
      <div class="col-9">
      <form id="contact-form" method="post" action="" role="form">
            <div class="row contact">
                <div class="col-sm-6">
                    <label for="firstname">Prenom/First Name <span class="blue">*</span></label>
                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Your First name" required>
                    <p class="comments"></p>
                
                    <label for="name">Nom/Last Name <span class="blue">*</span></label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Your last name" required>
                    <p class="comments"></p>
                </div>
                <div class="col-sm-6">
                    <label for="email">Email<span class="blue">*</span></label>
                    <input id="email" type="text" name="email" class="form-control" placeholder="Your Email" required>
                    <p class="comments"></p>
                
                    <label for="phone">Telephone/Phone Number</label>
                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Your phone Number" required>
                    <p class="comments"></p>
                </div>
                <div class="col-md-12">
                    <label for="message">Message <span class="blue">*</span></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Mettre votre message ici" rows="4" required></textarea>
                    <p class="comments"></p>
               
                    <p class="blue font-weight-bold font-italic text-warning">* Tous les champs sont obligatoires!</p>
                    <input type="submit" class=" btn btn-success" value="Envoyer">
                </div> 
                 
            </div>
        </form>
      </div>
      <aside class="col-md-3 text-center animated slideInRight" id="top">
          <?php include 'includes/sidebar.php'; ?>
          </aside><!-- /.blog-sidebar -->
      </div>
  </div>
  <hr class="featurette-divider">
  </div>

  <?php include ("includes/footer.php"); ?>