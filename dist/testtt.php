<!-- HTML for the select element -->
<select id="mySelect">
  <option value="option1">Option 1</option>
  <option value="option2">Option 2</option>
  <option value="option4">Option 3</option>
</select>

<!-- HTML for the text input element, initially hidden -->
<input type="text" id="myTextInput" style="display:none">

<script>
  // Get references to the select and text input elements
  var select = document.getElementById("mySelect");
  var textInput = document.getElementById("myTextInput");

  // Add an event listener for when the select value changes
  select.addEventListener("change", function() {
    // If the selected value is "option1", show the text input
    if (select.value === "option4") {
      textInput.style.display = "block";
    } else {
      textInput.style.display = "none";
    }
  });
</script>
