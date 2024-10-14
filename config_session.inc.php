<?php
    ini_set('session.use_only_cookies',1);
    ini_set('session.use_strict_mode',1);
    //  Cookies are set to perform the session to last for some period of time
    // Here the session lasts for 30 minutes
    session_set_cookie_params([
        'lifetime' =>1800,
        'domain' => 'localhost',
        'path' =>'/',
        'secure' => true,
        'httponly' =>true
    ]);
    // starting the session
    session_start();
    if(!isset($_SESSION["last_regeneration_id"])) {
        session_regenerate_id();
        $_SESSION["last_regeneration_id"] = time();
    }
    else{
        $interval = 60 * 30;
        if(time() - $_SESSION["last_regeneration_id"] >= $interval) {
            regenerate_session_id();
        }
    }
    function regenerate_session_id() {
        session_regenerate_id();
        $_SESSION["last_regeneration_id"] = time();
    }