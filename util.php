<?php
class Util {
    public static function redirect($url, $permanent = false) {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        die();
    }
    
    public static function addLateLoadScript($script) {
        if (!isset($_SESSION['lateLoadScripts'])) {
            $_SESSION['lateLoadScripts'] =[];
        }
        $_SESSION['lateLoadScripts'][] = $script;
    }
    
    public static function getLateLoadScripts() {
        $scripts = [];
        if (isset($_SESSION['lateLoadScripts'])) {
            $scripts = $_SESSION['lateLoadScripts'];
            unset($_SESSION['lateLoadScripts']);
        }
        return $scripts;
    }
}
?>
