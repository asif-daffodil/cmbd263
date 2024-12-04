<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 bg-secondary p-5 rounded-5 text-purple">
        <h2 class='text-center text-white'>Registration Form</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label font-weight-bold text-white">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label text-white">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label text-white">Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gender_male" name="gender[]" value="Male">
                    <label class="form-check-label" for="gender_male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gender_female" name="gender[]" value="Female">
                    <label class="form-check-label" for="gender_female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input " type="checkbox" id="gender_other" name="gender[]" value="Other">
                    <label class="form-check-label" for="gender_other">Other</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label text-white">Skills</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="skill_html" name="skills[]" value="HTML">
                    <label class="form-check-label" for="skill_html">HTML</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="skill_css" name="skills[]" value="CSS">
                    <label class="form-check-label" for="skill_css">CSS</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="skill_tailwind" name="skills[]" value="TAILWIND">
                    <label class="form-check-label" for="skill_tailwind">TAILWIND</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="skill_js" name="skills[]" value="JS">
                    <label class="form-check-label" for="skill_js">JS</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="skill_react" name="skills[]" value="REACT">
                    <label class="form-check-label" for="skill_react">REACT</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="skill_php" name="skills[]" value="PHP">
                    <label class="form-check-label" for="skill_php">PHP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="skill_wordpress" name="skills[]" value="WORDPRESS">
                    <label class="form-check-label" for="skill_wordpress">WORDPRESS</label>
                </div>
            </div>
            <div class="mb-3">
                <label for=" address" class="form-label text-white">Address</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label text-white">Country</label>
                <select class="form-select" id="country" name="country" required>
                    <option value="">Select Country</option>
                    <?php
                    $countries = [
                        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                        "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia",
                        "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso",
                        "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic",
                        "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic of the",
                        "Congo, Republic of the", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic",
                        "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador",
                        "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland",
                        "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada",
                        "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary",
                        "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica",
                        "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South",
                        "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya",
                        "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives",
                        "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia",
                        "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar",
                        "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                        "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine",
                        "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal",
                        "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia",
                        "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
                        "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore",
                        "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan",
                        "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan",
                        "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago",
                        "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates",
                        "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City",
                        "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
                    ];
                    foreach ($countries as $country) {
                        echo "<option value=\"$country\">$country</option>";
                    }
                    ?>
                </select>
            </div>
        <div class="mb-3">
                <label for="password" class="form-label text-white">Your Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label text-white">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary bg-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = [];
            $name = htmlspecialchars($_POST['name']);
            $age = htmlspecialchars($_POST['age']);
            $email = htmlspecialchars($_POST['email']);
            $gender = isset($_POST['gender']) ? $_POST['gender'] : [];
            $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
            $address = htmlspecialchars($_POST['address']);
            $country = htmlspecialchars($_POST['country']);
            $password = htmlspecialchars($_POST['password']);
            $confirm_password = htmlspecialchars($_POST['confirm_password']);

            // Validate required fields
            if (empty($name)) $errors[] = "Name is required.";
            if (empty($age)) $errors[] = "Age is required.";
            if (empty($email)) $errors[] = "Email is required.";
            if (empty($gender)) $errors[] = "At least one gender must be selected.";
            if (empty($skills)) $errors[] = "At least one skill must be selected.";
            if (empty($address)) $errors[] = "Address is required.";
            if (empty($country)) $errors[] = "Country is required.";
            if ($password !== $confirm_password) $errors[] = "Passwords do not match.";

            // Display errors or submitted information
            if (!empty($errors)) {
                echo "<div class='alert alert-danger mt-3 bg-danger'>";
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
                echo "</div>";
            } else {
                echo "<h3 class='text-center mt-5 mb-3 text-white'><u>Submitted Information:</u></h3>";
                echo "<ul class='list-group text-center'>";
                echo "<li class='list-group-item text-center'>Name: $name</li>";
                echo "<li class='list-group-item text-center'>Age: $age</li>";
                echo "<li class='list-group-item text-center'>Email: $email</li>";
                echo "<li class='list-group-item text-center'>Gender: " . implode(", ", $gender) . "</li>";
                echo "<li class='list-group-item text-center'>Skills: " . implode(", ", $skills) . "</li>";
                echo "<li class='list-group-item text-center'>Address: $address</li>";
                echo "<li class='list-group-item text-center'>Country: $country</li>";
                echo "</ul>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>