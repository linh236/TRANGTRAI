<?php  require load_error("alert");  ?>
<form class="form-controll" action="<?php echo base_url('home/process_login') ?>" method="post">
  <div class="form-group">
     <label for="tel">Telephone:</label>
     <input type="text" class="form-control" id="tel" placeholder="Enter your nick name" name="tel" required>
   </div>
   <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" class="form-control" id="name" placeholder="Enter your password" name="password" required>
   </div>
   <div class="form-group form-check">
     <label class="form-check-label" for="remember">Remember me</label>
     <input type="checkbox" class="form-check-input" id="remember" name="remember" value="1">
 </div>
   <button type="submit" class="btn btn-blue">Submit</button>
</form>
<h5>Do you hava a account ? </h5><a href="<?php echo base_url("home/register") ?>">Register</a>
