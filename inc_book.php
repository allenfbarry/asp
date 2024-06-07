<?php
//created by Group-2
//global variables for creating connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybooks";

// validating search text
if (isset($_POST['search'])) {
    $select = $_POST["search"];
} else {
    $select = "";
}
$result;

//SQL query to get books and authors information from database
$sql = "SELECT  books.name, books.genre, authors.name AS author, books.year_published, books.preface, books.cover_image FROM authors JOIN books ON authors.id = books.author_id ";

// Connect to MYSQL
// Create connection and connect to database:

$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->errno) {
    ("Connection failed: " . $connection->connect_error);
    echo "DBMS Connect failed - errno: " . $connection->errno . PHP_EOL;
    die("DBMS Connect failed - error: " . $connection->error . PHP_EOL);
}
// Run sql query if connection is success.
try {
    if (!($result = $connection->query($sql))) {
        throw new Exception("Select Query Failed " . $connection->error);
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
// Close connection
$connection->close();

?>
<?php
$books_array = array();
$str = "";
$i = 0;
$j = 0;
// Writing SQL query output to array.
while ($row = $result->fetch_assoc()) {
    $books_array[] = $row;
}

// Loop array to get the required attributes
foreach ($books_array as $v) {
    // Return requested book details
    if ($select != "") {
        $i++;
        if (strpos(strtolower($v['name']), strtolower($select)) !== false) {
            $str = "Name: " . $v['name'] . " <br>Genre: " . $v['genre'] . "<br>Author: " . $v['author'] . "<br>Published Year: " . $v['year_published'] . "<br>Preface: " . $v['preface'];
            $img_name = "images/" . $v['cover_image'] . ".png";
            echo "<tr><td><img src=" . $img_name . " alt=" . $v['name'] . "></td>";
            echo "<td>" . $str . "</td>";
            echo "<td><input type='checkbox' name='wishlist' id='fav'/> Add to wishlist</td></tr>";

            $j = 1;
        } else {

            if (($i >= count($books_array)) && ($j != 1)) {

                echo $select . " is not in our library.";
            }
        }
    } else {
        // Posts list of all books
        $str = "Name: " . $v['name'] . " <br>Genre: " . $v['genre'] . "<br>Author: " . $v['author'] . "<br>Published Year: " . $v['year_published'] . "<br>Preface: " . $v['preface'];
        $img_name = "images/" . $v['cover_image'] . ".png";
        echo "<tr><td><img src=" . $img_name . " alt=" . $v['name'] . "></td>";
        echo "<td>" . $str . "</td>";
        echo "<td><span id='phrase'></span>";
        echo "<td><input type='checkbox' name='wishlist' id='fav'/> Add to wishlist</td></tr>";
    }
}


?>