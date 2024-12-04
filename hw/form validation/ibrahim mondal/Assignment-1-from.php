<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container mt-5">
        <h2 class="mb-4">Registration Form</h2>

        <?php
       if (isset($_POST['reg123'])) {
        $fullName = $_POST['fullName'];
        $number = $_POST['number'];
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
    
        if (empty($number)) {
            $errNumber = "<span style='color:red'>Number is required</span>";
        } elseif (!preg_match("/^[0-9]{10}$/", $number)) {
            $errNumber = "<span style='color:red'>Invalid number formate</span>";
        } else {
            $crrNumber =  $number;
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
    
        if (isset($crrName) && isset($crrEmail) && isset($crrNumber) && isset($crrGender) && isset($crrSkills)) {
            $skillsStr = implode(", ", $crrSkills);
            $successMessage = "<span style='color: green'>Name: $crrName <br> Number: $crrNumber <br> Email: $crrEmail <br>Gender: $crrGender</span><br><span style='color: green'>Skills: $skillsStr</span>";
            $crrName = $crrNumber = $crrEmail = $crrGender = $crrSkills = null;
        }
    }
        ?>

        <form action="" method="post" class="needs-validation">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label> 
                <input type="text" name="fullName" class="form-control" placeholder="Write your name..." value="<?= $crrName ?? null ?>">
                <?= $errName ?? null ?>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone Number</label> 
                <input type="number" name="number" class="form-control" placeholder="Write your Phone number..." value="<?= $crrNumber ?? null ?>">
                <?= $errNumber ?? null ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="userEmail" placeholder="Write your email..." class="form-control" value="<?= $crrEmail ?? null ?>">
               <?= $errEmail ?? null ?>
            </div>
            <label for="male">
        <input type="radio" value="Male" name="gender" id="male" <?= isset($crrGender) && $crrGender == "Male" ? "checked" : null ?>> Male
    </label>
    <label for="female">
        <input type="radio" value="Female" name="gender" id="female" <?= isset($crrGender) && $crrGender == "Female" ? "checked" : null ?> /> Female
    </label>
    <?= $errGender ?? null ?>
    <br><br>
    Skills :
    <label for="html">
        <input type="checkbox" name="skills[]" value="HTML" id="html" <?= isset($crrSkills) && in_array("HTML", $crrSkills) ? "checked" : null ?> /> HTML
    </label>
    <label for="css">
        <input type="checkbox" name="skills[]" value="CSS" id="css" <?= isset($crrSkills) && in_array("CSS", $crrSkills) ? "checked" : null ?> /> CSS
    </label>
    <label for="js">
        <input type="checkbox" name="skills[]" value="JS" id="js" <?= isset($crrSkills) && in_array("JS", $crrSkills) ? "checked" : null ?> /> JS
    </label>
    <label for="react">
        <input type="checkbox" name="skills[]" value="react" id="react" <?= isset($crrSkills) && in_array("react", $crrSkills) ? "checked" : null ?> /> react
    </label>
    <label for="php">
        <input type="checkbox" name="skills[]" value="PHP" id="php" <?= isset($crrSkills) && in_array("PHP", $crrSkills) ? "checked" : null ?> /> PHP
    </label>
    <?= $errSkills ?? null ?>
    <br><br>
            <button type="submit" class="btn btn-primary" name="reg123">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php 
   echo $successMessage ?? null;
    ?>

