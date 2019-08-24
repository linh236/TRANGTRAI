<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>QUAN LY TRANG TRAI</title>
    <link rel="stylesheet" href="  <?php echo load_css('bootstrap.min.css') ?>">
    <script type="text/javascript" src="<?php echo load_jquery('jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo load_jquery('bootstrap.min.js') ?>"></script>


  </head>
  <body>
    <header>
      <h2>header</h2>
      <?php if(isset($_SESSION['id'])){?>
      <a href="<?php echo base_url('home/logout') ?>">Logout</a>
    <?php }else{ ?>
      <a href="<?php echo base_url('home/logout') ?>">Login</a>
    <?php } ?>
    </header>
    <nav class='container'>
    <?php echo $content ?>
    </nav>
    <footer>
      <h6>Footer</h6>
    </footer>
  </body>
</html>
