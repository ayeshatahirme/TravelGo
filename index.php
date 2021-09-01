<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="script.js"></script>
    <title>IVION</title>
</head>

<body style="background: url(images/t7.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;
        margin-top: 0px;">

    <!-- First page -->
    <nav class="navBar">
        <h1>TravelGo</h1>
    </nav>
    <div id="one">
        <div class="img-name">
            
            <form action="main.php" method="POST">
                <img src="images/t7.jpg" alt="Avatar" class="avatar" id="avatar">
                
                <form id="img-name" method="POST" action="main.html">
                    <!-- <input type="file" id="upload-img" name="image" accept="images/*" capture /> -->
                    
                    <input type="text" id="fullname" placeholder="Full Name" required="">
                </form>
            </form>
            <a href="main.php"><input type="button" id="next-btn" value="Next" onclick="passvalue()"></a>
        </div>
    </div>
</body>
</html>