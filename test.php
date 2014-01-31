<?php

echo date("G");

echo "<br /><br /><br />";

echo date("D");


exit();
?>


<!DOCTYPE html>
<html>
<body>

<div id="result"></div>
<script>


if(typeof(Storage)!=="undefined")
  {
  if(localStorage.count == null){
	  var numcount = 0;
  }else{
    numcount = localStorage.count;
  }
  ++numcount;
  localStorage.count = numcount;
   
   console.log(localStorage.count);

   //alert(localStorage.count);

 // localStorage.lastname ="Smith" + localStorage.count;
  //document.getElementById("result").innerHTML="Last name: " + localStorage.lastname;
     //localStorage.clear();
  }




</script>

</body>
</html>
