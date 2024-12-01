<?php
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$specialChars = '!@#$%^&*()_+{}|:?';

$shuffledUppercase = str_shuffle($uppercase);
$getFirstTwouppercase = substr($shuffledUppercase, 0, 2);

$shuffledLowercase = str_shuffle($lowercase);
$getFirstTwolowercase = substr($shuffledLowercase, 0, 2);

$shuffledNumbers = str_shuffle($numbers);
$getFirstTwonumbers = substr($shuffledNumbers, 0, 2);

$shuffledSpecialChars = str_shuffle($specialChars);
$getFirstTwospecialChars = substr($shuffledSpecialChars, 0, 2);

$randomPass = $getFirstTwouppercase . $getFirstTwolowercase . $getFirstTwonumbers . $getFirstTwospecialChars;

$randomPass = str_shuffle($randomPass);

echo "Random password is: $randomPass <br>";

// unique random password
$uniqueRandomPass = uniqid();
echo "Unique random password is: $uniqueRandomPass <br>";

// random number
$randomNumber = rand(1000, 9999);
echo "Random number is: $randomNumber <br>";

?>

<button id="reloadBtn">Reload</button>

<script>
    const reloadBtn = document.getElementById('reloadBtn');
    const reloadFunc = () => {
        location.reload();
    }
    reloadBtn.addEventListener('click', reloadFunc);
</script>