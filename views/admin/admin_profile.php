<?php
		//include_once('views/includes/header.php');
    //include_once('views/admin/admin_session.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Elective Manager</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../views/design/css/material.css">
    <link rel="stylesheet" href="../views/design/css/style.css">
    </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><a href="/" style="text-decoration: none; color: black">Welcome <?php echo $login_session; ?></a></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a href="/admin/logout"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">Logout</button></a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="/about">About</a>
      <a class="mdl-navigation__link" href="/contact">Contact</a>
      <a class="mdl-navigation__link" href="/admin">Admin Interface</a>
      <a class="mdl-navigation__link" href="/department">Department Interface</a>
      <a class="mdl-navigation__link" href="/student">Student Interface</a>
      <a class="mdl-navigation__link mdl-button" href="/admin/logout"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">Logout</button></a>
    </nav>
  </div>
     
  <main class="mdl-layout__content mdl-color--grey-100">
    <div class="page-content">
    <!-- Your content goes here -->

<!-- Wide card with share menu button -->

<div class="mdl-grid">

<div class="mdl-cell mdl-cell--6-col">
<div class="demo-card-wide1 mdl-card mdl-shadow--4dp">
  <div class="mdl-card__supporting-text">
    <h4>
      Registered Departments
    </h4>
  </div>
    <table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Department</th>
      <th>Electives</th>
      <th>Timestamp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Department 1</td>
      <td>2</td>
      <td>10:59 27/15/2017</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Department 1</td>
      <td>2</td>
      <td>10:59 27/15/2017</td>
    </tr>    
  </tbody>
</table>
</div>
</div>


<div class="mdl-cell mdl-cell--6-col">
<div class="demo-card-wide1 mdl-card mdl-shadow--4dp">
  <div class="mdl-card__supporting-text">
    <h4>
      Published Electives
    </h4>
  </div>
  <table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Department</th>
      <th>Electives</th>
      <th>Timestamp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Department 1</td>
      <td>csd-2</td>
      <td>10:59 27/15/2017</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Department 1</td>
      <td>med-2</td>
      <td>10:59 27/15/2017</td>
    </tr>    
  </tbody>
</table>
</div>
</div>
</div>




<div class="mdl-grid">  		

<div class="mdl-cell mdl-cell--6-col">
<div class="demo-card-wide1 mdl-card mdl-shadow--4dp">
  <div class="mdl-card__supporting-text">
    <h4>
      Publish Confirmation pending
    </h4>
  </div>
  <table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Department</th>
      <th>Elective</th>
      <th>Confirmation request</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Department 1</td>
      <td>csd-2</td>
      <td>10:59 27/15/2017</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Department 1</td>
      <td>med-2</td>
      <td>10:59 27/15/2017</td>
    </tr>    
  </tbody>
</table>
</div>
</div>

<div id="tokens" class="mdl-cell mdl-cell--6-col">
  <div class="demo-card-wide1 mdl-card mdl-shadow--4dp">
  <div class="mdl-card__supporting-text">
  <h4>Open registration for Departments & Super Admins</h4>
  </div>
  <?php
        
        include_once('dbconnect.php');

      if(!empty($_POST['allowdept']))  {  
        //generating the registration tokens
        function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
        }
        $superadmin = generateRandomString();
        $superadmin = md5($superadmin);
        $deptuser = generateRandomString();
        $deptuser = md5($deptuser);
        
        echo "Super Admin Token - <b><code>$superadmin</code></b><br>";
        echo "Department Token - <b><code>$deptuser</code></b><br>";

      $deptreg = Database::deptregistration($superadmin,$deptuser);
    }
  ?>
    <form class="admlog" action="/admin/profile" method="post">
      <!-- Raised button with ripple -->
       <button name="allowdept" value="allowdept" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
            Generate the registration tokens
       </button>
    </form>
    <h3>OR</h3>

<?php

      if(!empty($_POST['allowdept1']))  {  
        
        $deptreg = Database::deptregistrationprint();
    }
  ?>

    <form class="admlog1" action="/admin/profile" method="post">
      <!-- Raised button with ripple -->
       <button name="allowdept1" value="allowdept1" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">
            Fetch the already generated tokens
       </button>
    </form>
      
</div>
</div>
  		

		</div>
  </div>
  </main>
</div>

    <script src="../views/design/js/material.min.js"></script>
  </body>
</html>