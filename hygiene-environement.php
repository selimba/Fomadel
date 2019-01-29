<?php include ("includes/header.php"); ?>
<?php include 'includes/navbar.php'?>

<main role="main">
    <div  class="container">
        <!-- titre de la page -->
        <div class="row">
            <div class="col-md-12" id="top">
                <h2 class="blog-post-title animated slideInRight">L'Hygène et l'environnement</h2>
                <hr>
            </div>
        </div>
        

        <div class="row featurette">
            <div class="col-md-9 order-md-1">
                <img class="featurette-image img-fluid mx-auto animated slideInLeft" src="imgs/mains-eau.jpg" alt="">
                <p class="text-justify lead">La FOMADEL réalise de programmes d’action et de sensibilisation en faveur de la santé et de l’hygiène, de la
                    conservation de la nature et de l’assainissement des rues. Elle est à l'origine d'un programme lancé en ce jour dans le quartier de Lukunga, à Kinshasa. 
                    ayant pour objectif d' inciter les habitants à préserver un environnement sain et à lutter contre le développement des maladies endémiques.
                    <br> Pour ce faire, la FOMADEL travaille en collaboration avec <a href ="les-jeunes.php">les jeunes de
                    la FOJDEL</a> qui consacrent, de manière hebdomadaire, une matinée pour l’évacuation des déchets solides et le désherbage
                    d’une rue au choix au sein de ce quartier.
                </p>
    
                <div class="row mt-2">
                    <div class="col-md-6">
                        <img src="imgs/child-enjoyment.jpg" class="featurette-image img-fluid mx-auto" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3 class="blog-post-title">Un environnement sain permet une santé saine</h2>
                        <hr>
                        <p class="text-justify lead"> En réalisant de tels travaux, la FOMADEL souhaite interpeller, responsabiliser et
                            éveiller les habitants à l’importance du respect et de la prise en charge de l’entretien de leur milieu
                            car sensibiliser, c’est prévenir.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->

            <div class="col-md-3 order-md-2 animated slideInRight">
            <?php include 'includes/sidebar.php'?>
            </div>
    </div>
    <hr class="featurette-divider">
</main>
<?php include 'includes/footer.php'?>