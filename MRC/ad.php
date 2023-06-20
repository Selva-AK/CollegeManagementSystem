<html>
<head>
<title>Student Registration Form Using Table in HTML</title>

<style>

table{
  font-family: sans-serif; 
  font-size: 15px; 
  font-style: normal;
  font-weight: bold;
  background-color: lightgray;
  border-collapse: collapse; 
  border: 4px solid dodgerblue;
  caret-color: dodgerblue;
}
table.inner{
  border: 10px;
}

input[type=text], input[type=email], input[type=number],input[type=date]{
  width: 50%;
  padding: 6px 12px;
  margin: 5px 0;
  box-sizing: border-box;
  border:2px solid dodgerblue;
}

input[type=submit], input[type=reset]{
  width: 15%;
  padding: 8px 12px;
  margin: 5px 0;
  box-sizing: border-box;
}
input[type=submit]:hover{
  background-color: dodgerblue;
}
input[type=reset]:hover{
  background-color: dodgerblue;
}

</style>

</head>
 
<body>
<form method="post" action="form.php">
<table align="center" cellpadding = "10">
 
<!--------------------- First Name ------------------------------------------>
<tr>
<td>Your Name</td>
<td><input type="text" name="name" maxlength="50" placeholder="" required/>
(Max 50 Characters Allowed)
</td>
</tr>
 
<!------------------------ Father's Name --------------------------------------->
<tr>
<td>Father's Name</td>
<td><input type="text" name="fathername" maxlength="50" placeholder="" required/>
(Max 50 Characters Allowed)
</td>
</tr>
 
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email ID</td>
<td><input type="email" name="gmailid" maxlength="100" placeholder="Ex:xxxx@gmail.com" required/></td>
</tr>
 
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Mobile Number</td>
<td>
<input type="text" name="mobileno" maxlength="10" placeholder="7842xxxxxx" required/>
(10 Digits Allowed)
</td>
</tr>
 
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="Male"/>
Male
<input type="radio" name="gender" value="Female"/>
Female
</td>
</tr>

<!--------------------------Date Of Birth----------------------------------->

<tr>
<td>Date of Birth(DOB)</td>
 
<td>
<input type="date" name="dob" required>
</td>
</tr>
 
 
<!------------------------- Address ---------------------------------->
<tr>
<td>Address<br /><br /><br /></td>
<td><textarea name="address" rows="10" cols="50" required></textarea></td>
</tr>
 
<!-------------------------- City ------------------------------------->
<tr>
<td>City</td>
<td><input type="text" name="city" maxlength="50" placeholder="Bangalore" required/>
(Max 50 Characters Allowed)
</td>
</tr>
 
<!----- -------------------- Pin Code-------------------------------------->
<tr>
<td>Pin Code</td>
<td><input type="number" name="pincode" max="699999" placeholder="560068" required/>
(Max 6 Numbers Allowed)
</td>
</tr>
 
<!---------------------------- State ----------------------------------->
<tr>
<td>State</td>
<td><input type="text" name="State" maxlength="50" placeholder="Karnataka" required/>
(Max 50 Characters Allowed)
</td>
</tr>
 
<!------------------------------ Country --------------------------------->
<tr>
<td>Country</td>
<td><input type="text" name="Country" placeholder="India" required/></td>
</tr>
 
<!------------------------- Hobbies -------------------------------------->
 
<tr>
<td>Hobbies <br /><br /><br /></td>
 
<td>
<input type="checkbox" name="HobbyDrawing" value="Drawing" />
Drawing
<input type="checkbox" name="HobbySinging" value="Singing" />
Singing
<input type="checkbox" name="HobbyDancing" value="Dancing" />
Dancing
<input type="checkbox" name="HobbyCooking" value="Cooking" />
Sketching
<br />
<input type="checkbox" name="HobbyOther" value="Other">
Others
<input type="text" name="Other_Hobby" maxlength="50" placeholder="Ex- Teaching" />
(Max 50 Characters Allowed)
</td>
</tr>
 
<!-----------------------Qualification---------------------------------------->

<tr>
<td>Qualification <br /><br /><br /></td>
 
<td>
<br/>
<input type="checkbox" name="HighSchool" value="High School" />
SSLC(10th)<br>
<input type="checkbox" name="HigherSchool" value="Higher School" />
HSE(12th)<br/>
<input type="checkbox" name="Graduation" value="Graduation" />
Graduation(Bachelors)<br/>
<input type="checkbox" name="PostGraduation" value="Post Graduation" />
Post Graduation(Masters)<br/>
<input type="checkbox" name="Phd" value="Phd">
Phd
</td>
</tr>

 
<!---------------------------- Courses ----------------------------------->
<tr>
<td>Courses<br />Applied For</td>
<td>
<?php /*<input type="radio" name="CourseBCA" value="BCA">
BCA(Bachelor of Computer Applications)<br>
<input type="radio" name="CourseBCom" value="B.Com">
B.Com(Bachelor of Commerce)<br>
<input type="radio" name="CourseBSc" value="B.Sc">
B.Sc(Bachelor of Science)<br>
<input type="radio" name="CourseBA" value="B.A">
BA(Bachelor of Arts)<br>
<input type="radio" name="CourseMCA" value="BCA">
MCA(Master of Computer Applications)<br>
<input type="radio" name="CourseMCom" value="B.Com">
M.Com(Master of Commerce)<br>
<input type="radio" name="CourseMSc" value="B.Sc">
M.Sc(Master of Science)<br>
<input type="radio" name="CourseMA" value="B.A">
MA(Master of Arts)<br>
*/?>
<select name="course" value="Select" required> 
    <option ></option>
    <option value="B.A(BACHELOR OF ARTS)">B.A(BACHELOR OF ARTS)</option>
    <option value="B.Sc(COMPUTER SCIENCE)">B.Sc(COMPUTER SCIENCE)</option>
    <option value="B.Sc(COMPUTER SCIENCE)">B.C.A (COMPUTER APPLICATIONS)</option>
    <option value="B.Sc(MATHEMATICS)">B.Sc(MATHEMATICS)</option>
    <option value="B.Sc(FASHION TECHNOLOGY)">B.Sc(FASHION TECHNOLOGY)</option>
    <option value="B.Sc(PHYSICS)">B.Sc(PHYSICS)</option>
    <option value="COMMERCE">COMMERCE</option>
    <option value="B.Sc(CHEMISTRY)">B.Sc(CHEMISTRY)</option>
    <option value="M.Sc(MASTER OF ARTS)">M.Sc(MASTER OF ARTS)</option>
</select>
</td>
</tr>
<tr>
  <td>Declaration</td><td><input type="checkbox" required> I hereby declare that the above
  information furnished is true to the best of <br>my knowledger,and also i will be abiding the rules and regulation of the Institution.</td>
</tr>
 
<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>

</form>
</body>
</html>