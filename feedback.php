<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="common.css">
</head>

<body>
    <div class="header">
        <nav>
            <a href="homePage.html" class="button">  Home  </a>
			<a href="books.php" class="button">  Books  </a>
			<a href="authors.php" class="button">  Authors  </a>
			<a href="recommendedPicks.php" class="button">  Recommended Picks  </a>
			<a href="favorites.html" class="button">  Favorites List  </a>
			<a href="stores.html" class="button">  Book Stores Near Me  </a>
			<a href="feedback.php" class="button">  Feedback  </a>
        </nav>
    </div>
    <h1 style='text-align:center;'>We would like to hear from you</h1>
    <form action="#" method="POST">
        <div class="phpForm">
            <h4 style="text-align: center; color:white;"> Add your comments, suggestions or feedback here</h4>
            <p style="text-align: center;">Name: <input name="name_input" placeholder="Enter your Name"></p>
            <p style="text-align: center;">Comment:<textarea name="feedback_input" rows="2" cols="30" placeholder="Enter your comments" ></textarea></p>
            <p style="text-align: center;"><input type="submit" name="feedback_submit" value="Submit Feedback"></p>
        </div>
    </form>
    <?php //PHP script to validate and process the form data
    $comment_file = fopen('./comments.txt', 'a');
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //checking if the method used is POST
        $user_comment = $_POST['feedback_input'];
        $name=$_POST['name_input'];
        if (trim($user_comment) != '' && trim($name != '')) { //Removing trailing and leading spaces if any on 
            addComment($name, $user_comment);
        }else{
            echo 'Please add your name and comments';
        }
    }
    function addComment($name, $user_comment)
    { //function is writing the comments to file comments.txt
        global $comment_file; 
        fwrite($comment_file, "$name|$user_comment\n");
        fclose($comment_file);
    }
    $comments = [];
    if(file_exists('./comments.txt')){
         $file = fopen('./comments.txt', 'r'); //opening file in read mode
        while ($line = fgets($file)) { //getting the contents of the file line by line
            if (str_contains($line, '|')){
                list($name, $user_comment) = explode('|', $line);
            }else{
            $user_comment=$line;
            echo "<div style='text-align:left; color: black; width:80%; padding: 5px; display: block; font-style: oblique; background-color: beige; border-radius: 5px; border-color:black; margin: 8px 0; border-style: inset; overflow-x:auto; '><p>".":".$user_comment . "</p><br></div>";
            }
            $comments[] = [
            'name' => $name,
            'user_comment' => $user_comment
            ];
        }
    }
    fclose($file);
    foreach ($comments as $line) {
        echo "<div id ='commentsBox' style='text-align:left; color: black; width:80%; padding: 5px; display: block; font-style: oblique; background-color: beige; border-radius: 5px; border-color:black; margin: 8px 0; border-style: inset; overflow-x:auto; '><p>" . $line['name'].":".$line['user_comment'] . "</p><br></div>";

    }
    ?>
    <!-- Defining Footer of the page -->
        <footer>
            <nav>
                <a href="about.html" class="button"> About </a>
                <a href="contact.html" class="button"> Contact Us </a>
            </nav>
        </footer>   	
	</body>
</html>