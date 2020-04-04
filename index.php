<!DOCTYPE html>
<html>
<head>
<style>
padding 50 px;
</style>
</head>
<body style="background-image: linear-gradient(to bottom right,Azure,LightCyan,Cornsilk,BlanchedAlmond,);height: 1000px;">
<div style="height: 900px;width: 500px;text-align: center;border-radius: 10px;position: absolute;left: 50%;transform: translate(-50%,0%);border:solid white 5px;box-shadow: 1px 1px 2px black, 0 0 25px grey, 0 0 5px grey;">
<h2>Form</h2>
<p>Fill your responses in blanks given below</p>
<p>
<form action="action_page.php" method="POST">
  <label for="Name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br><br>
 
    <h3>Gender<h3>
    <label for="gen">Male:</label>
  <input type="radio" id="gen" name="gen" value="Male"><br>
  <label for="gen">Female:</label>
  <input type="radio" id="gen" name="gen" value="Female"><br>
       <label for="gen">Others:</label>
  <input type="radio" id="gen" name="gen" value="Others"><br><br>
     
    <h3>Members of the team</h3>
  <label for="team">Associate Member:</label>
  <input type="checkbox" id="team" name="team[]" value="Associate Member"><br>
  <label for="team">Design Team:</label>
  <input type="checkbox" id="team" name="team[]" value="Design Team Member"><br>
  <label for="team">Web Team:</label>
  <input type="checkbox" id="team" name="team[]" value="Web Team Member"><br><br>
     
     <h3>Year of study</h3>
    <label for="stud">1st Year:</label>
  <input type="radio" id="stud" name="study" value="1"><br>
  <label for="stud">2nd Year:</label>
  <input type="radio" id="stud" name="study" value="2"><br> 
    <label for="stud">3rd Year:</label>
  <input type="radio" id="stud" name="study" value="3"><br>
  <label for="stud">4th Year:</label>
  <input type="radio" id="stud" name="study" value="4"><br>
  <label for="stud">5th Year:</label>
  <input type="radio" id="stud" name="study" value="5"><br><br>
     
     
     
  <input type="submit" name="submit" >
</form>
</form> 
</p>
</div>
</body>
</html>