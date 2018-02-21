<?php
get_header();


$token = "\$kl1mc@ff00";

$lessons = json_decode(file_get_contents("hps://klimcaffee.clubplanner.be/api/planner/addReservation?token=" . $token . ""));
?>
BOEK
<?php
get_footer();
?>


