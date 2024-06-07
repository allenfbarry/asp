// Created by Group-2
// Function to get the selected books
function getSelected() {
  //Reference the Table.
  var grid = document.getElementById("book_table");
  //Reference the CheckBoxes in Table.
  var checkBoxes = grid.getElementsByTagName("INPUT");
  var message = " ";

  //Loop through the CheckBoxes.
  for (var i = 0; i < checkBoxes.length; i++) {
    if (checkBoxes[i].checked) {
      var row = checkBoxes[i].parentNode.parentNode;
      message += "<tr><td>";
      message += row.cells[0].innerHTML;
      message += "</td><td>";
      message += row.cells[1].innerHTML;
      message += "</td></tr>";
    }
  }
  // Storing selected books list in session storage
  window.sessionStorage.setItem("strvalue", message);
}

// Event Listner : Calls getSelected function when faviortes button is clicked.
document
  .getElementById("fav_book")
  .addEventListener("click", getSelected, false);
