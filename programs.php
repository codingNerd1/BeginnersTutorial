<html lang="en">
  <head>
    <title>HTML Tutorial - About</title>
    <?php include('./partials/header.php') ?>
  </head>
  <body>
    <?php include('./partials/nav.php') ?>   

    <section class="mt-7" id="newsletter">
      <?php include('./partials/newsletter.php') ?>   
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Programs</h1>
          <ul id="programs">
            <li>
              <h3>Cardio and Conditioning</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                mi augue, viverra sit amet ultricies at, vulputate id lorem.
                Nulla facilisi.
              </p>
              <p>Pricing: $1,000 - $3,000</p>
            </li>
            <li>
              <h3>Weight Training</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                mi augue, viverra sit amet ultricies at, vulputate id lorem.
                Nulla facilisi.
              </p>
              <p>Pricing: $250 per month</p>
            </li>
            <li>
              <h3>Health and Nutrition Coaching</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                mi augue, viverra sit amet ultricies at, vulputate id lorem.
                Nulla facilisi.
              </p>
              <p>Pricing: $25 per month</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Get A Quote</h3>
            <form class="quote">
              <div>
                <label>Name</label><br />
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <label>Email</label><br />
                <input type="email" placeholder="Emial Address" />
              </div>
              <div>
                <label>Message</label><br />
                <textarea placeholder="Message"></textarea>
              </div>
              <button class="button_1" type="submit">Send</button>
            </form>
          </div>
        </aside>
      </div>
    </section>

    <?php include('./partials/footer.php') ?>   
    
  </body>
</html>