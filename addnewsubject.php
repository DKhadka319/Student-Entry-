<?php


include('admin/query.php');
if(isset($_POST['submit'])){
  $ram->addSubject($_POST);
}
include('menu.php');

?>
<html>
<head>
  <meta charset="utf-8">
  <title>Subject  Form</title>
</head>

<body>
  <form action="addnewsubject.php" method="POST">
    <table border="1" style="margin:0 auto;">
      <th colspan="2">

        Subject Entry
      </th>
      <tr>
        <td>
          Subject Name
        </td>
        <td>
          <input type="text" name="subjectname" placeholder="Enter Your Subject Name" />
        </td>
      </tr>
      <tr>
        <td>
          Subject Description
        </td>
        <td>
          <input type="text" name="subjectdescription" placeholder="Enter the subject Description" />
        </td>
      </tr>



      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="submit">
        </td>

      </tr>
      <tr>
        <td colspan="2">
          <a href="viewsubject.php">View Subject</a>
        </td>
      </tr>


    </table>
</form>

</html>
