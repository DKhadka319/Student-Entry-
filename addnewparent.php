<?php


include('admin/query.php');
if(isset($_POST['submit'])){
  $ram->addnewparent($_POST);
}
include('menu.php');

?>
<html>
<head>
  <meta charset="utf-8">
  <title>Parent  Form</title>
</head>

<body>
  <form action="addnewparent.php" method="POST">
    <table border="1" style="margin:0 auto;">
      <th colspan="2">

        Parents Entry
      </th>
      <tr>
        <td>
          Father Name:
        </td>
        <td>
          <input type="text" name="fathersname" placeholder="Enter Your Father Name" />
        </td>
      </tr>
      <tr>
        <td>
          Mother Name
        </td>
        <td>
          <input type="text" name="mothersname" placeholder="Enter Your Mother Name" />
        </td>
      </tr>
      <tr>
        <td>
          Address
        </td>
        <td>
          <input type="text" name="address" placeholder="Enter Your address" />
        </td>
      </tr>
      <tr>
        <td>
          Contact  Number
        </td>
        <td>
          <input type="text" name="contactno" placeholder="Enter your contact numeber" />
        </td>
        <tr>


        <td>
          Email
        </td>
        <td>
          <input type="text" name="email" placeholder="Enter your Email Address" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="submit">
        </td>

      </tr>
      <tr>
        <td colspan="2">
          <a href="viewparent.php">View Parent</a>
        </td>
      </tr>


    </table>
</form>

</html>
