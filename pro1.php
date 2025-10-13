<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post"><br><br>
    Enter Name :<input type="text" name="txtnm"  ><br><br>
    Email :<input type="text" name="txtemail"><br><br>
    Select Course :<br><br>
    <select name="txtCourse">
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="Bsc.It">Bsc.It</option>
    <option value="MSC.It">MSC.It</option>
    
     <input type="submit" name="btn" value="submit"><br><br>


    
</select>
    </form>
    
</body>
</html>
<?php

    include 'database_pro1.php';
    $obj=new DbStudentClass();

    if(isset($_REQUEST['btn']))
    {
        $obj->insertStudent($_REQUEST['txtnm'],$_REQUEST['txtemail'],$_REQUEST['txtCourse']);

    }
?>
<?php 
  
    $result= $obj->getAllStudents();
     echo"<table border=1> ";
     echo"<th>Id </th>";
    echo"<th>Name </th>";
    echo"<th>Gmail</th>";
    echo"<th>course</th>";
    while($row=$result->fetch())
    {
        echo "<tr>";
		echo "<td>" . $row['id'] . "</td>" ;
		echo "<td>" . $row['namee']. "</td>";
		echo "<td>" .$row['email']. "</td>";
		echo "<td>" .$row['course']. "</td>";
	
		echo "</tr>";

    }
    echo"</table>";
?>