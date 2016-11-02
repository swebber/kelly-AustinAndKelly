<?php

require_once('/vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;

class Home {

    function __construct() {
        
    }

    public static function all() {

        $list = [];
        $db = Db::getInstance();
        return $list;
    }

    public static function sendTestEmail() {
        $config = include('/config.php');
        $client = new PostmarkClient($config['server_api_token']);
        $client::$VERIFY_SSL = $config['use_ssl'];
        
        try {
            $sendResult = $client->sendEmail(
                    'webmaster@notss.com', 'scott@teagan.org', 'Test - Subject', 'Body - Hello from Postmark');
            return true;
        } catch (PostmarkException  $ex) {
            return false;
        } catch (Exception $generalException) {
            return false;
        }
    }

}
