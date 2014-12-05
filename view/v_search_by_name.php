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

            <div class="container-fluid">
                <div class="row">
                    <a href="index.php?uc=home">
                        <div class="title">FindIt</div>
                    </a>
                    <div class="col-lg-12">
                        <h2>Rechercher une personne par nom/prénom</h2>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-4 control-label">Rechercher par nom</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Nom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-4 control-label">Rechercher par prénom</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Prénom">
                                </div>
                            </div>
                            <div class="btn-search">
                                <button type="button" class="btn btn-primary btn-lg">Rechercher</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        <form action="c_form_search_by_name.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" />
            <br/>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" />
            <br/>
            <input type="submit" value="Search" name="submit"/>
        </form>

    </div>
    <!-- /#wrapper -->
