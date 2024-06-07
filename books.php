<!DOCTYPE html>
<html>

<head>
    <!-- Created by Group-2 -->
    <meta charset="UTF-8">
    <title>Books</title>
    <!-- Styling sheet for books page-->
    <link rel="stylesheet" type="text/css" href="bookstyle.css">

</head>

<body>
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
    <h1>Book Sphere Books Page</h1>
    <!-- Form to search for books and submit buttons -->
    <p class="para">Tick the book you like and click on the favorites button to add it to your favorites list.</p>
    <form method="POST" action="#" class="search">
        <p><input id="search" name="search" type="text" placeholder="Type here">
            <input type="submit" value="Search" name="selectQuery">
            <a href="books.php">
                <input type="button" value="Reset">
            </a>
        </p>
        <p>
            <input type="button" value=" Favorites" id="fav_book" class="favbutton">
        </p>

    </form>
    <!-- Include inc_book.php to get Books details from Database-->
    <table id="book_table">
        <?php
        include('inc_book.php');

        ?>
    </table>
    <!-- Calling javascrip to create favorites list-->
    <script type="text/javascript" src="books.js"></script>
    <!-- Footer with about and contact information-->
    <footer>
        <nav>
            <a href="about.html" class="button"> About </a>
            <a href="contact.html" class="button"> Contact Us </a>
        </nav>
    </footer>

</body>

</html>