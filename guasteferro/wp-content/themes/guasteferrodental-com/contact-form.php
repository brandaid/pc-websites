<form action="" method="POST" id="form" class="form">
<div class="row">
  <div class="col-md-6">
    <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
  </div>
  <div class="col-md-6">
    <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <input type="email" name="email" id="email" placeholder="Email" class="input-email" required>
  </div>
  <div class="col-md-6">
    <input type="text" name="phone" id="phone" placeholder="Phone Number" class="input-phone" required>
  </div>
</div>
  <input class="button" type="submit" value="submit">
  <div id="msg" style="display:none"></div>
  <div id="loader" style="display:none; margin-top:10px">
    <img src="<?php bloginfo('template_directory');?>/images/ajax-loader.gif">
  </div>
</form>