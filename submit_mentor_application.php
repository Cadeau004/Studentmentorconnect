<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mentorName = $_POST["mentorName"];
    $mentorCategory = $_POST["mentorCategory"];
    $mentorExperience = $_POST["mentorExperience"];
    $mentorDescription = $_POST["mentorDescription"];

     // save the mentor's data to a database.

    // Redirect to a thank you page.
    header("Location: thank_you.html");
}
?>
