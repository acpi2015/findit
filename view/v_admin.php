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

        <a href="index.php?uc=successAdmin&action=logou">
        <button type="submit" class="btn btn-default" id="menu-logout">
            <i class="glyphicon glyphicon-off"></i>
        </button>
    </a>

            <div class="container-fluid">
                <div class="row">
                    <a href="index.php?uc=home">
                        <div class="title">FindIt</div>
                    </a>
                    <div class="col-lg-12 admin-bloc">
                        <h2>Administration</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br/>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="">
                                 <form class="form-horizontal" role="form" action="index.php?uc=successLogin&amp;action=addPerson" method="post">
                                <button type="submit" class="btn btn-success">
                                    <i class="glyphicon glyphicon-user"></i> Ajouter une personne
                                </button>
                            </form>
                            </a>
                            <a href="">
                                <button type="button" class="btn btn-warning">
                                    <i class="glyphicon glyphicon-pencil"></i> Modifier une personne
                                </button>
                            </a>
                            <a href="">
                                <button type="button" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-remove"></i> Supprimer une personne
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
