
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">

</head>
<body>
<div id="show"></div>
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	setInterval(function(){
		$('#show').load('monitor.php')
},3000);
})
;
</script>


</body>
</html>