
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

            if ($answer1 == "C") { 
                $totalCorrect++; 
            }elseif($answer1 != "C"){
                echo "Fråga 1 är fel : Rätt svar är : $answer1<br>";
            }
            if ($answer2 == "D") {
                 $totalCorrect++;
            }elseif($answer2 != "D"){
                echo "Fråga 2 är fel : Rätt svar är : $answer2<br>";
            }
            if ($answer3 == "A") {
                 $totalCorrect++;
 
            }elseif($answer3 != "A"){
                echo "Fråga 3 är fel : Rätt svar är : $answer3<br>";
            }
            if ($answer4 == "B") {
                 $totalCorrect++; 
            }elseif($answer4 != "B"){
                echo "Fråga 4 är fel : Rätt svar är : $answer4<br>";
            }
            if ($answer5 == "D") {
                 $totalCorrect++; 
            }elseif($answer5 != "D"){
                echo "Fråga 5 är fel : Rätt svar är : $answer5<br>";
            }
            if ($answer6 == "A") { 
                $totalCorrect++;
  
            }elseif($answer6 != "A"){
                echo "Fråga 6 är fel : Rätt svar är : $answer6<br>";
            }
            if ($answer7 == "C") {
                 $totalCorrect++; 
            }elseif($answer7 != "C"){
                echo "Fråga 7 är fel : Rätt svar är : $answer7<br>";
            }
            if ($answer8 == "B") {
                 $totalCorrect++;  
            }elseif($answer8 != "B"){
                echo "Fråga 8 är fel : Rätt svar är : $answer8<br>";
            }
            if ($answer9 == "C") {
                 $totalCorrect++;
  
            }
            elseif($answer9 != "C"){
                echo "Fråga 9 är fel : Rätt svar är : $answer9<br>";
            }
            if ($answer10 == "B") {
                 $totalCorrect++;  
                }
            elseif($answer10 != "B"){
                echo "Fråga 10 är fel : Rätt svar är : $answer10<br>";
            }


            echo "<br>";
            echo "<div id='results'><h4>$totalCorrect / 10 Rätt </h4></div>";


?>
	