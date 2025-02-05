<?php
namespace App\Core;

class Session {
    public function __construct() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }


    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }


    public function destroy() {
        session_unset();
        session_destroy();
    }
}
?>
