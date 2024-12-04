<?php 

    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


    if (isset($_POST['submitBtn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $gender = $_POST['gender'] ?? null;
        $skills = $_POST['skills'] ?? [];
        $country = $_POST['country'];


        if (empty($name)) {
            $errorName = "<span style='color:red'> Name is required </span>";
        } else if (!preg_match("/^[A-Za-z.\-]*$/", $name)) {
            $errorName = "<span style='color:red'> Name is required </span>";
        } else {
            $correctName = $name;
        }

        if (empty($email)) {
            $errorEmail = "<span style='color:red'> Email is required </span>";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorEmail = "<span style='color:red'> Invalid email </span>";
        } else {
            $correctEmail = $email;
        }

        if (empty($password)) {
            $errorPassword = "<span style='color:red'> Password is required </span>";
        } else if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&+=]).{6,20}$/", $password)) {
            $errorPassword = "<span style='color:red'> Password is required </span>";
        } else {
            $correctPassword = $password;
        }

        if (empty($confirmPassword)) {
            $errorConfirmPassword = "<span style='color:red'> Confirm password is required </span>";
        } else if ($confirmPassword != $password) {
            $errorConfirmPassword = "<span style='color:red'> Password & Confirm password must be same </span>";
        } else {
            $correctConfirmPassword = $confirmPassword;
        }

        if (empty($gender)) {
            $errorGender = "<span style='color:red'> Please select gender </span>";
        } else {
            $correctGender = $gender;
        }

        if (count($skills) == 0) {
            $errorSkills = "<span style='color:red'> Please select at least 1 skill </span>";
        } else {
            $correctSkills = $skills;
        }

        if (empty($country)) {
            $errorCountry = "<span style='color:red'> Please select country </span>";
        } else {
            $correctCountry = $country;
        }



        if (isset($correctName) && isset($correctEmail) && isset($correctPassword) && isset($correctConfirmPassword) && isset($correctGender) && isset($correctSkills)) {
            $skillArrToString = implode(", ", $correctSkills);
            $encryptedPassword = password_hash($correctPassword, PASSWORD_DEFAULT);

            $successMessage = "<span style='color:black'> Name : $correctName <br> Email : $correctEmail <br> Gender : $correctGender <br> Skills : $skillArrToString <br> Country : $correctCountry <br> Your password is : $encryptedPassword <br> </span>";

            $correctName = $correctEmail = $correctPassword = $correctConfirmPassword = $correctGender = $correctSkills = $correctCountry = null;
        }
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="w-75 p-4 h-75 mx-auto bg-primary-subtle">
        <form action="" method="post">
            <input class="w-50 px-2 py-1 border border-dark-subtle rounded" type="text" name="name" placeholder="Fullname" value="<?= $correctName ?? null ?>">
            <?= $errorName ?? null ?>
            <br> <br>

            <input class="w-50 px-2 py-1 border border-dark-subtle rounded" type="text" name="email" placeholder="Email" value="<?= $correctEmail ?? null ?>">
            <?= $errorEmail ?? null ?>
            <br> <br>

            <input class="w-50 px-2 py-1 border border-dark-subtle rounded" type="password" name="password" placeholder="Password" value="<?= $correctPassword ?? null ?>">
            <?= $errorPassword ?? null ?>
            <br> <br>

            <input class="w-50 px-2 py-1 border border-dark-subtle rounded" type="password" name="confirmPassword" placeholder="Confirm Password" value="<?= $correctConfirmPassword ?? null ?>">
            <?= $errorConfirmPassword ?? null ?>
            <br> <br>

            Gender :
            <label for="male">
                <input type="radio" name="gender" id="male" value="Male" <?= isset($correctGender) && $correctGender == "Male" ? "checked" : null ?>>Male
            </label>
            <label for="female">
                <input type="radio" name="gender" id="female" value="Female" <?= isset($correctGender) && $correctGender == "Female" ? "checked" : null ?>>Female
            </label>
            <?= $errorGender ?? null ?>
            <br> <br>

            Skills :
            <label for="html">
                <input type="checkbox" name="skills[]" value="HTML" id="html" <?= isset($correctSkills) && in_array("HTML", $correctSkills) ? "checked" : null ?>>HTML
            </label>
            <label for="css">
                <input type="checkbox" name="skills[]" value="CSS" id="css" <?= isset($correctSkills) && in_array("CSS", $correctSkills) ? "checked" : null ?>>CSS
            </label>
            <label for="js">
                <input type="checkbox" name="skills[]" value="JS" id="js" <?= isset($correctSkills) && in_array("JS", $correctSkills) ? "checked" : null ?>>JS
            </label>
            <label for="php">
                <input type="checkbox" name="skills[]" value="PHP" id="php" <?= isset($correctSkills) && in_array("PHP", $correctSkills) ? "checked" : null ?>>PHP
            </label>
            <?= $errorSkills ?? null ?>
            <br> <br>

            <select name="country" id="">
                <option value="">--Select Country--</option>
                <?php foreach($countries as $cntry) { ?>
                    <option value="<?= $cntry ?>" <?= isset($correctCountry) && $correctCountry == $cntry ? "selected" : null ?>><?= $cntry ?></option>
                <?php } ?>
            </select>
            <?= $errorCountry ?? null ?>
            <br> <br>

            <button class="border-0 rounded text-white bg-primary px-2 py-1" type="submit" name="submitBtn">Submit</button>
        </form>
        <br> <br>

        <?php 
            echo $successMessage ?? null;
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    

  </body>
</html>

