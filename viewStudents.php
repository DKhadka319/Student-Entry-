<?php
  include('menu.php');
  include('admin/query.php');
  $result=$ram->displayStudents();
  $result->bindColumn(1,$studentID);
  $result->bindColumn(2,$fullname);
  $result->bindColumn(3,$class);
  $result->bindColumn(4,$height);
  $result->bindColumn(5,$age);
?>
<head>
  <meta charset="utf-8">
  <title>Student Form</title>
</head>
<table border="1" style="margin:0 auto;">
  <th colspan="5">
     All Students
  </th>
  <tr>
    <td>
      Student ID
    </td>
    <td>
      Full Name
    </td>
    <td>
      Class
    </td>
    <td>
      Height
    </td>
    <td>
    Age
    </td>
  </tr>
  <?php
    while($result->fetch()){
      ?>
      <tr>
        <td>
          <?php echo $studentID?>
        </td>
        <td>
          <?php echo $fullname?>
        </td>
        <td>
          <?php echo $class?>
        </td>
        <td>
          <?php echo $height?>
        </td>
        <td>
          <?php echo $age?>
        </td>
      </tr>
    <?php } ?>
    <tr>
      <td>
        <a href="index.php">Add New Student</a>
      </td>

    </tr>
</table>
</html>
