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
    <main>

    <div class="quiz-container">
        <div class="main-box top">
                    <div class="bottom">
                        <div class="box">
                            <p>Hello, <b><?php echo $res_Name ?>! </b> To pass this exam, please read the questions carefully. Good Luck!</p> 
                        </div>
                    </div> 
            </div>


        <!-- Questions -->


            <div class="questions">
                <!-- <h1>Exam | PHP Quiz</h1> -->
                <form action="result.php" method="post" id="quiz">
            
                    <ol>
                        <li>
                            <h4>What does HTML stand for?</h4> 
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
                                <label for="question-1-answers-A">A) HyperText Markup Language</label>
                            </div>
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B">
                                <label for="">B) HighText Markup Language</label>
                            </div>
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C">
                                <label for="">C) Hyperlink and Text Markup Language </label>
                            </div>
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D">
                                <label for="">D) HyperText Multilayer Language</label>
                            </div>
                        </li>
                        <li>
                        <h4>Which of the following is a CSS preprocessor?</h4>
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A">
                                <label for="question-2-answers-A">A) JavaScript</label>
                            </div>
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B">
                                <label for="">B) SASS </label>
                            </div>
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C">
                                <label for="">C) HTML </label>
                            </div>
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D">
                                <label for="">D) PHP</label>
                            </div>
                        </li>
                        <li>
                        <h4>What is the purpose of the div tag in HTML? </h4>
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A">
                                <label for="question-3-answers-A">A) To define a paragraph</label>
                            </div>
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B">
                                <label for="">B) To create a division or section in a document</label>
                            </div>
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C">
                                <label for="">C) To create a link </label>
                            </div>
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D">
                                <label for="">D) To embed an image</label>
                            </div>
                        </li>
                        <li>
                        <h4>Which HTTP method is used to retrieve data from a server?
</h4>
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A">
                                <label for="question-4-answers-A">A) POST</label>
                            </div>
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B">
                                <label for="">B) PUT</label>
                            </div>
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C">
                                <label for="">C) GET</label>
                            </div>
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D">
                                <label for="">D) DELETE</label>
                            </div>
                        </li>
                        <li>
                        <h4>What does CSS stand for?</h4>
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A">
                                <label for="question-5-answers-A">A) Cascading Style Sheets</label>
                            </div>
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B">
                                <label for="">B) Computer Style Sheetsor </label>
                            </div>
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C">
                                <label for="">C) Creative Style Sheets </label>
                            </div>
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D">
                                <label for="">D) Colorful Style Sheets</label>
                            </div>
                        </li>
                        <li>
                        <h4>Which of the following is used to create responsive web designs?</h4>
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A">
                                <label for="question-6-answers-A">A) Flexbox</label>
                            </div>
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B">
                                <label for="">B) Grid Layout </label>
                            </div>
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C">
                                <label for="">C) Media Queries </label>
                            </div>
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D">
                                <label for="">D) All of the above</label>
                            </div>
                        </li>
                        <li>
                        <h4>What is a common use for JavaScript?</h4>
                            <div>
                                <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A">
                                <label for="question-7-answers-A">A) Styling web pages</label>
                            </div>
                            <div>
                                <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B">
                                <label for="">B) Making web pages interactive </label>
                            </div>
                            <div>
                                <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C">
                                <label for="">C) Creating databases</label>
                            </div>
                            <div>
                                <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D">
                                <label for="">D) Hosting websites</label>
                            </div>
                        </li>
                        <li>
                        <h4>Which HTML attribute is used to specify the destination of a link?</h4>
                            <div>
                                <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A">
                                <label for="question-8-answers-A">A) src</label>
                            </div>
                            <div>
                                <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B">
                                <label for="">B) href</label>
                            </div>
                            <div>
                                <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C">
                                <label for="">C) target </label>
                            </div>
                            <div>
                                <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D">
                                <label for="">D) link</label>
                            </div>
                        </li>
                        <li>
                        <h4>What is the primary function of a web server?</h4>
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A">
                                <label for="question-9-answers-A">A) To create web pages
</label>
                            </div>
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B">
                                <label for="">B) To store and serve web content </label>
                            </div>
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C">
                                <label for="">C) To design websites</label>
                            </div>
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D">
                                <label for="">D) To manage databases</label>
                            </div>
                        </li>
                        <li>
                        <h4>Which of the following is a JavaScript framework?</h4>
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A">
                                <label for="question-5-answers-A">A) Django</label>
                            </div>
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B">
                                <label for="">B) React </label>
                            </div>
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C">
                                <label for="">C) Ruby on Rails  </label>
                            </div>
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D">
                                <label for="">D) Laravel</label>
                            </div>
                        </li>
                        
                    </ol>
                    <input type="submit" value="Submit" class="btn-submit">
                </form>
            </div>


    </div>

        
    </main>
</body>
</html>