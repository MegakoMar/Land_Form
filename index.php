<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
    <header class="site-header">
        <a href="#" class="site-header_logo">Company name</a>
        <div class="container row headerrow">
            <nav class="site-header_menu main-menu">
                <ul>
                    <li><a href="index.php" class="is-active">Home</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="contact_us.html ">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="header-h1">WELCOME TO FREE SKETCH TEMPLATE</div>
    <div class="header-h2">Habitasse vestibulum a mi odio ut rutrum mauris leo lorem</div>
    <div class="row">
        <div class="col-6 block black-bg">
            <div class="art-h1">About Us</div>
            <div class="text-style">
                <p>
                    A posuere scelerisque gravida facilisi parturient magna urna donec parturient per augue a amet quam nullam a ad a. Parturient velit imperdiet in suspendisse eget a parturient adipiscing penatibus convallis himenaeos felis torquent facilisi elementum a penatibus suscipit aliquam.
                </p>
                <p>
                    Porta at at suspendisse dolor fames ullamcorper cum id per suspendisse a dignissim eu dapibus platea turpis augue mi proin lorem morbi sapien facilisis lectus.
                </p>
            </div>
        </div>
        <div class="col-6">
            <div class="img">
                <img src="assets/img/1.png">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="img">
                <img src="assets/img/2.png">
            </div>
        </div>
        <div class="col-6 block white-bg">
            <span class="art-h1">Timeline</span>
            <div class="text-style">
                <p>
                    A posuere scelerisque gravida facilisi parturient magna urna donec parturient per augue a amet quam nullam a ad a. Parturient velit imperdiet in suspendisse eget a parturient adipiscing penatibus convallis himenaeos felis torquent facilisi elementum a penatibus suscipit aliquam.
                </p>
                <p>
                    Porta at at suspendisse dolor fames ullamcorper cum id per suspendisse a dignissim eu dapibus platea turpis augue mi proin lorem morbi sapien facilisis lectus.
                </p>
            </div>

        </div>
    </div>
    <div class="list-style">
        <div class="art-h1-list"><span class="art-h1">Our Services</span></div>
        <div>
            <ul class="row">
                <li class="col-4">
                    <img src="assets/img/icon1.png"/>
                    <h3>Consectetur vestibulum</h3>
                    <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                </li>
                <li class="col-4">
                    <img src="assets/img/icon2.png"/>
                    <h3>Consectetur vestibulum</h3>
                    <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                </li>
                <li class="col-4">
                    <img src="assets/img/icon3.png"/>
                    <h3>Consectetur vestibulum</h3>
                    <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                </li>
                <li class="col-4">
                    <img src="assets/img/icon4.png"/>
                    <h3>Consectetur vestibulum</h3>
                    <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                </li>
                <li class="col-4">
                    <img src="assets/img/icon5.png"/>
                    <h3>Consectetur vestibulum</h3>
                    <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                </li>
                <li class="col-4">
                    <img src="assets/img/icon6.png"/>
                    <h3>Consectetur vestibulum</h3>
                    <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="timeline">
                <div class="event">
                    <div class="event__date">2003</div>
                    <div class="event__pin"></div>
                    <div class="event__name">Started</div>
                </div>
                <div class="event">
                    <div class="event__date">2006</div>
                    <div class="event__pin"></div>
                    <div class="event__name">Important Date One</div>
                </div>
                <div class="event">
                    <div class="event__date">2010</div>
                    <div class="event__pin"></div>
                    <div class="event__name">Important Date Two</div>
                </div>
                <div class="event">
                    <div class="event__date">2016</div>
                    <div class="event__pin"></div>
                    <div class="event__name">Current Time</div>
                </div>
            </div>
        </div>
        <div class="col-6 block black-bg">
            <span class="art-h1">We're Hiring</span>
            <div class="text-style">
                <p>
                    A posuere scelerisque gravida facilisi parturient magna urna donec parturient per augue a amet quam nullam a ad a. Parturient velit imperdiet in suspendisse eget a parturient adipiscing penatibus convallis himenaeos felis torquent facilisi elementum a penatibus suscipit aliquam.
                </p>
                <p>
                    Porta at at suspendisse dolor fames ullamcorper cum id per suspendisse a dignissim eu dapibus platea turpis augue mi proin lorem morbi sapien facilisis lectus.
                </p>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-6 black-bg formstyle">
            <form action="form.php" method="post">
                <div class="art-h1 form-h2">Contact Us</div>
                <div class="colortext"><input type="text" name="name" placeholder="Name" required/></div>
                <div class="colortext"><input type="email" name="email" placeholder="Email" required></div>
                <div class="colortext"><textarea name = "message" placeholder="Message"required></textarea></div>
                <div class="button-style"><button>Contact us</button></div>
                <input type="hidden" name="datetime" value="<?php $date = date("Y-m-d H:i:s"); echo htmlspecialchars($date); ?>">
            </form>
        </div>
        <div class="col-6">
            <div class="img">
                <img src="assets/img/3.png">
            </div>
        </div>
    </div>

<link href="assets/js/script.js">
</body>
</html>