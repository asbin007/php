<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Application</title>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}
header {
    background-color: #333;
    color: white;
    padding: 15px;
    text-align: center;
}
form {
    margin: 20px auto;
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
form label {
    display: block;
    margin-bottom: 5px;
}
form input[type="text"],
form input[type="number"],
form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}
form button {
    background-color: #333;
    color: white;
    cursor: pointer;
}
hr {
    margin: 20px auto;
    border: 0;
    border-top: 1px solid #ccc;
    width: 80%;
}
h2 {
    text-align: center;
}
table {
    margin: 20px auto;
    border-collapse: collapse;
    width: 80%;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
th, td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
    text-align: left;
}
th {
    background-color: #333;
    color: white;
}
tr:last-child td {
    border-bottom: none;
}
.no-contacts {
    text-align: center;

}
a{
    text-decoration: none;
    color: #333;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
    padding: 5px;


}
a :hover {
    color: #000;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
    padding: 5px;
}
</style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>update contact Application</header>
    <?php
    include 'db.php';
    $id=$_GET['id'];
    $sql="SELECT * FROM contact WHERE id=" . $id;
    $result=mysqli_query($conn,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $name=$row['name'];
        $phone=$row['phone'];
    }
    
    ?>
    <form action="addData.php" method="POST">
        <main>
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" required><br>
            <label for="contact">Contact:</label><br>
            <input type="number" name="contact" id="contact" required><br>
            <button type="submit">Update</button>
        </main>
    </form> 
    <
</body>
</html>
