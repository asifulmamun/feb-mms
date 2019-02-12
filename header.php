<?php 
  /*
    Connection with config file.
  */
  // declace page name if any page is not exist page Name
  if (empty($pageName)) {
    $pageName = "header.php";
  }
  // declace framework name if any page is not exist framework name
  if (empty($framework)) {
    $framework = "none";
  }

  include ('function/feb_config.php'); // configuraton file
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <?php if ($framework == "materialize"): ?>
      <!--materialize Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- materialize Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <?php endif ?>
    
    <!-- theme css -->
    <link rel="stylesheet" type="text/css" href="<?php $feb_install_dir->path(); ?>/assets/css/user.css">
    <title>February Member Management System</title>
  </head>
  <body>
    <section id="main_header">
      <!-- Navbar-->
      <nav>
        <div class="container">
          <div class="nav-wrapper">
            <a href="<?php $feb_install_dir->path(); ?>" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="waves-effect waves-light sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="<?php echo $root_web_install ?>">Home</a></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Mobile</a></li>
              <li><a class="dropdown-trigger" data-target="dropdown1" href="sass.html">Sass</a></li>
            </ul>
          </div>
        </div> <!-- .container -->
      </nav>
    </section>
    <!-- Dropdown-1 -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul> <!-- #dropdown1 -->

    <!-- Sidebar or Mobile Menu -->
    <ul class="sidenav" id="mobile-demo">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      <li><a href="mobile.html">Mobile</a></li>
    </ul>