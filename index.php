<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <title>Calculating the volume of a sphere</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
  </head>
  <body>

    <?php
      echo "<h1>Calculating the volume of a sphere</h1>";
      echo "<br>";
    ?>
    <form action="./results.php" method="post" target="results">
      <label for="lblRadius">Radius:</label>
      <input type="number" id="radius" placeholder="Enter the radius (cm)" name="radius"><br><br>
      <input type="submit" value="Calculate Volume">
    </form>
    <?php
    echo "<br>"
    ?>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        The volume of this sphere is:
      </iframe>
  </body>
</html>
