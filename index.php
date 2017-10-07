<?php
spl_autoload_register(function($class_name) {
    include_once "$class_name.php";
});

function defineType($eventId) {
    if ($eventId % 2 == 0) {
        return true;
    } else {
        return false;
    }

}

$eventIds = [14, 21, 587, 82];

foreach ($eventIds as $eventId) {
    $o = defineType($eventId) ? new LocalReservation($eventId) : new ApiPartnerReservation($eventId);
    $o->reserveTickets($eventId);
    $o->orderTicket();
    $o->sendEmail($eventId);
    echo "<h5>-----------------------------------------</h5>";
}