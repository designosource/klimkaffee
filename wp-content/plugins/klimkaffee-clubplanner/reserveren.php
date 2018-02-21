<?php
get_header();

$token = "\$kl1mc@ff00";
$date = "02/21/2018";

$lessons = json_decode(file_get_contents("https://klimcaffee.clubplanner.be/api/planner/getcalendaritems?token=" . $token . "&id=1&date=" . $date . "&days=31"));

// voor al degene die deze code bekijken / editen, het spijt me. Er was weinig tijd :^)

?>
<div class="page-title"
     style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1428968941220-58e83e6096dd?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&dl=austin-ban-14620-unsplash.jpg&s=e5d2e435756df4768a268e1f8b12152c')">

    <h1 class="banner">RESERVEREN</h1>
    <h2 class="banner">Reserveer jou les nu</h2>
</div>
<div class="page-content page-trainingen">
    <div class="custom-container">
        <h1>Reserveren</h1>
        <?php foreach ($lessons as $lesson):
            if (empty($_GET['type'])) {
                ?>
                <div class="lesson-slot">
                    <h3><?php echo $lesson->Description ?></h3>
                    <p><b>Tijd:</b> <?php echo date('l N F o H:i', strtotime($lesson->StartTime)) ?>
                        <b>tot</b> <?php echo date('l N F o H:i', strtotime($lesson->StopTime)) ?> </p>
                    <p><b>Plaatsen vrij:</b> <?php echo $lesson->FreePlaces ?> plaatsen </p>
                    <p><b>Plaat:</b> <?php echo $lesson->RoomDescription ?></p>
                    <a class="red-btn red-text" href="/boek?les=<?php echo $lesson->Id ?>">Boek nu</a>
                </div>
                <?php
            } else {
                if ($lesson->Description == $_GET["type"]) {
                ?>
                <div class="lesson-slot">
                    <h3><?php echo $lesson->Description ?></h3>
                    <p><b>Tijd:</b> <?php echo date('l N F o H:i', strtotime($lesson->StartTime)) ?>
                        <b>tot</b> <?php echo date('l N F o H:i', strtotime($lesson->StopTime)) ?> </p>
                    <p><b>Plaatsen vrij:</b> <?php echo $lesson->FreePlaces ?> plaatsen </p>
                    <p><b>Plaat:</b> <?php echo $lesson->RoomDescription ?></p>
                    <a class="red-btn red-text" href="/boek?les=<?php echo $lesson->Id ?>">Boek nu</a>
                </div>
                <?php
            }
        }
        endforeach; ?>
    </div>
</div>

<?php
get_footer();
?>


