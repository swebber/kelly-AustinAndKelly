<?php
class HomeController {

    public function __construct() {}
    
    public function index() {
        $carouselList = Home::all();
        require_once('views/home/index.php');
    }
    
    public function error() {
        require_once('views/home/error.php');
    }
    
    public function email_test() {
        $mailSuccess = Home::sendTestEmail();
        require_once('views/home/email-test.php');
    }

}
?>