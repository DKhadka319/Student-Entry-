
<?php
  include('menu.php');
  include('admin/query.php');
  $result=$ram->displayParents();
  $result->bindColumn(1,$parentsID);
  $result->bindColumn(2,$fathersname);
  $result->bindColumn(3,$mothersname);
  $result->bindColumn(4,$address);
  $result->bindColumn(5,$contactno);
  $result->bindColumn(6,$email);

?>
<head>
  <meta charset="utf-8">
  <title> All Parent </title>
</head>
<table border="1" style="margin:0 auto;">
  <th colspan="5">
     All Parent
  </th>
  <tr>
    <td>
      Parents ID
    </td>
    <td>
    Father Name
    </td>
    <td>
      Mother Name
    </td>
    <td>
      Address
    </td>
    <td>
    Conact Number
    </td>
    <td>
    Email
    </td>
  </tr>
  <?php
    while($result->fetch()){
      ?>
      <tr>
        <td>
          <?php echo $parentsID?>
        </td>
        <td>
          <?php echo $fathersname?>
        </td>
        <td>
          <?php echo $mothersname?>
        </td>
        <td>
          <?php echo $address?>
        </td>
        <td>
          <?php echo $contactno?>
        </td>
        <td>
          <?php echo $email?>
        </td>
      </tr>
    <?php } ?>

</table>
</html>
