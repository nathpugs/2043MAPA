<?php
// return some text within html code
echo '<b>Text added with Ajax</b>, <i>received from PHP.</i>';

// return the first JS code, which displays an Alert with the current Timestamp
echo '<script type="text/javascript">
  var tmp = '. time().';
  alert("Server Timestamp: "+ tmp);
 </script>';

// Outputs a second JS script, with another alert window 
echo '<script type="text/javascript">
  alert("The alert from the second JS script from PHP");
 </script>';
?>