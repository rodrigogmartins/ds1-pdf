<?php

    class Cookie {

        public function criar($name, $value, $time) {
            $cookie_name = $name;
            $cookie_value = $value;
            setcookie($cookie_name, $cookie_value, time() + $time, "/");
        }

    }

?>