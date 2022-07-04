
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="Images\clogo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Anton|Black+Han+Sans|Fjalla+One|Lobster|Nunito|Roboto|Rubik" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\Intern\font-mfizz-2.4.1\font-mfizz.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: white;
  
}

.navbar {
  overflow: hidden;
  background-color: black; 
}

.navbar a {
  float: left;
  font-size: 28px;
  color: #ffad33;
  text-align: center;
  font-family: sans-serif;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 28px;  
  border: none;
  outline: none;
  color: #ffad33;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: #107595;
}

.subnav-content {
  display: none;
  position: absolute;
  background-color: #107595;
}

.subnav-content a {

  color: #ffad33;
  text-decoration: none;
  font-size: 18px;
  padding: 3px;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}

.formm
{
  width: 800px;
  height: 1000px;
 border-style:ridge;
  background-color:#ccc1ff;
  box-shadow:0px 0px 2px #a2a8d3;
  margin-top:50px;
}


#data_9,input[type=text],input[type=email]{
border-radius: 25px;
  background-color:light;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;  
  width: 50%;
}
#b1 {
  border-radius: 25px;
  background-color:blue;
  color: white;
  padding: 7px 14px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  font-size: 1.875em
}
.search_categories{
  font-size: 13px;
  padding: 10px 8px 10px 14px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 25px;
  overflow: hidden;
  position: relative;
  width:100%
}

</style>
</head>

<body>

<div class="navbar">
  <img style="margin-right: 30px;" src="Images\clogo.jpg" align= "left" width="170px" height="90px"><br>
      <a href="home.html"><i class="fa fa-home">&nbsp;</i>Home</a>

  <div class="subnav">
    <button class="subnavbtn"><i class="fas fa-user-tie"></i>&nbsp;Careers&nbsp;<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content"style="width:200px;">
      <a href="software_developer.html">Software Developer</a>
  <a href="designer.html">Software Designer</a>
  <a href="content.html">Content Writer</a>
  <a href="developer_jobs.html">Web Developer</a>
  <a href="marketing.html">Marketing Jobs</a>
  <a href="internship.html">Internships</a>
  </div>
  </div>

  <div class="subnav">
    <button class="subnavbtn"><i class="fas fa-cog"></i>&nbsp;Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content" style="width:310px;">
    <a href="HMS.html">Hospital Management Software</a><br>
  <a href="lab.html">Lab Management Software</a><br>
  <a href="pharma.html">Pharma Management Software</a><br>
  <a href="web.html">Web based Application</a><br>
  <a href="inventory.html">Inventory Managent Software</a><br>
  <a href="Library.html">Library Management Software</a><br>
  <a href="payroll.html">Payroll Software</a><br>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn"><i class="fas fa-user-graduate"></i>&nbsp;Education <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content" style="width:300px;">
      <a href="prog.html">Programming Courses</a><br>
  <a href="web_development.html">Web Development Courses</a><br>
  <a href="Photo.html">Photography Courses</a><br>
  <a href="Database.html">Database Courses</a><br>
  <a href="marketing_course.html">Marketing Courses</a><br>
  <a href="Security.html">Ethical Hacking and Security</a>
    </div>
  </div>
  
  <a href="about.html"><i class="fa fa-street-view">&nbsp;</i>About us</a>
  <a href="help.html"><i class="fa fa-question-circle-o">&nbsp;</i>Help Desk</a>
</div>

<center>
<div class="formm" align="center">

<h1><mark> Application Form </mark></h1><br>


<form method="post" action="f2.php" onSubmit="return validateForm();">


<table border="0" cellpadding="5" cellspacing="0">
<tr>
<td style="width:50%">
<b>First name: *</b><br />
<input id="data_1" name="First_Name" type="text" maxlength="50" style="width:260px" />
</td>
<td style="width:50%">
<b>Last name: *</b><br />
<input id="data_2" name="Last_Name" type="text" maxlength="50" style="width:260px" />
</td>
</tr>
<tr>
<td colspan="2">
<b>Email: *</b><br />
<input id="data_3" name="Email" type="email" maxlength="100" style="width:535px" />
</td>
</tr>
<tr>
<td colspan="2">
<b>Portfolio website:</b><br>
<input id="data_4" name="Portfolio" type="text" maxlength="255" value="http://" style="width:535px" />
</td>
</tr>


<tr>
<td colspan="2"  style="width:100%">
<b>Job Category:<br><b><br>
       <select name="search_categories" class="search_categories">
        <option value="" disabled selected>Select</option>
          <option value="Web Developer">Web Developer</option>
		  <option value="Marketing">Marketing</option>
          <option value="Internship">Internship</option>
          <option value="Software Developer">Software developer</option>
		   <option value="Designer">Designer</option>
		    <option value="Content Writer">Content Writer</option>		  
        </select>
  
 </td>
 </tr>


<tr>
<td colspan="2">
<br><b>Position you are applying for *</b><br><br>
<input id="data_5" name="Position" type="text" maxlength="100" style="width:535px" />
</td>
</tr>
<tr>
<td style="width:50%">
<b>Salary requirements</b><br><br>
<input id="data_6" name="Salary" type="text" maxlength="50" style="width:260px" />
</td>
<td style="width:50%">
<b>Phone *</b><br><br>
<input id="data_7"name="Phone" type="text" maxlength="50" style="width:260px" />
</td>
</tr>


<tr>
<td colspan="2">
<b>Reference / Comments / Questions</b><br><br>
<textarea id="data_9" name="Reference" rows="7" cols="40" style="width:535px"></textarea>
</td>
</tr>
</table>
<br />
<div style="text-align:center;">
<br />
<input style="width: 500px;" id="b1" name="skip_Submit" type="submit" value="Submit Application" />
</div>
</b>
</b></div>
</form>

<script type="text/javascript">

function validateForm() {
if (isEmpty(document.getElementById('data_1').value.trim()))
 {
alert('First name is required!');
return false;
}
if (isEmpty(document.getElementById('data_2').value.trim()))
 {
alert('Last name is required!');
return false;
}
if (isEmpty(document.getElementById('data_3').value.trim())) 
{
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('data_3').value.trim()))
 {
alert('Email must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('data_5').value.trim()))
 {
alert('Position you are applying for is required!');
return false;
}
if (isEmpty(document.getElementById('data_7').value.trim()))
 {
alert('Phone is required!');
return false;
}

return true;
}
function isEmpty(str)
 { 
 return (str.length === 0 || !str.trim());
 }
function validateEmail(email) 
{
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}

</script>
<br><br><br><br>
</body>
</html>


