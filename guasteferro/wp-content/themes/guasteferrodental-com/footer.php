<section id="contact-us">
<div class="container-fluid contact">
  <div class="row">
    <div class="container">
      <h2 class="white">Contact Us</h2>
          <div class="contact-form">
            <?php include "contact-form.php" ?>
          </div>
          <p class="copyright white">
            <?php echo get_field( 'copyright' ) ?>
          </p>
      </div>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArvCDrcvU_c-xYtD2ha6VwxKceETyIcJQ"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/google-map.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/smooth-scroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/owl.carousel.js"></script>

<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:true,
    mouseDrag:false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:3
        }
    }
})
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });
});
</script>

<script>
$("#form").submit(function(event){
  event.preventDefault();
  event.stopPropagation();

// Abort any pending request
if (typeof request != "undefined") {
    request.abort();
}
// setup some local variables
var $form = $(this);

// Let's select and cache all the fields
var $inputs = $form.find("input, select, button, textarea");

// Serialize the data in the form
var serializedData = $form.serialize();

// Let's disable the inputs for the duration of the Ajax request.
// Note: we disable elements AFTER the form data has been serialized.
// Disabled form elements will not be serialized.
$inputs.prop("disabled", true);

// Fire off the request to /form.php
request = $.ajax({
    url: "send.php",
    type: "post",
    data: serializedData,
    beforeSend: function() {
         loading= setTimeout("$('#loader').show()", 300);
    },
    complete: function(){
         clearTimeout(loading);
         $("#loader").hide();   
    },
    success: function(data) { 
        $('#msg').html(data).fadeIn('slow');
        $('#msg').html("You message has been sent successfully").fadeIn('slow') //also show a success message 
        $('#msg').delay(8000).fadeOut('slow');
    }
});

// Callback handler that will be called on failure
request.fail(function (jqXHR, textStatus, errorThrown){
    // Log the error to the console
    console.error(
        "The following error occurred: "+
        textStatus, errorThrown
    );
});

// Callback handler that will be called regardless
// if the request failed or succeeded
request.always(function () {
    // Reenable the inputs
    $inputs.prop("disabled", false);
});

// Prevent default posting of form
event.preventDefault();
})
</script>

<script type="text/javascript">
<?php 
$php_address = get_field( 'address' ); 
$php_city = get_field( 'city' ); 
$php_phone = get_field( 'phone' ); 
$php_map = get_field( 'map' );
?>
var js_address = <?php echo json_encode($php_address); ?>;
var js_city = <?php echo json_encode($php_city); ?>;
var js_phone = <?php echo json_encode($php_phone); ?>;
var js_map = <?php echo json_encode($php_map); ?>;
</script>

</body>
</html>