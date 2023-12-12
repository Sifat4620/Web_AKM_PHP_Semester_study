<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> A PHP</title>
</head>
        <body>
                
            <?php 
            $name  ="Sifat";
            $email ="Sifat@gmail.com";
            $pass  = 123;
            
            ?>
          <table border="5">

             <!-- tr td th  -->   
             <!-- table row  -->
             <!-- table data -->
             <!-- table header -->

             <th>Name</th>
             <th>Email</th>
             <th>Password</th>
             <tr> 
                <td>  <?php echo $name ?>   </td>
                <td>  <?php echo $email ?>  </td>
                <td>  <?php echo $pass ?>   </td>
             </tr>
             





          </table>      



        </body>
</html>