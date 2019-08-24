<form class="form-controll" action="<?php echo base_url('home/check') ?>" method="post">
  <div class="form-group">
     <label for="Student card">Nick name:</label>
     <input type="text" class="form-control" id="code_st" placeholder="Enter your nick name" name="code_st" required>
   </div>
   <div class="form-group">
     <label for="Full-name">Password:</label>
     <input type="password" class="form-control" id="name" placeholder="Enter your password" name="password" required>
   </div>
   <button type="submit" class="btn btn-blue">Submit</button>
</form>
