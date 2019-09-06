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
      <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
          <li>
            <?php if(isset($_SESSION['id'])){?>
              <a href="<?php echo base_url('home/logout') ?>">Logout</a>
            <?php }else{ ?>
              <a href="<?php echo base_url('home/login') ?>">Login</a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <nav class='container'>
    <?php echo $content ?>
    </nav>
    <footer>
      <h6>Footer</h6>
    </footer>
  </body>
</html>
