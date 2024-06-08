<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="servicesadmin.css">
  </head>
  <body>
    <h1>Users programs</h1>
    <div class="table">
    <table border = 1 style="background-color:whitesmoke;">
      <tr style="background-color: rgb(220, 220, 220);">
        <td style="border: none;color: rgb(130, 130, 130)">#</td>
        <td style="border: none;color: rgb(130, 130, 130);width: max-content;">fullname</td>
        <td style="border: none;color: rgb(130, 130, 130);width: max-content;">email</td>
        <td style="border: none;color: rgb(130, 130, 130)">phonenumber</td>
        <td style="border: none;color: rgb(130, 130, 130)">gender</td>
        <td style="border: none;color: rgb(130, 130, 130)">age</td>
        <td style="border: none;color: rgb(130, 130, 130)">height</td>
        <td style="border: none;color: rgb(130, 130, 130)">weight</td>
        <td style="border: none;color: rgb(130, 130, 130)">country</td>
        <td style="border: none;color: rgb(130, 130, 130)">calories</td>
        <td style="border: none;color: rgb(130, 130, 130)">activity</td>
        <td style="border: none;color: rgb(130, 130, 130)">	wakeup</td>
        <td style="border: none;color: rgb(130, 130, 130)">lswtime</td>
        <td style="border: none;color: rgb(130, 130, 130)">	fswtime</td>
        <td style="border: none;color: rgb(130, 130, 130)">	gymtime</td>
        <td style="border: none;color: rgb(130, 130, 130)">	sleeptime</td>
        <td style="border: none;color: rgb(130, 130, 130)">	goal</td>
        <td style="border: none;color: rgb(130, 130, 130)">	history</td>
       
</tr>
    <?php
      require 'config.php';
      $rows = mysqli_query($con, "SELECT * FROM services");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      
        <td><?php echo $i++; ?></td>
        <td style = "width:max-content"><?php echo $row["fullname"]; ?></td>
        <td style = "width:max-content"><?php echo $row["email"]; ?></td>
        <td style = "width:max-content"><?php echo $row["phonenumber"]; ?></td>
        <td style = "width:max-content"><?php echo $row["gender"]; ?></td>
        <td style = "width:max-content"><?php echo $row["age"]; ?></td>
        <td style = "width:max-content"><?php echo $row["height"]; ?></td>
        <td style = "width:max-content"><?php echo $row["weight"]; ?></td>
        <td style = "width:max-content"><?php echo $row["country"]; ?></td>
        <td style = "width:max-content"><?php echo $row["calories"]; ?></td>
        <td style = "width:max-content"><?php echo $row["activity"]; ?></td>
        <td style = "width:max-content"><?php echo $row["wakeup"]; ?></td>
        <td style = "width:max-content"><?php echo $row["lswtime"]; ?></td>
        <td style = "width:max-content"><?php echo $row["fswtime"]; ?></td>
        <td style = "width:max-content"><?php echo $row["gymtime"]; ?></td>
        <td style = "width:max-content"><?php echo $row["sleeptime"]; ?></td>
        <td style = "width:max-content"><?php echo $row["goal"]; ?></td>
        <td style = "width:max-content"><?php echo $row["history"]; ?></td>
        <td style="border: none;">
        <?php require 'scriptadminservices.php'; ?>
       
          
        </td>
       
       
        
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    
    <a href="adminpage.php" style="color: rgb(130, 130, 130);margin-left: 44%">Go To admin panel</a>
   
    
  </div>
  </body>
</html>