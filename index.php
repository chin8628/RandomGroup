<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Random Group</title>
</head>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/stylesheet.css">
<body>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30335194-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div class="credit">
	<a href="http://portfolio.ispace.in.th">Develop by Cloudian Studio </a>
</div>
<div class="hero">
<div class="hero-unit">
<h1>Random Group My Class</h1><br><br>
<h2>
<form action="index.php" method="post">
	<div class="controls">
		Member in Your Room&nbsp;:&nbsp;<input type="text" name="member" /><br>
	</div>
    <div class="controls">
		Number Group&nbsp;:&nbsp;<input type="text" name="group" /><br>
    </div>
    <div class="controls">
		<input type="submit" class="btn btn-primary" value="Random"></input>
    	<input name="Reset" type="reset" class="btn btn-danger" value="Reset"></input>
	</div>

</form>
</h2>
<br>
<h3><? include 'random.php'; ?></h3>
</div>
</div>

</body>
</html>