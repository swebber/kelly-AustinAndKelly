<?php
class RsvpController {

    public function __construct() {}

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $success = Rsvp::saveRsvp();
            if ($success) {
                header('Location: http://austinandkelly.foo/rsvp/thankyou');
                die();
            }
        }
        require_once('views/rsvp/index.php');
    }

    public function thankyou() {
        require_once('views/rsvp/thankyou.php');
    }

}
?>
