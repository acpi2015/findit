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
                        <h2>Login</h2>
                        <form class="form-horizontal" role="form" action="index.php?uc=login&action=isValid" method="post">
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="btn-search">
                                <button type="submit" class="btn btn-primary btn-lg">Connexion</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
