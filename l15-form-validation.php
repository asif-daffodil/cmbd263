<?php
if (isset($_POST['reg123'])) {
    $fullName = $_POST['fullName'];
    $userEmail = $_POST['userEmail'];
    $gender = $_POST['gender'] ?? null;
    $skills = $_POST['skills'] ?? [];

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

    if (isset($crrName) && isset($crrEmail) && isset($crrGender) && isset($crrSkills)) {
        $skillsStr = implode(", ", $crrSkills);
        $successMessage = "<span style='color: green'>Name: $crrName <br> Email: $crrEmail <br>Gender: $crrGender</span><br><span style='color: green'>Skills: $skillsStr</span>";
        $crrName = $crrEmail = $crrGender = $crrSkills = null;
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
    <button type="submit" name="reg123">Submit</button>
</form>

<?php
echo $successMessage ?? null;
?>