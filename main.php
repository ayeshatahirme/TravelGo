<?
if(isset($_POST['email'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to database failed due to" . mysqli_connect_error());
    }

    $location = $_POST['location'];
    $datein = $_POST['datein'];
    $dateout = $_POST['dateout'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `travelgo` (`location`, `datein`, `dateout`, `email`) VALUES ('$name', '$datein', '$dateout', '$email');";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVION</title>
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    
</head>
<body>
    <!-- Second page -->
    <nav>
        <div class="result">
            <div id="mySideMenu", class="sideMenu">
                <a href="javascript:void(0)" class="closebtn" onclick="closeSideMenu()">&times;</a>
                <a href="#">Home</a>
                <a href="#">Contact</a>
                <a href="#">Detalis</a>
                <a href="#">About</a>
            </div>
            <h1 class="navBar1"><span class="mySideMenu" onclick="openSideMenu()">&#9776;</span>TravelGo<span id="result-fullname"></span></h1>
        </div>
        
    </nav>
    <div id="two">        
        <div class="menu-bar">
            <ul class="nav-item">
                <li><a href="#" class="item">Travel</a>
                    <div class="sub-menu1">
                        <ul>
                            <li class="on-hover"><a href="#">Road</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="#">Car</a></li>
                                        <li><a href="#">Bus</a></li>
                                        <li><a href="#">Bikes</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="on-hover"><a href="#">Fly</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="#">Emirates</a></li>
                                        <li><a href="#">Qatar</a></li>
                                        <li><a href="#">JetBlue</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="" class="item">Plan</a>
                    <div class="sub-menu1">
                        <ul>
                            <li class="on-hover"><a href="#">Vacation</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="#">By Road</a></li>
                                        <li><a href="#">By Plane</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="on-hover"><a href="#">Packages</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="#">4 people</a></li>
                                        <li><a href="#">8 people</a></li>
                                        <li><a href="#">10 people</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="on-hover"><a href="">Stay</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="">3 Star</a></li>
                                        <li><a href="">5 Star</a></li>
                                        <li><a href="">Luxury</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="" class="item">Travel info</a>
                    <div class="sub-menu1">
                        <ul>
                            <li class="on-hover"><a href="">Road Trip</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="">Highways</a></li>
                                        <li><a href="">KPK</a></li>
                                        <li><a href="">Punjab</a></li>
                                        <li><a href="">Sindh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="on-hover"><a href="">By Air</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="">In Pakistan</a></li>
                                        <li><a href="">In Asia</a></li>
                                        <li><a href="">Other Subcontinents</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="" class="item">Discounts</a>
                    <div class="sub-menu1">
                        <ul>
                            <li class="on-hover"><a href="">Travel Packages</a><i class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="">By Road</a></li>
                                        <li><a href="">By Air</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="on-hover"><a href="">Hotels</a><i id="angle-right" class="fa fa-angle-right"></i>
                                <div class="sub-menu2">
                                    <ul>
                                        <li><a href="">3 Star</a></li>
                                        <li><a href="">5 Star</a></li>
                                        <li><a href="">Luxury</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>        
    </div>
    <section>
        <div class="centered">
            <p class="para">Let's <b>Travel Together</b>!</p>
            <p class="para1">Nature. Adventure. Experience.</p>
        </div>
    </section>
    <img src="images/t4.jpg" alt="trees" class="side-pic">
    <div class="details">
        <h2>Add details</h2>
        <div>
            <input type="text" placeholder="Location" name = "location"><br>
            <input type="text" placeholder="Date in" name = "datein"><br>
            <input type="text" placeholder="Date out" name = "dateout"><br>
            <input type="email" placeholder="Email" name = "email"><br>

            <button id="submit-btn">Submit</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Thank you for visiting</p>
        <a href="#" class="fa fa-facebook fa-2x"></a>
        <a href="#" class="fa fa-twitter fa-2x"></a>
        <a href="#" class="fa fa-linkedin-square fa-2x"></a>
        <a href="#" class="fa fa-github fa-2x"></a>
        <a href="#" class="fa fa-instagram fa-2x"></a>
    </footer>
</body>
</html>
