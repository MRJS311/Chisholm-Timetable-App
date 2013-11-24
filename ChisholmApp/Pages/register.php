<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="ChisholmApp.css" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["StudentID"].value;
var b=document.forms["reg"]["fname"].value;
var c=document.forms["reg"]["mname"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;
var f=document.forms["reg"]["dob"].value;
var g=document.forms["reg"]["password"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Middle name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("DOB must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("password must be filled out");
  return false;
  }
}
</script>

<body>
<div class="wrapper">
  <div class="header">
	<img src="chisholm-institute.jpg" alt="Chisholm Logo" width="100%" height="100%" />
  </div>
  <div class="content" align="center"><!-- TemplateBeginEditable name="contentRegion" -->
    <form name="reg" action="../Templates/code_exec.php" onsubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2">
		<div align="center">
		  <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?>	
	    </div></td>
  </tr>
  <tr>
	<td width="95"><div align="right">Student ID:</div></td>
	<td width="171"><input type="text" name="StudentID" /></td>
</tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td><div align="right">Middle Name:</div></td>
    <td><input type="text" name="mname" /></td>
  </tr>
  <tr>
    <td><div align="right">Email:</div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
  </tr>
 <tr>
	<td><div align="right">Date Of Birth:</div></td>
	<td><input type="date" name="dob" /></td>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
</form>
  <!-- TemplateEndEditable --></div>
  <div class="footer" align="center">
    <p><a href="index.php" class="link">Home</a> | <a href="tel:1800000000" class="link">Support</a></p>
  </div>
</div>
</body>
</html>
