<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Created by Group-2 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
    <!-- Styling sheet for authors page -->
    <link rel="stylesheet" type="text/css" href="authors.css">
</head>

<body>
    <h1>Book Sphere Authors</h1>

    <div class="header">
        <!-- Navigation bar -->
        <nav>
            <a href="homePage.html" class="button"> Home </a>
            <a href="books.php" class="button"> Books </a>
            <a href="authors.php" class="button"> Authors </a>
            <a href="recommendedPicks.php" class="button"> Recommended Picks </a>
            <a href="favorites.html" class="button"> Favorites List </a>
            <a href="stores.html" class="button"> Book Stores Near Me </a>
            <a href="feedback.php" class="button"> Feedback </a>
        </nav>
    </div>
    <!-- Buttons for all of the authors -->
    <h2> Click on any of the author's names below to display their books.</h2>
    <form method="POST" action="" class="buttons">
        <div class="buttonContainer">
            <div class="authorRow">
                <input type="submit" id="fhButton" name="author" value="Frank Herbert">
                <input type="submit" id="jkButton" name="author" value="J.K.Rowling">
                <input type="submit" id="grrButton" name="author" value="George R.R. Martin">
            </div>
            <div class="authorRow">
                <input type="submit" id="adButton" name="author" value="Anthony Doerr">
                <input type="submit" id="goButton" name="author" value="George Orwell">
                <input type="submit" id="ahButton" name="author" value="Arthur Hailey">
            </div>
            <div class="authorRow">
                <input type="submit" id="ecButton" name="author" value="Ernest Cline">
                <input type="submit" id="gfbutton" name="author" value="Gillian Flynn">
                <input type="submit" id="dbButton" name="author" value="Dan Brown">
            </div>
            <div class="authorRow">
                <input type="submit" id="msButton" name="author" value="Mary Shelley">
                <input type="submit" id="sjButton" name="author" value="Shirley Jackson">
                <input type="submit" id="skButton" name="author" value="Stephen King">
            </div>
        </div>
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mybooks";

    //establishing connection using the credentials
    $connection = new mysqli($servername, $username, $password, $dbname);

    //checking if the connection has been established
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //checking to see if the author is selected and running the if loops to get the author's books into an array and then print it into a table.
    if (isset($_POST['author'])) {
        // Escape user input to prevent SQL injection
        $author = $connection->real_escape_string($_POST['author']);

        echo "<p>The author you have selected : <strong>$author</strong></p>";
        // Query the database to retrieve the books of the selected author
        $sql = "SELECT * FROM books WHERE books.author_id=(select id from authors where authors.name='$author')";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // Display the books in a table
            echo "<table><tr><th>Title</th><th>Year</th><th>Description</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td><strong>" . $row["name"] . "</strong></td><td>" . $row["year_published"] . "</td><td>" . $row["preface"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No books found for author '$author'";
        }
    }


    // Close connection
    $connection->close();
    ?>
    <!-- Defining Footer of the page with about and contact details -->
    <footer>
        <nav>
            <a href="about.html" class="button"> About </a>
            <a href="contact.html" class="button"> Contact Us </a>
        </nav>
    </footer>
</body>

</html>