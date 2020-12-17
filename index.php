<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home - GeorgeDzigo</title>
      
      <!-- Styling -->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/reset/reset.css">
            
      <!-- favicon -->
            <link rel="shortcut icon" href="favicon/fav.png" type="image/x-icon">
      
      <!-- Font -->
            
            <!-- Logo -->
                  <link rel="preconnect" href="https://fonts.gstatic.com">
                  <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
            
                  <!-- For Web content -->
                  <link rel="preconnect" href="https://fonts.gstatic.com">
                  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<!-- Libraries CSS -->
   <!-- WoW JS -->
      <link rel="stylesheet" href="libraries/wow/css/libs/animate.css">


</head>
<body>
      <!-- Header -->
            
            <header class="header">
                  <div class="logo">
                        <h1 style="font-family: 'Langar', cursive; font-size: 160%" class="wow fadeIn">GeorgeDzigo</h1>
                  </div>
                  <nav class="nav">
                        <ul class="nav-ul">
                              <li class="nav-ul-li"><a href="" class="nav-ul-li-a wow fadeIn">Home</a></li>
                              <li class="nav-ul-li"><a href="" class="nav-ul-li-a wow fadeIn">Our Work</a></li>
                              <li class="nav-ul-li"><a href="" class="nav-ul-li-a wow fadeIn">Services</a></li>
                              <li class="nav-ul-li"><a href="" class="nav-ul-li-a wow fadeIn">About Us</a></li>
                              <li class="nav-ul-li"><a href="" class="nav-ul-li-a wow fadeIn">Contact</a></li>
                        </ul>
                  </nav>
            </header>

      <!-- End Header -->
      
      <!-- Entry Section -->
            <section class="entry">
              <!-- Left -->
                  <div class='left-side-text-container'>
                        <pre class="left-side-pre">
                              <span class="left-a">MARKETING/</span><span class="left-b">WEB DESIGNER/</span>
                              <span class="left-c">BRANDING</span>
                              <span class="left-d">Tailored Solutions To Hit Your Goals</span> 
                        </pre>
                  </div>

              <!-- Right -->
                  <div class="right-side-text-container">
                        <pre class="right-side-pre">
                                      <span class="right-a">EUROPE'S</span>
                           <span class="right-b">MOST AWARDED AGENCY.</span>
                                          <div id="slider" class=""></div>
                        </pre>
                  </div>

            </section>
      <!-- End Entry Section -->

      <!-- Sponsor Section -->
            <section class="sponsor-section">
                  <?php
                  $arr = [
                        "https://www.kobedigital.com/wp-content/uploads/2017/09/press-logo-entrepreneur.png",
                        "https://www.kobedigital.com/wp-content/uploads/2017/09/press-logo-forbes.png",
                        "https://www.kobedigital.com/wp-content/uploads/2017/09/press-logo-techco.png",
                        "https://www.kobedigital.com/wp-content/uploads/2017/09/press-logo-huffington-post.png"
                  ];
                  ?>
                  <center>
                  <?php foreach($arr as $v):?>
                        <img src="<?php echo $v?>" width="150px" height="50px" class="sponsor-section-imgs">
                        
                  <?php endforeach?>
                  </center>
            </section>
      <!-- End Sponsor Section -->

      <section class="pb-section">
      <center>
            <div class="pb-section-ps-wrapper">
            <p class="pb-section-p">GeorgeDzigo CREATES AND MANAGES PROGRAMMATIC AND DATA-DRIVEN CAMPAIGNS TO HELP YOU REACH THE RIGHT</p>
            <p class="pb-section-p">CUSTOMERS, TELL THE RIGHT STORY, AND GET THE RIGHT RESULTS.</p>
            </div>
            <p href="#" class="pb-section-about-us-btn">About Us</p>
      </center>
      </section>
<!-- Libraries JS -->
   <!-- WoW JS -->
      <script src="libraries/wow/dist/wow.min.js"></script>
      <script>
            new WOW().init();
      </script>   
    <!-- Slider JS -->
      <script src="js/slider.js"></script>

</body>
</html>