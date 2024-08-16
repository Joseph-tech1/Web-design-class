<html>
    <head>
      <?php
      include("css.html");
      ?>
        <title>HOME | HIDALGO INVESTMENTS LTD</title>
        <style>
           .card-container {
            display: flex;
            flex-wrap: wrap; /* Allows cards to wrap onto the next line if there's not enough space */
            gap: 10px; /* Space between cards */
            justify-content: center; /* Center cards horizontally */
            padding: 16px;
        }
          .card {
              position: relative;
              overflow: hidden;
              border-radius: 8px;
              max-width: 180px;
              margin: 16px;
              box-shadow: 0 2px 4px rgba(0,0,0,0.1);
              color: white;
          }
          .card img {
              width: 100%;
              height: 100%;
          }
          .card .overlay {
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background: rgba(0, 0, 0, 0.5);
              display: flex;
              align-items: center;
              justify-content: center;
              opacity: 0;
              transition: opacity 0.3s ease;
              
          }
          .card:hover .overlay {
              opacity: 1;
          }
          .overlay h2 {
              margin: 0;
              font-size: 24px;
          }

        .hero-section {
        background: url('images/faaa.jpeg') no-repeat center center;
        background-size: cover;
        color: white;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .hero-text {
        text-align: center;
        }
        html {
        scroll-behavior: smooth;
        } 
        

      </style>
    </head>
    <body >
      <div class="container-fluid">
      <?php
           include("nav.html");
           ?>
        <div class="row bg-dark"> 
        <div class="hero-section">
        <div class="hero-text">
            <h1>Welcome to Hidalgo Investments Ltd</h1>
            <p>Your success starts here</p>
            <a href="about.php" class="btn btn-primary">Learn More</a>
        </div>
    </div>         
        </div>
      </head>
      <body>
    </div>
    <div class="container">
    <p >
    <p style= "font-weight: bold; color: blue; font-size: 20; text-align: center;">ABOUT US:</p>
        <p>Hidalgo Investments Ltd is a new and young company with its head office in Wakiso and a network of business<br/>partners, distributers, dealers and supplies all across the country.</p>
        <p>Covering a broad range of products in its segment, we are proud to have very good product portfolios with some unique and innovative products to add strength to its catalogue.</p>
        <p>Within a short span of time, We have achieved great recognition in the market for the quality, differentiation and the prices offered in our products. We stand with a strong belief that customer satisfaction and economic growth have a never ending relationship and the same will help us archieve our target to become the biggest investment brand in Uganda.</p>
        <p>Hidalgo Investmets Ltd has met all legal requirements and is certified to provide the various service including and not limited to General supplies, Construction and Estates management, ICT and Bio-tech products.</p><br><br>
      </p><br>
      </div>
      <p style= "font-weight: bold; color: blue; font-size: 20; text-align:center;">OUR CATEGORY:</p>
      <div class="card-container">
            <div class="card" id="card6">
                <img src="images/brrr.jpeg" alt="Card Image">
                <div class="overlay">
                    <h2>Branding</h2>
                </div>
            </div>
            
            <div class="card" id="card1">
                  <img src="images/equip.jpg" alt="Card Image">
                  <div class="overlay">
                      <h2>Biomedicals</h2>
                  </div>
            </div>

            <div class="card" id="card2">
                <img src="images/school.jpeg" alt="Card Image">
                <div class="overlay">
                    <h2>Laboratories</h2>
                </div>
            </div>

            <div class="card" id="card3"> 
                <img src="images/fire.jpeg" alt="Card Image">
                <div class="overlay">
                    <h2>Fire Systems</h2>
                </div>
            </div>

            <div class="card" id="card4">
                <img src="images/repair.jpeg" alt="Card Image">
                <div class="overlay">
                    <h2>Equipment</h2>
              </div>  
            </div>

            <div class="card" id="card5">
                <img src="images/stat.jpg" alt="Card Image">
                <div class="overlay">
                    <h2>Stationery</h2>
                </div>
            </div>

            <div class="card" id="card7">
              <a href="ourproducts.php#card7">
              <img src="images/comp.jpg" alt="Card Image">
              </a>
                <div class="overlay">
                    <h2>Computers</h2>
                </div>
            </div>
    </div>

          <?php
           include("footer.html");
          ?>
          <?php
          include("js.html");
          ?>
</html>
