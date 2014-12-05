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
        <div class="col-lg-12">
          <div class="form-container">
            <form action="" class="form">
              <div class="step-container gender">
                <div class="row step-item">
                  <label for="sexe">Sexe</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice"><img src="img/icon-female.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-male.png" alt=""></button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
              <div class="step-container growth">
                <div class="row step-item">
                  <label for="growth">Growth</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice"><img src="img/icon-children.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-adults.png" alt=""></button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
              <div class="step-container skin-color">
                <div class="row step-item">
                  <label for="type">Type</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice color-item european">color 1</button>
                    <button type="button" class="btn btn-default choice color-item asian">color 2</button>
                    <button type="button" class="btn btn-default choice color-item indian">color 3</button>
                    <button type="button" class="btn btn-default choice color-item african">color 4</button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
              <div class="step-container hair-color">
                <div class="row step-item">
                  <label for="hair-color">Hair color</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice color-item blond">hair-color 1</button>
                    <button type="button" class="btn btn-default choice color-item brown">hair-color 2</button>
                    <button type="button" class="btn btn-default choice color-item black">hair-color 3</button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>

                </div>
              </div>
              <div class="step-container continent">
                <div class="row step-item">
                  <label for="continent">Continent</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice"><img src="img/icon-north-america.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-south-america.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-africa.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-oceania.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-asia.png" alt=""></button>
                    <button type="button" class="btn btn-default choice">€</button> <!-- <img src="img/icon-europa.png" alt=""> -->
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
              <div class="step-container nationality">
                <div class="row step-item">
                  <label for="country">Country</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice">nationality 1</button>
                    <button type="button" class="btn btn-default choice">nationality 2</button>
                    <button type="button" class="btn btn-default choice">nationality 3</button>
                    <button type="button" class="btn btn-default choice">nationality 4</button>
                    <button type="button" class="btn btn-default choice">nationality 5</button>
                    <button type="button" class="btn btn-default choice">nationality 6</button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
              <!-- <div class="step-container tattoo">
                <div class="row step-item">
                  <label for="tatoo">Tattoo</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice">yes</button>
                    <button type="button" class="btn btn-default choice">no</button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div> -->
              <div class="step-container size">
                <div class="row step-item">
                  <label for="size">Size</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice">1m</button>
                    <button type="button" class="btn btn-default choice">1,25m</button>
                    <button type="button" class="btn btn-default choice">1,5m</button>
                    <button type="button" class="btn btn-default choice">1,75m</button>
                    <button type="button" class="btn btn-default choice">2m</button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
              <div class="step-container corpulence">
                <div class="row step-item">
                  <label for="corpulence">Corpulence</label>
                  <div class="step-choice">
                    <button type="button" class="btn btn-default choice"><img src="img/icon-skinny.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-medium.png" alt=""></button>
                    <button type="button" class="btn btn-default choice"><img src="img/icon-obesity.png" alt=""></button>
                  </div>
                  <div class="step-action col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-link">Skip</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
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
