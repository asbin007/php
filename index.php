<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Application</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>contact application</header>
    <form action="addData.php" method="post">
        <main>
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" required ><br>
            <label for="contact">Contact:</label><br>
            <input type="number" name="contact" id="contact" required ><br>
            <button type="submit">save</button>


        
        </main>
    </form>
    <br>
    <hr>
    <table>
        <th>Name</th>
        <th>phone no</th>
        <?php 
        include 'db.php';
        $sql="SELECT * FROM names";
        $result=mysqli_query($conn,$sql);
        if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];

            $phone=$row['phone'];
        }
}
        ?>
        <tr>
            <td><?php echo $name ?> </td>
            <td><?php echo $phone ?> </td>

        </tr>
        
    </table>
</body>
</html>