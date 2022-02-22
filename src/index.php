<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">     
</head>

<body>
<input type="hidden" id="hidenid" name="hiden"><br>
        <label for="lname">TASK: <input type="text" id="tskid" name="task"></label>   
        <button id="btn">Add</button>
        <button id="updatebtn">Update</button>
    <div id="alllist">

    </div>
    <h4>Completed</h4>
    <div id="completed">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>