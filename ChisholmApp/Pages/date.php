<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Date</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="ChisholmApp.css" rel="stylesheet" type="text/css" />
</head>

<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<script>
	$(function() {
	$( "#datepicker" ).datepicker();
	});
</script>

<body>
<div class="wrapper">
  <div class="header">
        <img src="chisholm-institute.jpg" alt="Chisholm Logo" width="100%" height="100%" />
  </div>
  <div class="content">
  <!-- TemplateBeginEditable name="contentRegion" -->
    <p align="center">Date</p>
        <table width="200" border="0" align="center">
                   <table width="200" border="0">
                    <tr>
                      <td width="78">Date:</td>
                      <td width="106"><input type="text" id="datepicker"></td>
                    </tr>
                    <tr>
                      <td>Time:</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Room:</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Campus:</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Subject:</td>
                      <td>&nbsp;</td>
                    </tr>
                   </table>
  <!-- TemplateEndEditable -->
  </div>
  <div class="footer" align="center">
    <p><a href="home.php" class="link">Home</a> | <a href="tel:1800000000" class="link">Support</a></p>
  </div>
</div>
</body>
</html>
