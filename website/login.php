<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="Web Design, school projects, ..... , .....">
    <meta name="author" content="Glenn Capelle">
    <title>GlennCapelle | Login</title>
    <link rel="stylesheet" href="styling/project34.css">
  </head>
  <body>
    <header>
        <div class="container">
            <div id="branding">
               <h1><span class="highlight">GlennCapelle</span> WebDesign</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Index</a></li>
                    <li><a href="aboutus.html">About Me</a></li>
		                <li class="current"><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="box">
        <h1>Log in</h1>
        <form action="includes/login.inc.php" method="POST">
            <input id="uid" type="text" name="uid" value="<?php if(isset($_GET["uid"])){echo($_GET["uid"]);}?>" placeholder="Username">
            <input id="pwd" type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit" class="button_1">Login</button>
        </form>
    </section>
    <!--<footer>
        <p>Glenn Web Design, Copyright &copy; 2019</p>
    </footer>-->
  </body>
</html>
