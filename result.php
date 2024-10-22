<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">My Exam System</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Name = $result['Name'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn-logout">Log Out</button> </a>

        </div>
    </div>


<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
</head>
<body>
    <div class="result">
        <h1>Your Exam Result</h1>
        <br/>

        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];


            $totalCorrect = 0;


            if ($answer1 == "A") {$totalCorrect++;}
            if ($answer2 == "B") {$totalCorrect++;}
            if ($answer3 == "B") {$totalCorrect++;}
            if ($answer4 == "C") {$totalCorrect++;}
            if ($answer5 == "A") {$totalCorrect++;}
            if ($answer6 == "D") {$totalCorrect++;}
            if ($answer7 == "B") {$totalCorrect++;}
            if ($answer8 == "B") {$totalCorrect++;}
            if ($answer9 == "B") {$totalCorrect++;}
            if ($answer10 == "B") {$totalCorrect++;}


            echo "<span><div id='results'> $totalCorrect / 10 correct answers</div></span>";
        ?>  
        <br />  
         <?php

         if ($totalCorrect == 10) {echo "Congratulations " . $res_Name . "! You passed the test.";}
         elseif ($totalCorrect == 8) {echo "You passed the exam!";}
         elseif ($totalCorrect >= 5) {echo "Good job, you passed the exam!";}
         else {echo "Sorry " . $res_Name . "!"." You failed the exam. :(";}

         ?>

         <br />

        &nbsp;
        &nbsp;
        &nbsp;
        
        <form action="test.php">
           <input type="submit" value="Retake Test" class="btn-logout">
        </form>

    </div>
    
</body>
</html>