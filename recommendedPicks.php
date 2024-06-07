<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Created by Sri Sahith Lakkaraju -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Picks</title>
    <link rel="stylesheet" type="text/css" href="recommended.css">
</head>

<body>
    <h1>Book Sphere Recommends</h1>

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

    <div class="paragraph">
        <?php
        echo "<h3>Here are some of the recommendations that we think you will love. Do check them out and give them a reading.</h3>";
        echo "<p>Click on the book's cover image to visit Amazon and buy the book!"
        ?>
    </div>
    <!-- Display recommended picks for the user -->
    <div class="ourRecommends">
        <?php
        $mybooks = array(
            array("Dune", "Frank Herbert", "1965", "Set in the distant future amidst a feudal interstellar society, the novel tells the story of young Paul Atreides, whose noble family accepts the stewardship of the desert planet Arrakis.", "images/dune.png", "https://www.amazon.com/Dune-Frank-Herbert-ebook/dp/B00B7NPRY8/ref=pd_ci_mcx_mh_mcx_views_0?pd_rd_w=0rQBk&content-id=amzn1.sym.1bcf206d-941a-4dd9-9560-bdaa3c824953&pf_rd_p=1bcf206d-941a-4dd9-9560-bdaa3c824953&pf_rd_r=3P0KG1QBT2RDRZCTSDX0&pd_rd_wg=9q5Q8&pd_rd_r=589e768c-34a3-4a78-adb6-f6c54ba7d1aa&pd_rd_i=B00B7NPRY8"),
            array("A Game of Thrones", "George R.R. Martin", "1986", "The story of multiple houses in war for the Iron Throne of the Seven Kingdoms.", "images/agameofthrones.png", "https://www.amazon.com/Game-Thrones-Song-Fire-Book-ebook/dp/B004GJXQ20/ref=sr_1_1?keywords=a+game+of+thrones+book+1&qid=1681777193&s=digital-text&sprefix=a+game+of+thrones+%2Cdigital-text%2C116&sr=1-1"),
            array("Cloud Cuckoo Land", "Anthony Doerr", "2021", "The novel tells us the the stories of five people, from five different time periods whose lives are connected by an ancient manuscript.", "images/cloudcuckooland.png", "https://www.amazon.com/Cloud-Cuckoo-Land-prize-winning-stunning-ebook/dp/B08TRN6SD4/ref=sr_1_1?keywords=cloud+cuckoo+land&qid=1681777229&s=digital-text&sprefix=cloud+cuc%2Cdigital-text%2C131&sr=1-1"),
            array("All the Light We Cannot See", "Anthony Doerr", "2014", "The story of a blind French girl and a Germany boy during World War-II and how their paths eventually cross.", "images/allthelight.png", "https://www.amazon.com/All-Light-We-Cannot-See-ebook/dp/B00G1TOJ7Y/ref=sr_1_1?crid=2XFZL58ROC7W2&keywords=all+the+light+we+cannot+see&qid=1681777259&s=digital-text&sprefix=all+the+light+we+cannot+see%2Cdigital-text%2C139&sr=1-1"),
            array("1984", "George Orwell", "1949", "A dystopian novel that explores several themes like totalitarianism, government surveilance and psychological manipulation.", "images/1984.png", "https://www.amazon.com/1984-George-Orwell-ebook/dp/B07DBP8T2F/ref=sr_1_1?crid=3587KTQ0OOBCP&keywords=1984&qid=1681777279&s=digital-text&sprefix=1984%2Cdigital-text%2C136&sr=1-1")
        );

        echo "<div class='bookContainer'>";
        foreach ($mybooks as $book) {

            echo "<div class='book'>";
            echo "<h3>" . $book[0] . "</h3>";
            echo "<a href='" . $book[5] . "'><img src='" . $book[4] . "' alt='Book cover'></a>";
            echo "<p><strong>Author</strong>: " . $book[1] . "</p>";
            echo "<p><strong>Published Year</strong>: " . $book[2] . "</p>";
            echo "<h5>" . $book[3] . "</h5>";
            echo "</div>";
        }
        echo "</div>";
        ?>
    </div>
    <!-- Defining Footer of the page with about and contact details -->
    <footer>
        <nav>
            <a href="about.html" class="button"> About </a>
            <a href="contact.html" class="button"> Contact Us </a>
        </nav>
    </footer>
</body>

</html>