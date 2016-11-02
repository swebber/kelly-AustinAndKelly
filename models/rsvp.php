<?php

require_once('/vendor/autoload.php');

use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;

class Rsvp {

    function __construct() {
        
    }

    public static function saveRsvp() {
        // get input data

        $guestNames = filter_input(INPUT_POST, 'guestNames', FILTER_SANITIZE_STRING);
        if ($guestNames !== null && strlen($guestNames) > 256) {
            $guestNames = substr($guestNames, 0, 256);
        }

        $isAttending = filter_input(INPUT_POST, 'willAttend', FILTER_VALIDATE_BOOLEAN);
        $needsTransport = filter_input(INPUT_POST, 'needTrans', FILTER_VALIDATE_BOOLEAN);

        $diet = filter_input(INPUT_POST, 'dietInfo', FILTER_SANITIZE_STRING);
        if ($diet !== null && strlen($diet) > 256) {
            $diet = substr($diet, 0, 256);
        }

        // save data to db

        try {
            $db = Db::getInstance();

            $stmt = $db->prepare('insert into rsvp (GuestNames, IsAttending, NeedsTransportation, DietaryRestrictions) values (:guestNames, :isAttending, :needsTransport, :diet)');
            $stmt->bindParam(':guestNames', $guestNames, PDO::PARAM_STR, 256);
            $stmt->bindParam(':isAttending', $isAttending, PDO::PARAM_BOOL);
            $stmt->bindParam(':needsTransport', $needsTransport, PDO::PARAM_BOOL);
            $stmt->bindParam(':diet', $diet, PDO::PARAM_STR, 255);

            $stmt->execute();
        } catch (Exception $ex) {

            // do nothing
        }

        // send data as email

        $config = include('/config.php');
        $client = new PostmarkClient($config['server_api_token']);
        $client::$VERIFY_SSL = $config['use_ssl'];

        $message = '<html><body>';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Guest Names:</strong> </td><td>" . $guestNames . "</td></tr>";
        $message .= "<tr><td><strong>Is Attending:</strong> </td><td>" . ($isAttending ? "Yes" : "No") . "</td></tr>";
        $message .= "<tr><td><strong>Transportation:</strong> </td><td>" . ($needsTransport ? "Yes" : "No") . "</td></tr>";
        $message .= "<tr><td><strong>Diet:</strong> </td><td>" . $diet . "</td></tr>";
        $message .= "</table>";
        $message .= "</body></html>";

        try {
            $client->sendEmail($config['from_addr'], $config['to_addr'], $config['subject'], $message);
        } catch (Exception $generalException) {
            // do nothing
        }
    }

}

?>
