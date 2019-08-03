<!DOCTYPE html>
<html lang="en">
  <head>    
    <title>HTML Tutorial - Home</title>
    <?php include('./partials/header.php') ?>
  </head>
  <body>
    <?php include('./partials/nav.php') ?>   

    <section id="showcase">
      <div class="container">
        <h1 style="text-transform: capitalize">
          Get In the best Shape of Your Life
        </h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
          luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem
          interdum condimentum.
        </p>
      </div>
    </section>

    <section id="newsletter">
      <?php include('./partials/newsletter.php') ?>        
    </section>

    <section id="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <img src="/assets/img/treadmill.png" />
              <h3>Cardio Training</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                mi augue, viverra sit amet ultricies
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <img src="/assets/img/weights.png" />
              <h3>Strength Training</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                mi augue, viverra sit amet ultricies
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <img src="/assets/img/health.png" />
              <h3>Health Tips</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                mi augue, viverra sit amet ultricies
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include('./partials/footer.php') ?>        
  </body>
</html>
