
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="wrapper" class="toggled">
        <?php include('v_sidemenu.php'); ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

        <button type="button" href="#menu-toggle" class="btn btn-default" id="menu-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <i class="glyphicon glyphicon-th"></i>
        </button>

        <button type="button" href="" class="btn btn-default" id="menu-logout">
            <i class="glyphicon glyphicon-off"></i>
        </button>

            <div class="container-fluid">
                <div class="row">
                    <a href="index.php?uc=home">
                        <div class="title">FindIt</div>
                    </a>

                    <?php
                    if(isset($_POST['nom'])){
						$nom=$_POST['nom'];
					}
					if(isset($_POST['prenom'])){$prenom=$_POST['prenom'];}

					if(isset($_POST['optionsSexe'])){
						if($_POST['optionsSexe'] == "1"){
							$sexe = "Homme";
						}else{
							$sexe = "Femme";
						}
					}
					?>
                    <div class="col-lg-12 admin-bloc">
                        <h2>Création du profil</h2>
                        <p>Nom : <?php echo $nom; ?><br/>
                        	Prénom : <?php echo $prenom; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->