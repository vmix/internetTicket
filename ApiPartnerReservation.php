<?php

class ApiPartnerReservation extends LocalReservation
{
    private $min = 80000;
    private $max = 90000;

    public function reserveTickets($eventId)
    {
        parent::reserveTickets($eventId);
        echo "[$this->prefix] | Reserving ticket #" . $this->ticketId . " via API Partner Call" . '<br>';
    }
}