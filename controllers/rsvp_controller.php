<?php
require_once('/util.php');

class RsvpController {

    public function __construct() {}

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $success = Rsvp::saveRsvp();
            if ($success) {
                $config = include('/config.php');
                Util::redirect($config['host'] . '/rsvp/thankyou');
            }
        }
        require_once('views/rsvp/index.php');
    }

    public function thankyou() {
        require_once('views/rsvp/thankyou.php');
    }

}
?>
