<?php
  require 'includes/dbh.inc.php';

session_start();

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="Web Design, school projects, ..... , .....">
    <meta name="author" content="Glenn Capelle">
    <title>GlennCapelle | Measurements</title>
    <link rel="stylesheet" href="h.css">
  </head>
  <body>
    <header>
        <div class="container">
            <div id="branding">
               <h1><span class="highlight">GlennCapelle</span> WebDesign</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index1.html">Index</a></li>
                    <li><a href="aboutus2.html">About Me</a></li>
                    <li class="current"><a href="Measurements.php">Measurements</a></li>
                    <li><a href="includes/logout.inc.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
      <div id="data">
        <br>
        <br>
        <?php
          //include 'login.inc.php';
          //$sql = "SELECT * FROM website WHERE USERNAME=" .$_SESSION['userUid'];

          $sql = "SELECT Naam, Discription, Afstand FROM datascience";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Name:   " . $row["Naam"]. "<br>Discription:   " . $row["Discription"]. "<br>Distance:   " . $row["Afstand"]. "<br><br><br>";
            }
          } else {
              echo "0 results";
          }
          $conn->close();
        ?>
        <br>
        <br>
      </div>
    </section>
    <br>
    <br>
    <footer>
        <p>GlennCapelle, Copyright &copy; 2020</p>
    </footer>
  </body>
</html>
