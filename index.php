<?php
include('admin/query.php');
if(isset($_POST['submit'])){
  $ram->addNewStudent($_POST);
}
include('menu.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Student Form</title>
</head>

<body>
  <form action="index.php" method="POST">
    <table border="1" style="margin:0 auto;">
      <th colspan="2">

        Students Entry
      </th>
      <tr>
        <td>
          Student Name:
        </td>
        <td>
          <input type="text" name="fullname" placeholder="Enter Your full Name" />
        </td>
      </tr>
      <tr>
        <td>
          Class:
        </td>
        <td>
          <input type="text" name="class" placeholder="Enter Your Class" />
        </td>
      </tr>
      <tr>
        <td>
          Height:
        </td>
        <td>
          <input type="text" name="height" placeholder="Enter Your height" />
        </td>
      </tr>
      <tr>
        <td>
          Age:
        </td>
        <td>
          <input type="text" name="age" placeholder="Enter Your Age" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="submit">
        </td>

      </tr>
      <tr>
        <td colspan="2">
          <a href="viewStudents.php">VIew Students</a>
        </td>
      </tr>


    </table>
</form>

</html>
