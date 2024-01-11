<?php 
     $conn=mysqli_connect('localhost','root','','monoshop') or die (mysqli_error());

    $NOM=$_POST['nom'];
    $PRE=$_POST['pre'];
    $EML=$_POST['eml'];
    $PWD=$_POST['pwd'];
   $req="INSERT INTO clients(nom,prenom,email,password)values('$NOM','$PRE','$EML','$PWD')";
   $res=mysqli_query($conn,$req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <style>
        body
        {
            background-color: #e9d7d3;
            margin-right:35%;
            margin-left:35%;
            margin-top:20%;
            margin-bottom:10px;
        }
        .log h1{
            color:violet;
        }
    form td{
        font-size: 1rem;
        color:white;
    }
    </style>
</head>
<body>

 <div class="log">
    <h1>hi pretty girl you are subscribed </h1>
       
   </div>
      
      <form >
        <table  align="center">
        <tr>
        <td>your first name is</td>
        <td><?php echo($NOM) ?></td>
        </tr>

      <tr>
        <td>your last name is</td>
  <td><?php echo($PRE) ?></td>
</tr>
  <tr>
  <td>your email is </td>
  <td><?php echo($EML) ?></td>
  </tr>
  
  </table>
    

  
  </form>
</body>
</html>