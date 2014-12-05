
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
                    <div class="col-lg-12 admin-bloc">
                        <h2>Ajouter un profil</h2>
                        <form class="form-horizontal" role="form" method="post" action="index.php?uc=successLogin&action=sendForm">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Nom</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" name="nom" placeholder="Nom">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Prénom</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputFirstname" name="prenom" placeholder="Prénom">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label" name="sexe">Sexe</label>
                            <div class="col-sm-10">
                            <div class="radio col-sm-2">
                              <label>
                                <input type="radio" name="optionsSexe" id="optionsSexeHomme" value="1" checked>
                                Homme
                              </label>
                            </div>
                            <div class="radio col-sm-2">
                              <label>
                                <input type="radio" name="optionsSexe" id="optionsSexeFemme" value="2">
                                Femme
                              </label>
                            </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Photo</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" id="inputPhoto" name="inputPhoto" placeholder="Photo">
                            </div>
                          </div>
                           <p>
                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </p>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->