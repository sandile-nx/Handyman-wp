<?php
$server = "localhost:3305";
$username = "root";
$password = "admin";
$dbname = "hmend";
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to sanitize user inputs
function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate email
    if (empty($_POST['emailaddress'])) {
        $emailError = "Email Address is required";
    } elseif (!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    } else {
        $emailaddress = sanitizeInput($_POST['emailaddress']);
    }

    // Validate password
    if (empty($_POST['password'])) {
        $passwordError = "Password is required";
    } else {
        $password = sanitizeInput($_POST['password']);
    }

    // If all validations pass, check the user's credentials against the database
    if (empty($emailError) && empty($passwordError)) {
        // Prepare and execute the SQL statement to retrieve the user from the database
        $stmt = $conn->prepare("SELECT * FROM userInfo WHERE emailaddress = ?");
        $stmt->bind_param("s", $emailaddress);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Fetch the user row from the result
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Successful login
                // Start a session or perform other actions
                session_start();

                // Store user data in session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['emailaddress'];

                // Redirect to a welcome page or perform further actions
                header("Location: instructor_dashboard.php");
                exit();
            } else {
                // Invalid password
                $loginError = "Invalid email or password";
                echo '<script>alert("' . $loginError . '"); window.location.href = "sign_in.php";</script>';
                exit(); // Stop further script execution
            }
        } else {
            // User not found
            $loginError = "Invalid email or password";
            echo '<script>alert("' . $loginError . '"); window.location.href = "sign_in.php";</script>';
            exit(); // Stop further script execution
        }
    }
}

// Close the database connection
$conn->close();
?>
