document.getElementById('admin-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('admin-email').value;
    const password = document.getElementById('admin-password').value;
    console.log(`Admin Logged In: ${email}`);
});

function viewAppointments() {
    alert("Displaying all appointments");
}

function scheduleAppointment() {
    alert("Schedule an appointment feature coming soon");
}

function searchTeacher() {
    alert("Searching for teachers");
}

function bookAppointment() {
    alert("Booking an appointment");
}