<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
body {
  background-color:#dffc03;
  text-align: center;
}
h1{
	color: red;
}
</style>
</head>
<body>

<center><h1>Personal Details</h1></center>

<form action="practical1data.php" method="POST">

	Name:<input type="text" name="name"><br><br>
	Password:<input type="Password" name="pass"><br><br>
	E-mail id:<input type="email" name="email"><br><br>

	Gender:<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br><br>
  Contact#:<input type="number" name="number"><br>

  <h1>Educational Qualification</h1><br>

 <label>Degree</label>
  <select name="degree">
    <option>select Group</option>
    <option value="MCA">MCA</option>
    <option value="BCA">BCA</option>
    <option value="IMCA">IMCA</option>
  </select><br><br>

  <label>Engineering</label>
  <select name="engineering">
    <option>select Group</option>
    <option value="CSE">CSE</option>
    <option value="Btech">B.Tech</option>
    <option value="Mtech">M.Tech</option>
  </select>
  <br><br>

Hobbies<input type="checkbox" name="hobbies" value="Hobbies">Playing chess
<input type="checkbox" name="hobbies" value="Hobbies">Reading Books<br><br>
<h1>Address</h1>
    
    <textarea type="" name="address" rows="4" cols="50">

  </textarea>
    <br>
  Attch Resume:<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  
  <input type="submit" value="submit">
	
</form>



</body>
</html>