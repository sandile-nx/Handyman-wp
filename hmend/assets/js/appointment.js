document.getElementById("appointmentForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Get form values
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var date = document.getElementById("date").value;
  var time = document.getElementById("time").value;

  // Create appointment object
  var appointment = {
    name: name,
    email: email,
    date: date,
    time: time
  };

  // Save appointment to storage (you can replace this with your own logic)
  saveAppointment(appointment);

  // Display success message
  document.getElementById("appointmentResult").innerHTML = "Appointment submitted successfully!";
});

function saveAppointment(appointment) {
  // Implement your logic to save the appointment (e.g., send to server, store in local storage, etc.)
  // This is just a placeholder function for demonstration purposes
  console.log(appointment); // Print the appointment object to the console
}
