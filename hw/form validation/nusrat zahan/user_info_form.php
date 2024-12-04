<?php
// Define variables and initialize with empty values
$name = $email = $phone = $gender = $skills = $country = $password = "";
$nameErr = $emailErr = $phoneErr = $genderErr = $skillsErr = $countryErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation for Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[.a-zA-Z ]*$/", $name)) {
            $nameErr = "Invalid name format";
        }
    }

    // Validation for Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validation for Phone
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // Check if phone number is valid
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Invalid phone number format (should be 10 digits)";
        }
    }

    // Validation for Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // Validation for Skills
    if (empty($_POST["skills"])) {
        $skillsErr = "Skills are required";
    } else {
        $skills = test_input($_POST["skills"]);
    }

    // Validation for Country
    if (empty($_POST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = test_input($_POST["country"]);
    }

    // Validation for Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Check if password is strong
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }
}

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Validation</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">User Information Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate>
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control <?php echo !empty($nameErr) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?php echo $name; ?>" required>
                <div class="invalid-feedback"><?php echo $nameErr; ?></div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control <?php echo !empty($emailErr) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo $email; ?>" required>
                <div class="invalid-feedback"><?php echo $emailErr; ?></div>
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control <?php echo !empty($phoneErr) ? 'is-invalid' : ''; ?>" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                <div class="invalid-feedback"><?php echo $phoneErr; ?></div>
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender</label><br>
                <input type="radio" id="male" name="gender" value="Male" <?php echo ($gender == "Male") ? 'checked' : ''; ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female" <?php echo ($gender == "Female") ? 'checked' : ''; ?>>
                <label for="female">Female</label>
                <div class="invalid-feedback"><?php echo $genderErr; ?></div>
            </div>

            <!-- Skills -->
            <div class="mb-3">
                <label for="skills" class="form-label">Skills</label>
                <textarea class="form-control <?php echo !empty($skillsErr) ? 'is-invalid' : ''; ?>" id="skills" name="skills" required><?php echo $skills; ?></textarea>
                <div class="invalid-feedback"><?php echo $skillsErr; ?></div>
            </div>

            <!-- Country -->
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select <?php echo !empty($countryErr) ? 'is-invalid' : ''; ?>" id="country" name="country" required>
                    <option value="">Select a country</option>
                    <option value="USA" <?php echo ($country == "USA") ? 'selected' : ''; ?>>USA</option>
                    <option value="Canada" <?php echo ($country == "Canada") ? 'selected' : ''; ?>>Canada</option>
                    <option value="UK" <?php echo ($country == "UK") ? 'selected' : ''; ?>>UK</option>
                </select>
                <div class="invalid-feedback"><?php echo $countryErr; ?></div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control <?php echo !empty($passwordErr) ? 'is-invalid' : ''; ?>" id="password" name="password" required>
                <div class="invalid-feedback"><?php echo $passwordErr; ?></div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Include Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
