<form class="form-controll" action="<?php echo base_url('home/login_pass')?>" method="post">
   <div class="form-group">
     <label for="Password">Password</label>
     <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password" required>
   </div>
   <button type="submit" class="btn btn-blue">Submit</button>
</form>
<h2><?php echo isset($password['password'])?$password['password']:'' ?></h2>
