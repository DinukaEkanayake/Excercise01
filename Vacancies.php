<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link  rel="stylesheet"  type="text/css" href="css/VacanciesStyle.css">
</head>
<body>
    <header>
        <?php include "Include/top.php" ?>
    </header>
    <div class="container">
        <?php include "Include/left.php" ?>
    <main>
        <div class="main-container">
        <div class="application-container">
            <div class="appliation">
                Application For Employment
            </div>
        </div>
        <div class="form">
            <div class="form1">
                <div class="category">
                    Personal Details
                </div>
                <div class="form-container">
                <form action="Vacancies.php">
                  <div class="input"><label for="surname">Surname : </label><span class="surname"><input name="surname" id="surname" type="text" size="20"></span></div><br><br>
                  <div class="input"><label for="forename">Forename : </label><span class="forename"><input name="forename" id="forename" type="text" size="20"></span><br><br></div>
                  <div class="input"><label for="title">Title : </label><span class="title"><input name="Title" id="title" type="text" size="20"></span><br><br></div>
                  <div class="input"><label for="address">Address : </label><span class="address"><textarea name="address" rows="5" cols="21"></textarea></span><br><br></div>
                  <div class="input"><label for="email">Email : </label><span class="email"><input name="email" id="email" type="text" size="20"></span><br><br></div>
                  <div class="input"><label for="email">NIC : </label><span class="nic"><input name="nic" id="nic" type="text" size="20"></span><br><br></div>
                  <div class="input"><label for="email" style="vertical-align:middle;">Date of Birth : </label><span class="dob"><input name="dob" id="dob" type="text" size="20"></span><br><br></div>
                  <div class="input"> Days Available : <span class="checkboxes"><input type="checkbox" name="monday"><label for="monday">Monday</label>
                                   <input type="checkbox" name="monday"><label for="tuesday">Tuesday</label>
                                   <input type="checkbox" name="monday"><label for="Wednesday">Wednesday</label>
                                   <input type="checkbox" name="monday"><label for="Thursday">Thursday</label>
                                   <input type="checkbox" name="monday"><label for="Friday">Friday</label>
                                   <input type="checkbox" name="monday"><label for="Saturday">Saturday</label>
                                   <input type="checkbox" name="monday"><label for="Sunday">Sunday</label></span></div>
                   <br><br>
                   
                    <div class="dropdown">
                        <div class="input"><label for="nationality">Nationality :</label>
                        <div class="nationality">
                        <form>
                        <div class="dropdown-content">
                           <select>
                            <option value="Buddihism">Buddhism</option>
                            <option value="Tamil">Tamil</option>
                            <option value="Christian">Christian</option>
                           </select> 
                        </div>
                        </form>
                        </div>
                </div>
            </div>
            <br><br>
                </form>
                </div>
            </div>
            <div class="form1">
                <div class="category">
                    Educational Details
                </div>
                <div class="form-container">
                <form action="Vacancies.php">
                <div class="input">
                <label for="school">School/college:</label>
                <span class="school"><input name="school" id="school" type="text"></span>
                <br><br></div>
                <div class="input">
                <label for="qualification">Qualification:</label>
                <span class="qualification"><input name="qualification" id="qualification" type="text"></span>
                <br><br></div>
                <div class="input">
                <label for="time">Time Period:</label>
                <span class="time"><input name="time" id="time" type="text"></span>
                <br><br>
                </div>
                </form>
                </div>
            </div>
            <div class="form1">
                <form action="Vacancies.php">
                    <label for="name">Name :</label>
                    <input type="text" id="name" name="name">
                    <label for="date">Date :</label>
                    <input type="text" id="date" name="date">
                </form>
            </div>
            <div class="form1">
                <div class="category">
                    Add CV
                </div>
                <div class="form-container">
                <span class="submit">
                <input type="file" name="cv" id="cv">
                <input type="submit" style="padding:0.3rem;">
                </span>
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