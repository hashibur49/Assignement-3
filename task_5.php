<?php
function generatePassword($length) {
    $characters = 'U21pbGUgYW5kIGxldCBldmVyeW9uZSBrbm93IHRoYXQgdG9kYXksIHlvdeKAmXJlIGEgbG90IHN0cm9uZ2VyIHRoYW4geW91IHdlcmUgeWVzdGVyZGF5!@#$%^&*()_+';
    $password = '';

    $charCount = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        // Generate a random index within the range of valid characters
        $randomIndex = mt_rand(0, $charCount - 1);

        // Append the randomly selected character to the password
        $password .= $characters[$randomIndex];
    }

    return $password;
}

// Generate a 12-character password
$length = 12;
$password = generatePassword($length);

// Print the generated password
echo "Generated Password: $password\n";
?>
