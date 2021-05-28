<?php

session_start()
?>

<?php

require_once 'includes/connect.php';

$query = "SELECT * FROM resume_data WHERE type = 'editable'";
$result= mysqli_query($connect, $query) or die("error " . mysqli_error($connect));
$content = mysqli_fetch_array($result);
if(count($content) == 0){
    $query = "SELECT * FROM resume_data WHERE type = 'default'";
    $result= mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($connect));
    $content = mysqli_fetch_array($result);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesCV.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,900&display=swap" rel="stylesheet"> 
</head>

<body>


    <main>
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar__photo">
                    <img src="image/IMG_0001.jpg" alt="photo" width="150" height="150">
                </div>
                <div class="sidebar__contact">
                    <h2 class="nameOfColumn">CONTACT</h2>
                    <p><?php  echo $content['phone']?></p>
                    <p><?php  echo $content['email']?></p>
                    <p><?php  echo $content['city']?></p>
                    <a href="https://github.com/AleksKornev"><?php  echo $content['link']?></a>
                </div>
                <div class="sidebar__education">
                    <h2 class="nameOfColumn">EDUCATION</h2>
                    <p>ZNTU</p>
                    <p>Industrial machine engineering</p>
                    <p>Combustion engines</p>
                    <p>2009-2013</p>
                <div class="sidebar__skills"></div>
                <h2 class="nameOfColumn ">SKILLS</h2>
                <ul class="list">
                    <?php  echo $content['skillsArea']?>
                </ul>
            </div>
        </div>
            <div class="profileInformation">
                <div class="profileInformation__name">
                    <h1>Korniev Oleksandr</h1>
                    <h2>PHP Trainee</h2>
                </div>
                <div class="profileInformation__profile">
                    <h3>Profile</h3>
                    <p> <?php  echo $content['profileArea']?>
                    </p>
                </div>
                <div class="profileInformation__profExperience">
                    <h3>Professional Experience</h3>
                    <p><?php  echo $content['profExpArea']?></p>
                </div>
    
            </div>
            
        </div>



    </main>
    <script src="script.js"></script>
</body>
</html>