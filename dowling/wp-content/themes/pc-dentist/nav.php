<?php
$phonehref = get_field( 'phone' );
$matches = intval(preg_replace('/[^0-9]+/', '', $phonehref), 10);
?>

<div class="container header">

<div class="phone-mobile">
  <a href="tel:<?php echo $matches?>" >
    <img src="<?php bloginfo('template_directory');?>/images/icon-phone-1.png">
  </a>
</div>

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top"></span>
        <span class="icon-bar middle"></span>
        <span class="icon-bar bottom"></span>
      </button>
      
    </div>
    <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory');?>/images/logo.png"></a>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#our-services">Our Services</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#contact-us">Contact Us</a></li>
        <li><a href="tel:8003976247" class="blue phone1"><?php echo get_field( 'phone' ) ?></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</div>