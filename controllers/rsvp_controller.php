<?php
require_once('util.php');

class RsvpController {

    public function __construct() {}

    public function index() {
        $isPostBack = ($_SERVER['REQUEST_METHOD'] == 'POST');
        if ($isPostBack) {
            Rsvp::saveRsvp();
        }
        require_once('views/rsvp/index.php');
    }

}
?>
