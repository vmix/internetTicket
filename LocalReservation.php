<?php

class LocalReservation
{

    public $ticketId;
    public $orderId;
    public $eventId;
    protected $prefix = 'local';
    private $min = 99;
    private $max = 3000;

    public function __constructor($eventId) {
        $this->eventId = $eventId;
    }

    public function reserveTickets($eventId)
    {
        $this->ticketId = random_int($this->min, $this->max);
        defineType($eventId) ? $this->prefix = 'local' : $this->prefix = 'partnerApi';
        echo "[$this->prefix] | Creating object for event #" . $eventId . '<br>';
        echo "[$this->prefix] | Reserving ticket #" . $this->ticketId . '<br>';
    }

    public function orderTicket()
    {
        $this->orderId = random_int(10000, 90000);
        echo "[$this->prefix] | Order #" . $this->orderId . " created.<br>";
    }

    public function sendEmail($eventId)
    {
        echo "[$this->prefix] | Sending email notification: Order #" . $this->orderId . " created for event #" . $eventId . "<br>";
    }
}