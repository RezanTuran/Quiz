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
                echo "Fråga 1 är rätt : $answer1<br>" ;
            }elseif($answer1 != "C"){
                echo "Fråga 1 är fel</br>";
            }
            if ($answer2 == "D") {
                 $totalCorrect++;
                 echo "Fråga 2 är rätt : $answer2<br>";
            }elseif($answer2 != "D"){
                echo "Fråga 2 är fel</br>";
            }
            if ($answer3 == "A") {
                 $totalCorrect++;
                echo "Fråga 3 är rätt : $answer3<br>";
            }elseif($answer3 != "A"){
                echo "Fråga 3 är fel</br>";
            }
            if ($answer4 == "D") {
                 $totalCorrect++; 
                 echo "Fråga 4 är rätt : $answer4<br>";
            }elseif($answer4 != "D"){
                echo "Fråga 4 är fel</br>";
            }
            if ($answer5 == "D") {
                 $totalCorrect++; 
                 echo "Fråga 5 är rätt : $answer5<br>";
            }elseif($answer5 != "D"){
                echo "Fråga 5 är fel</br>";
            }
            if ($answer6 == "A") { 
                $totalCorrect++;
                echo "Fråga 6 är rätt : $answer6<br>";
            }elseif($answer6 != "A"){
                echo "Fråga 6 är fel</br>";
            }
            if ($answer7 == "C") {
                 $totalCorrect++; 
                 echo "Fråga 7 är rätt : $answer7<br>";
            }elseif($answer7 != "C"){
                echo "Fråga 7 är fel</br>";
            }
            if ($answer8 == "B") {
                 $totalCorrect++;  
                 echo "Fråga 8 är rätt : $answer8<br>";
            }elseif($answer8 != "B"){
                echo "Fråga 8 är fel</br>";
            }
            if ($answer9 == "C") {
                 $totalCorrect++;
                echo "Fråga 9 är rätt : $answer9<br>";
            }
            elseif($answer9 != "C"){
                echo "Fråga 9 är fel</br>";
            }
            if ($answer10 == "B") {
                 $totalCorrect++;  
                 echo "Fråga 10 är rätt : $answer10<br>";
                }
            elseif($answer10 != "B"){
                echo "Fråga 10 är fel</br>";
            }

            setcookie('score', $totalCorrect, time()+60*60*24);
            echo "<br>";
            echo "<div id='results'><h4>$totalCorrect / 10 Rätt </h4></div>";
?>

<a href="index.php"><button>Tillbaka</button></a>
	