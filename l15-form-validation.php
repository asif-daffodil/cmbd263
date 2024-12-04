<?php
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


if (isset($_POST['reg123'])) {
    $fullName = $_POST['fullName'];
    $userEmail = $_POST['userEmail'];
    $gender = $_POST['gender'] ?? null;
    $skills = $_POST['skills'] ?? [];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($fullName)) {
        $errName = "<span style='color:red'>Name is required</span>";
    } elseif (!preg_match("/^[A-Za-z.\- ]*$/", $fullName)) {
        $errName = "<span style='color:red'>Invalid name formate</span>";
    } else {
        $crrName = $fullName;
    }

    if (empty($userEmail)) {
        $errEmail = "<span style='color:red'>Email is required</span>";
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "<span style='color:red'>Invalid email formate</span>";
    } else {
        $crrEmail = $userEmail;
    }

    if (empty($gender)) {
        $errGender = "<span style='color:red'>Please select your gender</span>";
    } else {
        $crrGender = $gender;
    }

    if (count($skills) == 0) {
        $errSkills = "<span style='color:red'>Please select at least 1 skills</span>";
    } else {
        $crrSkills = $skills;
    }

    if (empty($country)) {
        $errCountry = "<span style='color:red'>Please select your country</span>";
    } else {
        $crrCountry = $country;
    }

    if (empty($password)) {
        $errPassword = "<span style='color:red'>Password is required</span>";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&+=]).{8,20}$/", $password)) {
        $errPassword = "<span style='color:red'>Password must be 8 to 20 characters long and contain at least one uppercase letter, one lowercase letter, one digit and one special character</span>";
    } else {
        $crrPassword = $password;
    }
    if (empty($confirmPassword)) {
        $errConfirmPassword = "<span style='color:red'>Confirm Password is required</span>";
    } elseif ($password != $confirmPassword) {
        $errConfirmPassword = "<span style='color:red'>Password and Confirm Password must be same</span>";
    } else {
        $crrConfirmPassword = $confirmPassword;
    }

    if (isset($crrName) && isset($crrEmail) && isset($crrGender) && isset($crrSkills) && isset($crrCountry) && isset($crrPassword) && isset($crrConfirmPassword)) {
        $skillsStr = implode(", ", $crrSkills);
        $encryptedPassword = password_hash($crrPassword, PASSWORD_DEFAULT);
        $successMessage = "<span style='color: green'>Name: $crrName <br> Email: $crrEmail <br>Gender: $crrGender <br>Skills: $skillsStr <br>Country : $country <br>And your passsword is $encryptedPassword</span>";
        $crrName = $crrEmail = $crrGender = $crrSkills = $crrCountry = $crrPassword = $crrConfirmPassword = null;
    }
}
?>

<form action="" method="post">
    <input type="text" name="fullName" placeholder="Write your name..." value="<?= $crrName ?? null ?>">
    <?= $errName ?? null ?>
    <br><br>
    <input type="text" name="userEmail" placeholder="Write your email..." value="<?= $crrEmail ?? null ?>">
    <?= $errEmail ?? null ?>
    <br><br>
    Gender :
    <label for="male">
        <input type="radio" value="Male" name="gender" id="male" <?= isset($crrGender) && $crrGender == "Male" ? "checked" : null ?>>Male
    </label>
    <label for="female">
        <input type="radio" value="Female" name="gender" id="female" <?= isset($crrGender) && $crrGender == "Female" ? "checked" : null ?> />Female
    </label>
    <?= $errGender ?? null ?>
    <br><br>
    Skills :
    <label for="html">
        <input type="checkbox" name="skills[]" value="HTML" id="html" <?= isset($crrSkills) && in_array("HTML", $crrSkills) ? "checked" : null ?> />HTML
    </label>
    <label for="css">
        <input type="checkbox" name="skills[]" value="CSS" id="css" <?= isset($crrSkills) && in_array("CSS", $crrSkills) ? "checked" : null ?> />CSS
    </label>
    <label for="js">
        <input type="checkbox" name="skills[]" value="JS" id="js" <?= isset($crrSkills) && in_array("JS", $crrSkills) ? "checked" : null ?> />JS
    </label>
    <label for="php">
        <input type="checkbox" name="skills[]" value="PHP" id="php" <?= isset($crrSkills) && in_array("PHP", $crrSkills) ? "checked" : null ?> />PHP
    </label>
    <?= $errSkills ?? null ?>
    <br><br>
    <select name="country" id="">
        <option value="">--Select Country--</option>
        <?php foreach ($countries as $ctr) { ?>
            <option value="<?= $ctr ?>" <?= isset($crrCountry) && $crrCountry == $ctr ? "selected" : null ?>><?= $ctr ?></option>
        <?php } ?>
    </select>
    <?= $errCountry ?? null ?>
    <br><br>
    <input type="password" placeholder="Your Password" name="password" value="<?= $crrPassword ?? null ?>">
    <?= $errPassword ?? null ?>
    <br><br>
    <input type="password" placeholder="Confirm Password" name="confirmPassword" value="<?= $crrConfirmPassword ?? null ?>">
    <?= $errConfirmPassword ?? null ?>
    <br><br>
    <button type="submit" name="reg123">Submit</button>
</form>

<?php
echo $successMessage ?? null;
?>