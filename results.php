<?php
  $Radius = $_POST['radius'];
  $volume = $Radius**3*pi()*(4/3);
?>
<h3>Result:</h3>
The volume of this sphere is <?php echo$volume?> cm<sup>2</sup>