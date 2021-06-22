<?php
$server="localhost";
$username="root";
$password="";
try{
    $server="mysql:host=localhost;dbname=name";
     $user="root";
      $pass="";
      $conn = new PDO($server, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     if($_SERVER('REQUEST_METHOD')=='POST'){

// $q = $conn->query($sql);
// $q->setFetchMode(PDO::FETCH_ASSOC);
//         echo "thanks for comming";
//     }
// }
// catch(PDOException , $e){
//     echo $e ->getmessage();
//     echo " please chek again yyour data";
// }
}
catch(PDOException $e) {
    echo $e->getMessage();
    echo "please a right data";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <table style="border:5px solid black ; width:400px; margin:auto">
    <tr>
    <th>name</th>
    <th>age</th>
    </tr>
    <tr>
    <?php
    $conn;
    $sql='select * from age';
    $stmt=$conn->query($sql);
    while ($datarow = $stmt->fetch()){ 
                        // $id=$datarow["id"];
                        $name=$datarow["name"];
                        $age=$datarow["age"];
                        ?>
                        <tr>
                            <!-- <td><?php echo $id ?></td> -->
                            <td><?php echo $name ?></td>
                            <td><?php echo $age ?></td>
                        </tr>
                     
    </tr>
    <?php } ?>
    </table>
    </div>
</body>
</html>