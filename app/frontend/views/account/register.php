<?php if(isset($mes)){?>
  <script type="text/javascript">
    alert("<?php echo $mes ?>")
  </script>
<?php } ?>
<form class="form-controll" action="<?php echo base_url('home/process_register') ?>" method="post">
  <div class="form-group">
     <label for="Student card">Telephone:</label>
     <input type="text" class="form-control" id="tel" placeholder="Enter your telephone" name="tel" required>
  </div>
  <div class="form-group">
     <label for="Student card">Full-name:</label>
     <input type="text" class="form-control" id="code_st" placeholder="Enter your full-name" name="fullname" required>
   </div>
   <div class="form-group">
     <label for="Full-name">Password:</label>
     <input type="password" class="form-control" id="name" placeholder="Enter your password" name="password" required>
   </div>
   <div class="form-group">
     <label for="Full-name">Re-Password:</label>
     <input type="password" class="form-control" id="name" placeholder="Enter your re-password" name="repassword" required>
   </div>
   <button type="submit" class="btn btn-blue">Submit</button>
</form>
