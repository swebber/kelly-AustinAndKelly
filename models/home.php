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
        $client::$VERIFY_SSL = false;
        
        $sendResult = null;
        
        try {
            $sendResult = $client->sendEmail(
                    'webmaster@notss.com', 'scott@teagan.org', 'Test - Subject', 'Body - Hello from Postmark');
        } catch (PostmarkException  $ex) {
            var_dump($ex);
        } catch (Exception $generalException) {
            var_dump($generalException);
        }
        
        return $sendResult;
    }

}
