<?php session_start(); ?>

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

            $_SESSION['question-1-answers'] = $answer1;
            $_SESSION['question-2-answers'] = $answer2;
            $_SESSION['question-3-answers'] = $answer3;
            $_SESSION['question-4-answers'] = $answer4;
            $_SESSION['question-5-answers'] = $answer5;
            $_SESSION['question-6-answers'] = $answer6;
            $_SESSION['question-7-answers'] = $answer7;
            $_SESSION['question-8-answers'] = $answer8;
            $_SESSION['question-9-answers'] = $answer9;
            $_SESSION['question-10-answers'] = $answer10;


            $totalCorrect = 0;

            if ($answer1 == "C") { 
                $totalCorrect++;
                echo "<h5 style=color:green;>Fråga 1 är rätt : $answer1</h5>" ;
            }elseif($answer1 != "C"){
                echo "<h5 style=color:red;>Fråga 1 är fel </h5>";
            }
            if ($answer2 == "D") {
                 $totalCorrect++;
                 echo "<h5 style=color:green;>Fråga 2 är rätt : $answer2<h5>";
            }elseif($answer2 != "D"){
                echo "<h5 style=color:red;>Fråga 2 är fel</h5>";
            }
            if ($answer3 == "A") {
                 $totalCorrect++;
                echo "<h5 style=color:green;>Fråga 3 är rätt : $answer3</h5>";
            }elseif($answer3 != "A"){
                echo "<h5 style=color:red;>Fråga 3 är fel</h5>";
            }
            if ($answer4 == "D") {
                 $totalCorrect++; 
                 echo "<h5 style=color:green;>Fråga 4 är rätt : $answer4</h5>";
            }elseif($answer4 != "D"){
                echo "<h5 style=color:red;>Fråga 4 är fel</h5>";
            }
            if ($answer5 == "D") {
                 $totalCorrect++; 
                 echo "<h5 style=color:green;>Fråga 5 är rätt : $answer5</h5>";
            }elseif($answer5 != "D"){
                echo "<h5 style=color:red;>Fråga 5 är fel</h5>";
            }
            if ($answer6 == "A") { 
                $totalCorrect++;
                echo "<h5 style=color:green;>Fråga 6 är rätt : $answer6</h5>";
            }elseif($answer6 != "A"){
                echo "<h5 style=color:red;>Fråga 6 är fel</h5>";
            }
            if ($answer7 == "C") {
                 $totalCorrect++; 
                 echo "<h5 style=color:green;>Fråga 7 är rätt : $answer7</h5>";
            }elseif($answer7 != "C"){
                echo "<h5 style=color:red;>Fråga 7 är fel</h5>";
            }
            if ($answer8 == "B") {
                 $totalCorrect++;  
                 echo "<h5 style=color:green;>Fråga 8 är rätt : $answer8</h5>";
            }elseif($answer8 != "B"){
                echo "<h5 style=color:red;>Fråga 8 är fel</h5>";
            }
            if ($answer9 == "C") {
                 $totalCorrect++;
                echo "<h5 style=color:green;>Fråga 9 är rätt : $answer9</h5>";
            }
            elseif($answer9 != "C"){
                echo "<h5 style=color:red;>Fråga 9 är fel</h5>";
            }
            if ($answer10 == "B") {
                 $totalCorrect++;  
                 echo "<h5 style=color:green;>Fråga 10 är rätt : $answer10</h5>";
                }
            elseif($answer10 != "B"){
                echo "<h5 style=color:red;>Fråga 10 är fel</h5>";
            }

            setcookie('score', $totalCorrect, time()+60*60*24);
            echo "<br>";
            echo "<div id='results'><h4>$totalCorrect / 10 Rätt </h4></div>";
?>

<a href="index.php"><button>Tillbaka</button></a>
	