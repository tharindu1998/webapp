var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate() {
    var email = document.getElementById("mailId").value;
    var password = document.getElementById("pwdId").value;
    if (email == "admin@gmail.com" && password == "admin123") {
        alert("Login successfully");
        window.location = "success.html"; // Redirecting to other page.
        return false;
    }
    else {
        attempt--;// Decrementing by one.
        alert("You have left " + attempt + " attempt;");
        // Disabling fields after 3 attempts.
        if (attempt == 0) {
            document.getElementById("mailId").disabled = true;
            document.getElementById("pwdId").disabled = true;
            document.getElementById("submit").disabled = true;
            return false;
        }
    }
}