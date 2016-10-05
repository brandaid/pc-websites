<div class="container-fluid head"></div>

<section id="about-us">
<div class="container">
  <div class="row">
    <div class="col-md-4 doctor-avatar">
      <img src="<?php echo get_field( 'doctor_image' ) ?>" alt="dr-karlene-guasteferro">
      <p class="phone2"><?php echo get_field( 'phone' ) ?></p>
    </div>
    <div class="col-md-8">
      <h1 class="blue"><?php echo get_field( 'title' ) ?></h1>
      <p><?php echo get_field( 'main_text' ) ?></p>
    </div>
  </div>
</div>
</section>

<section id="our-services">
<div class="container-fluid services">
  <div class="row">
    <div class="container">
      <h2>Our Services</h2>
      <div class="row">
        
        <div class="owl-carousel">
          <div class="col-md-4">
            <div class="item">
              <div class="service">
              <img src="<?php bloginfo('template_directory');?>/images/service-teledintistry.png" alt="service-teledentistry">
                <h3><?php echo get_field( 'service_1_title' ) ?></h3>
                <p><?php echo get_field( 'service_1_description' ) ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="service">
                <img src="<?php bloginfo('template_directory');?>/images/service-moderate-cases.png" alt="service-mild-to-moderate-cases">
                <h3><?php echo get_field( 'service_2_title' ) ?></h3>
                <p><?php echo get_field( 'service_2_description' ) ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="service">
                <img src="<?php bloginfo('template_directory');?>/images/service-access-to-care.png" alt="icon-increasing-access-to-care">
                <h3><?php echo get_field( 'service_3_title' ) ?></h3>
                <p><?php echo get_field( 'service_3_description' ) ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</section>

<section id="locate-us">
<div class="container-fluid locate">
  <div class="row">
    <div class="container">
      <div class="row">
          <h2>Locate Us</h2>
          <div class="col-md-12">
            <div id="map"></div>     
              <button class="button center"><a class="white map" href="https://www.google.com.ar/maps/place/701+Broadway+%23130,+Nashville,+TN+37203,+USA/@36.1587604,-86.7834724,17z/data=!3m1!4b1!4m5!3m4!1s0x8864665f66353f43:0x394b6c3a21431830!8m2!3d36.1587561!4d-86.7812837?hl=en" target="_blank">Open in Google Maps</a></button>
          </div>
        </div>
    </div>
  </div>
</div>
</section>