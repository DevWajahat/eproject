<!-- slider starts  -->

<section id="home" class="iq-main-slider p-0">
    <div id="home-slider" class="slider m-0 p-0">
    <?php
      // include 'conn.php';
      $query = mysqli_query($conn, "SELECT * FROM `movies` LIMIT 3;");
      while ($fetch = mysqli_fetch_array($query)) {
        $rating = $fetch['rating']; // Assuming the rating is stored in a column named 'rating'
        $fullStars = floor($rating); // Number of full stars
        $halfStar = ($rating - $fullStars >= 0.5) ? true : false;
    ?>
      <div class="slide slick-bg" style="background-image: url('<?php echo $fetch['poster_url']; ?>');">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h-100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <img src="images/logo.png" class="c-logo" alt="" />
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">
                  <?php echo $fetch['title']; ?>
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul
                      class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <?php
    for ($i = 0; $i < $fullStars; $i++) {
      echo '<li><i class="fa fa-star"></i></li>';
    }
    if ($halfStar) {
      echo '<li><i class="fa fa-star-half"></i></li>';
    }
    for ($i = 0; $i < (5 - $fullStars - ($halfStar ? 1 : 0)); $i++) {
      echo '<li><i class="fa fa-star-o"></i></li>'; // Empty star for the remaining
    }
  ?>
                    </ul>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2"><?php echo $fetch['GP_rating']; ?></span>
                    <span class="text-light ml-3"><?php echo $fetch['runtime'] ?></span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                <?php echo $fetch['description']; ?>
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                    Starring : <span class="text-body"><?php echo $fetch['starring']; ?></span>
                  </div>
                  <div class="text-primary title genres">
                    Genres : <span class="text-body"><?php echo $fetch['Genres']; ?></span>
                  </div>
                  <div class="text-primary title tag">
                    Tags : <span class="text-body"><?php echo $fetch['Tags']; ?></span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="#" class="btn btn-hover iq-button" style="border-radius:5px !important;"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 87.93" width="32" height="32">
  <defs>
    <style>.cls-1{fill:#fff; fill-rule:evenodd;}</style>
  </defs>
  <title>movie-ticket</title>
  <path class="cls-1" d="M3.2,34.79h97.89l1.53,1.34L102,38.94h0a.09.09,0,0,0,0,.05.23.23,0,0,0,.23.23.27.27,0,0,0,.12,0l2.48-1.48,2.47,1.47a.17.17,0,0,0,.12,0,.23.23,0,0,0,.23-.23v-.05L107,36.12l1.53-1.33h11.18a3.22,3.22,0,0,1,3.2,3.21V51.24a10.42,10.42,0,0,0,0,20.25V84.73a3.21,3.21,0,0,1-3.2,3.2H107.17l-.2-.87,2.18-1.9h0a.25.25,0,0,0,.08-.18.23.23,0,0,0-.21-.22l-2.88-.26L105,81.85a.23.23,0,0,0-.21-.14.23.23,0,0,0-.22.14l-1.13,2.65-2.87.25a.23.23,0,0,0-.21.23.24.24,0,0,0,.07.18l2.18,1.9-.2.87H3.2A3.21,3.21,0,0,1,0,84.73V71.56a10.42,10.42,0,0,0,8.32-10.2A10.42,10.42,0,0,0,0,51.16V38a3.21,3.21,0,0,1,3.2-3.21Zm27.47,27.9L31,65.94a8.14,8.14,0,0,1-3.05.5A9.11,9.11,0,0,1,25,66.05a3.6,3.6,0,0,1-1.75-1.21,4.82,4.82,0,0,1-.89-2,12.68,12.68,0,0,1-.25-2.76,12.94,12.94,0,0,1,.25-2.78,4.76,4.76,0,0,1,.89-2c.82-1.07,2.34-1.6,4.54-1.6a11.63,11.63,0,0,1,1.73.14,6.22,6.22,0,0,1,1.48.36l-.58,3a11,11,0,0,0-2.3-.27,3.73,3.73,0,0,0-1.45.19.78.78,0,0,0-.41.77V63a7.86,7.86,0,0,0,1.53.15,8.48,8.48,0,0,0,2.92-.46Zm2.08,3.46V54.07h3.87V66.15Zm13.33,0-3-4.29a2.09,2.09,0,0,1-.19-.93h-.08v5.22H39V54.07h3.63l3,4.29a2,2,0,0,1,.19.93h.08V54.07h3.87V66.15Zm13.74-4.56H56v1.47h4.74v3.09h-8.6V54.07h8.5l-.48,3.09H56v1.62h3.87v2.81Zm6.51,4.56h-4L63,54.07h5l1.51,6.14h.13l1.51-6.14h5L77,66.15H73l-.23-5.86h-.14l-1.47,5.86h-3l-1.49-5.86h-.12l-.23,5.86Zm15.44,0H77.69l3.13-12.08h6l3.13,12.08H85.85l-.45-1.91H82.21l-.44,1.91Zm1.93-8.37-.79,3.38h1.78l-.78-3.38ZM20.29.13l99.15,29.73A3.25,3.25,0,0,1,121.08,31H74L32.89,17.39A3.7,3.7,0,0,0,28.28,20L25.22,31H16.06A10.41,10.41,0,0,0,12.81,15L16.34,2.35A3.2,3.2,0,0,1,20.29.13ZM105,64.87l1.13,2.65,2.88.26a.23.23,0,0,1,.13.4h0L107,70.08l.65,2.81v0a.23.23,0,0,1-.23.24.25.25,0,0,1-.12,0l-2.47-1.48-2.48,1.48a.28.28,0,0,1-.12,0A.23.23,0,0,1,102,73a.13.13,0,0,1,0-.06h0l.64-2.81-2.18-1.9a.22.22,0,0,1-.07-.17.23.23,0,0,1,.21-.23l2.87-.26,1.13-2.65a.23.23,0,0,1,.22-.14.23.23,0,0,1,.21.14Zm0-17,1.13,2.65,2.88.26a.23.23,0,0,1,.21.23.21.21,0,0,1-.08.17h0L107,53.1l.65,2.81V56a.23.23,0,0,1-.23.23.25.25,0,0,1-.12,0l-2.47-1.48-2.48,1.49-.12,0A.23.23,0,0,1,102,56a.07.07,0,0,1,0,0h0l.64-2.82-2.18-1.9a.21.21,0,0,1-.07-.17.23.23,0,0,1,.21-.23l2.87-.26,1.13-2.65a.25.25,0,0,1,.22-.14.24.24,0,0,1,.21.14Zm-85-.81h71.8a3.75,3.75,0,0,1,3.74,3.73V69.93a3.76,3.76,0,0,1-3.74,3.74H20a3.75,3.75,0,0,1-3.73-3.74V50.81A3.74,3.74,0,0,1,20,47.08Z"/>
</svg>
 Book Now</a>
                  <a href="#" class="btn btn-link">More Details</a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
              <a href="video/trailer.mp4" class="video-open playbtn">
                <img src="images/play.png" class="play" alt="" />
                <span class="w-trailor"><a href="<?php echo $fetch['trailer_url']; ?>">Watch Trailer</a></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php
      }
    ?>
    </div>
</section>
<!-- slider ends -->