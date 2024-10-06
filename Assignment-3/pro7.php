<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <form action="pro7(action).php" method="post">
        <img src="cmpica.jfif">
        <img src="Ignite.png" height="100" width="95">
        <img src="charusat.png" height="100" width="30%">

        <h3 align="center">Registration Form</h3> 
        <p>Event Date:28th February,2015</p>
       
        <table align="center">
            <tr >
                <td colspan="4"><div align="right">Date:<input type="date" name="dt"></div></td>
            </tr>
            
            
            <tr>
                <td colspan='4' align="center"><b><h3>Personal Information</h3></b></td>
            </tr>

            <tr align="center">
                <td>Particiapnt Name</td>
                <td colspan="3"><input type="text" name="name" size="50"></td>
            </tr>

            <tr>
                <td>Institute Name:</td>
                <td><input type="text" name="iname"></td>
                <td>University Name:</td>
                <td><input type="text" name="uname"></td>
            </tr>

            <tr>
                <td>Course(UG/PG):</td>
                <td><input type="text" name="course"></td>
                <td>Semester:</td>
                <td><input type="text" name="semester"></td>
            </tr>

            <tr>
                <td>Mobile No:</td>
                <td><input type="text" name="mno"></td>
                <td>Email ID:</td>
                <td><input type="email" name="mail"></td>
            </tr>

            <tr>
                <td>Referenced By:</td>
                <td><input type="text" name="ref"></td>
                <td>Address:</td>
                <td><input type="text" name="add"></td>
            </tr>
            <tr>
                <td colspan='4' align="center">EVENT SELECTION FORM</td>
            </tr>
        </table>
        <br>
        <table align="center" border="1">
            <tr>
                <td colspan="2" align="center">Group 1[Any One]</td>
                <td colspan="2" align="center">Group 2[Any One]</td> 
            </tr>
            <tr>
                <td align="center">UG</td>
                <td align="center">PG</td>
                <td align="center">UG</td>
                <td align="center">PG</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="chk[]" value="Blind Coding(C)">Blind Coding(C)</td>
                <td><input type="checkbox" name="chk[]" value="Mobile Application Development">Mobile Application Development</td>
                <td><input type="checkbox" name="chk[]" value="Bug Finding (Java)">Bug Finding (Java)</td>
                <td><input type="checkbox" name="chk[]" value="Code Hunt (Java)">Code Hunt (Java)</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="chk[]" value="WD(HTML,CSS)">WD(HTML,CSS)</td>
                <td><input type="checkbox" name="chk[]" value="Hackathon">Hackathon</td>
                <td><input type="checkbox" name="chk[]" value="Code Hunt(C++)">Code Hunt(C++)</td>
                <td><input type="checkbox" name="chk[]" value="Logo Designing">Logo Designing</td>
            </tr>

            <tr>
                <td colspan="2"><input type="checkbox" name="chk[]" value="Warcraft DOTA">Warcraft DOTA</td> 
                <td colspan="2"><input type="checkbox" name="chk[]" value="Battle Field">Battle Field</td>
            </tr>

            <tr>
                <td colspan="2"><input type="checkbox" name="chk[]" value="Technical Snakes & Ladders">Technical Snakes & Ladders</td> 
            </tr>

            <tr>
                <td colspan="4" align="center"><input type="checkbox" name="chk[]" value="Prastuti">Prastuti</td> 
            </tr>
           
            
            
        </table>
        <input type="submit" name="submit" value="Click">
   
    </form>
 
</body>
</html>

