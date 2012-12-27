<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); 
header('Pragma: no-cache'); 
header('Expires: 0'); 
?>
<html>
<head>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
</head>
<body onload="JavaScript:timedRefresh(5000);">
Dies ist ein Minimalbeispiel!
<img src="images/test1.jpg?<?php echo rand(0, 5000); echo rand(0, 5000000000); ?>">
</html>
