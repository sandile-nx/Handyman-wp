<?php
// Establish database connection
$server = "localhost:3305";
$username = "root";
$password = "admin";
$dbname = "hmend";
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Function to sanitize user inputs
    function sanitizeInput($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    // Define variables and initialize with empty values
    $fullname = $emailaddress = $password = "";

    // Validate fullname
    if (empty($_POST['fullname'])) {
        $fullnameError = "Full Name is required";
    } else {
        $fullname = sanitizeInput($_POST['fullname']);
    }

    // Validate email
    if (empty($_POST['emailaddress'])) {
        $emailError = "Email Address is required";
    } elseif (!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
        echo '<script>alert("' . $emailError . '"); window.location.href = "sign_up.php";</script>';
        exit();
    } else {
        $emailaddress = sanitizeInput($_POST['emailaddress']);
    }

    // Validate password 
    if (empty($_POST['password'])) {
        $passwordError = "Password is required";
    } else {
        $password = sanitizeInput($_POST['password']);
    }

    // If all validations pass, check for duplicate email and insert user into the database
    if (empty($fullnameError) && empty($emailError) && empty($passwordError)) {
        // Check if the email already exists in the database
        $stmt = $conn->prepare("SELECT * FROM userInfo WHERE emailaddress = ?");
        $stmt->bind_param("s", $emailaddress);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Duplicate email found
            $signupError = "Email address is already in use";
            echo '<script>alert("' . $signupError . '"); window.location.href = "sign_up.php";</script>';
            exit();
        } else {
            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and execute the SQL statement to insert the user into the database
            $stmt = $conn->prepare("INSERT INTO userInfo (fullname, emailaddress, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $fullname, $emailaddress, $hashedPassword);
            $stmt->execute();

            // Redirect to a success page or perform further actions
            header("Location: sign_in.php");
            exit();
        }
    }
}
?>
