<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link  rel="stylesheet"  type="text/css" href="css/ContactStyle.css">
</head>
<body>
    <header>
        <?php include "Include/top.php" ?>
    </header>
    <div class="container">
        <?php include "Include/left.php" ?>
    <main>
        <div class="main-container">
        <div class="contact-details">
            <div class="contact">
                Contact Details 
            </div>
        </div>
        <div class="contact-container">
            <div class="form-container">
            <div class="contact-form">
                <div class="form-name">Contact Form</div>
                <form action="Contact.php">
                <b>Name    : </b><br><input type="text" name="name"><br><br>
                <b>Email   : </b><br><input type="text" name="email"><br><br>
                <b>Message : </b><br><textarea name="message" class="message" rows="6" cols="20"></textarea><br>
                <input type="button" name="send" value="Send Message">
                </form>
            </div>
            <div class="details">
                <div class="form-name">Contact Details</div>
                <div class="contact-form">
                    <b>Address   : <br><br></b>Chineese Place,<br>Independent Arcade,<br>Colombo 07.<br><br>
                    <b>Telephone : <br><br></b>011 2569874<br><br>
                    <b>Email     : <br><br></b><a href="info@chineseplace.com" style="text-decoration:underline">info@chineseplace.com</a>
                </div>
            </div>
            <div class="open-hours">
                <div class="form-name">Opening Hours</div>
                <div class="contact-form">
                    <b>Monday-Friday : </b><br><br>
                    11am - 6pm <br><br>
                    <b>Saturday-Sunday :</b><br><br>
                    11am - 10pm
                </div>
            </div>
            </div>
        </div>
        <div class="footer">
            Copyright @ 2018 Chineese Place,SriLanka | All Rights Reserved.2018
        </div>
    </div>
    </main>
    </div>
</body>
</html>