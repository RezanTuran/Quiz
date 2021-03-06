<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/exam.png" /> <!-- ### Favicon ### -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- ### Fontawsome Icon Bibliotek ###-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- ### CDN Link For Jquery  ###-->
    <link rel="stylesheet" href="css/style.css">
    <script defer src="./js/main.js"></script>
    <title>Quiz</title>
</head>
<body>

<?php
        function isChecked($questionId, $answerId) {
            if ($_SESSION[$questionId] === $answerId ) {
                return "checked";
            } else {
                return "";
            }
        }
?> 

<form action="./result.php" method="post" id="quiz">
    
    <h1>Simple Quiz Built On PHP</h1>
    
    <ol>
            
            <li>
            
                <h3>WordPress är en...</h3>
                
                <div>
                    <input type="radio" name="question-1-answers" <?= isChecked('question-1-answers', 'A') ?> id="question-1-answers-A" value="A" required />
                    <label for="question-1-answers-A">A) Software </label>
                </div>
                
                <div>
                    <input type="radio" name="question-1-answers" <?= isChecked('question-1-answers', 'B') ?> id="question-1-answers-B" value="B" required />
                    <label for="question-1-answers-B">B) Web App</label>
                </div>
                
                <div>
                    <input type="radio" name="question-1-answers" <?= isChecked('question-1-answers', 'C') ?> id="question-1-answers-C" value="C" required />
                    <label for="question-1-answers-C">C) CMS</label>
                </div>
                
                <div>
                    <input type="radio" name="question-1-answers" <?= isChecked('question-1-answers', 'D') ?> id="question-1-answers-D" value="D" required />
                    <label for="question-1-answers-D">D) Övrigt</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>Vad är SEO ?</h3>
                
                <div>
                    <input type="radio" name="question-2-answers" <?= isChecked('question-2-answers', 'A') ?> id="question-2-answers-A" value="A"  required/>
                    <label for="question-2-answers-A">A) Video Editing</label>
                </div>
                
                <div>
                    <input type="radio" name="question-2-answers" <?= isChecked('question-2-answers', 'B') ?> id="question-2-answers-B" value="B" required />
                    <label for="question-2-answers-B">B) Graphic Designing</label>
                </div>
                
                <div>
                    <input type="radio" name="question-2-answers" <?= isChecked('question-2-answers', 'C') ?> id="question-2-answers-C" value="C" required />
                    <label for="question-2-answers-C">C) Web Designing</label>
                </div>
                
                <div>
                    <input type="radio" name="question-2-answers" <?= isChecked('question-2-answers', 'D') ?> id="question-2-answers-D" value="D"  required/>
                    <label for="question-2-answers-D">D) Digital Marketing</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>PHP är en....</h3>
                
                <div>
                    <input type="radio" name="question-3-answers" <?= isChecked('question-3-answers', 'A') ?> id="question-3-answers-A" value="A" required/>
                    <label for="question-3-answers-A">A) Server Sida Script</label>
                </div>
                
                <div>
                    <input type="radio" name="question-3-answers" <?= isChecked('question-3-answers', 'B') ?> id="question-3-answers-B" value="B" required/>
                    <label for="question-3-answers-B">B) Programmering språk</label>
                </div>
                
                <div>
                    <input type="radio" name="question-3-answers" <?= isChecked('question-3-answers', 'C') ?> id="question-3-answers-C" value="C" required/>
                    <label for="question-3-answers-C">C) Markup Language</label>
                </div>
                
                <div>
                    <input type="radio" name="question-3-answers" <?= isChecked('question-3-answers', 'D') ?> id="question-3-answers-D" value="D" required/>
                    <label for="question-3-answers-D">D) None Of Above These</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>Localhost IP är..</h3>
                
                <div>
                    <input type="radio" name="question-4-answers" <?= isChecked('question-4-answers', 'A') ?> id="question-4-answers-A" value="A" required/>
                    <label for="question-4-answers-A">A) 192.168.0.1</label>
                </div>
                
                <div>
                    <input type="radio" name="question-4-answers" <?= isChecked('question-4-answers', 'B') ?> id="question-4-answers-B" value="B" required/>
                    <label for="question-4-answers-B">B) 127.0.0.0</label>
                </div>
                
                <div>
                    <input type="radio" name="question-4-answers" <?= isChecked('question-4-answers', 'C') ?> id="question-4-answers-C" value="C" required/>
                    <label for="question-4-answers-C">C) 1080:80</label>
                </div>
                
                <div>
                    <input type="radio" name="question-4-answers" <?= isChecked('question-4-answers', 'D') ?> id="question-4-answers-D" value="D" required/>
                    <label for="question-4-answers-D">D) Any Other</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>Webdevtrick är för...</h3>
                
                <div>
                    <input type="radio" name="question-5-answers" <?= isChecked('question-5-answers', 'A') ?> id="question-5-answers-A" value="A" required/>
                    <label for="question-5-answers-A">A) Web Designer</label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" <?= isChecked('question-5-answers', 'B') ?> id="question-5-answers-B" value="B" required/>
                    <label for="question-5-answers-B">B) Web Developer</label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" <?= isChecked('question-5-answers', 'C') ?> id="question-5-answers-C" value="C" required/>
                    <label for="question-5-answers-C">C) Graphic Designer</label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" <?= isChecked('question-5-answers', 'D') ?> id="question-5-answers-D" value="D" required/>
                    <label for="question-5-answers-D">D) All Above These</label>
                </div>
            
            </li>

            <li>
            
                <h3>HTML står för...</h3>
                
                <div>
                    <input type="radio" name="question-6-answers" <?= isChecked('question-6-answers', 'A') ?> id="question-6-answers-A" value="A" required/>
                    <label for="question-6-answers-A">A) HyperText Markup Language</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" <?= isChecked('question-6-answers', 'B') ?> id="question-6-answers-B" value="B" required/>
                    <label for="question-6-answers-B">B) Hyper Markup Language</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" <?= isChecked('question-6-answers', 'C') ?> id="question-6-answers-C" value="C" required/>
                    <label for="question-6-answers-C">C) Hypertext Transfer Protocol</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" <?= isChecked('question-6-answers', 'D') ?> id="question-6-answers-D" value="D" required/>
                    <label for="question-6-answers-D">D) HyperTex</label>
                </div>
            
            </li>

            <li>
            
                <h3>HTTP står för...</h3>
                
                <div>
                    <input type="radio" name="question-7-answers" <?= isChecked('question-7-answers', 'A') ?> id="question-7-answers-A" value="A" required/>
                    <label for="question-7-answers-A">A) HyperText Markup Language</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" <?= isChecked('question-7-answers', 'B') ?>  id="question-7-answers-B" value="B" required/>
                    <label for="question-7-answers-B">B) Hyper Markup Language</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" <?= isChecked('question-7-answers', 'C') ?>  id="question-7-answers-C" value="C" required/>
                    <label for="question-7-answers-C">C) Hypertext Transfer Protocol</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" <?= isChecked('question-7-answers', 'D') ?>  id="question-7-answers-D" value="D" required/>
                    <label for="question-7-answers-D">D) HyperTex</label>
                </div>
            
            </li>

            <li>
            
                <h3>Vad är Bootstrap ?</h3>
                
                <div>
                    <input type="radio" name="question-8-answers" <?= isChecked('question-8-answers', 'A') ?>  id="question-8-answers-A" value="A"required />
                    <label for="question-8-answers-A">A) Javascript Biblioteket</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" <?= isChecked('question-8-answers', 'B') ?> id="question-8-answers-B" value="B" required/>
                    <label for="question-8-answers-B">B) CSS Biblioteket</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" <?= isChecked('question-8-answers', 'C') ?> id="question-8-answers-C" value="C" required/>
                    <label for="question-8-answers-C">C) Programmerings språk</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" <?= isChecked('question-8-answers', 'D') ?> id="question-8-answers-D" value="D" required/>
                    <label for="question-8-answers-D">D) Markup Language</label>
                </div>
            
            </li>

            <li>
            
                <h3>Vem äger react ?</h3>
                
                <div>
                    <input type="radio" name="question-9-answers" <?= isChecked('question-9-answers', 'A') ?> id="question-9-answers-A" value="A" required/>
                    <label for="question-9-answers-A">A) Microsoft</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" <?= isChecked('question-9-answers', 'B') ?> id="question-9-answers-B" value="B" required/>
                    <label for="question-9-answers-B">B) Twitter</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" <?= isChecked('question-9-answers', 'C') ?> id="question-9-answers-C" value="C" required/>
                    <label for="question-9-answers-C">C)Facebook</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" <?= isChecked('question-9-answers', 'D') ?> id="question-9-answers-D" value="D" required/>
                    <label for="question-9-answers-D">D) Bill Gates</label>
                </div>
            
            </li>

            <li>
            
                <h3>Vilken av de är en javascript ramverk ?</h3>
                
                <div>
                    <input type="radio" name="question-10-answers" <?= isChecked('question-10-answers', 'A') ?> id="question-10-answers-A" value="A" required/>
                    <label for="question-10-answers-A">A) Laravel</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" <?= isChecked('question-10-answers', 'B') ?> id="question-10-answers-B" value="B" required/>
                    <label for="question-10-answers-B">B) Vue</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" <?= isChecked('question-10-answers', 'C') ?> id="question-10-answers-C" value="C" required/>
                    <label for="question-10-answers-C">C) Flask</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" <?= isChecked('question-10-answers', 'D') ?> id="question-10-answers-D" value="D" required/>
                    <label for="question-10-answers-D">D) .Net</label>
                </div>
            
            </li>
        
        </ol>
        
        <input type="submit" name="score" value="Submit" id="submit-btn" />
    
    </form>     

</body>
</html>
