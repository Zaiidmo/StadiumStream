document.addEventListener("DOMContentLoaded", function () {
  // Get the modal element
  var modal = document.getElementById("modification-modal");

  // Get all buttons with class 'editteam'
  var editButtons = document.querySelectorAll(".editteam");

  // Add a click event listener to each 'editteam' button
  editButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      // Display the modal
      modal.classList.remove("hidden");

      // Get the team ID from the clicked button
      var teamId = button.dataset.team_id;

      // Assuming you have an input field in your form with the ID 'TeamID'
      var modalTeamIdInput = document.getElementById("TeamID");

      // Set the team ID in the modal form
      if (modalTeamIdInput) {
        modalTeamIdInput.value = teamId;
      }

      console.log("Team ID:", teamId);
    });
  });

  // Close the modal when the 'close' span is clicked
  var closeSpan = modal.querySelector(".close");
  if (closeSpan) {
    closeSpan.addEventListener("click", function () {
      modal.classList.add("hidden");
    });
  }

  // Handle form submission
  var modalForm = document.getElementById("yourModalFormId"); // Replace 'yourModalFormId' with the actual ID of your form
  if (modalForm) {
    modalForm.addEventListener("submit", function (event) {
      // Prevent the default form submission
      event.preventDefault();

      // Add your logic to handle the form data, for example, send it to the server using AJAX

      // Close the modal after form submission
      modal.classList.add("hidden");
    });
  }
});
