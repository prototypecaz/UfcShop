<?php

class Sanitizing {

    public function sanitizeString(string $string) : string {
        return (string) htmlentities(
            filter_var(
                $string, 
                FILTER_SANITIZE_STRING, 
                FILTER_FLAG_STRIP_HIGH
            )
        );
    }

    public function sanitizeInteger(int $integer) : int {
        return (int) filter_var(
            $integer, 
            FILTER_SANITIZE_NUMBER_INT
        );
    }

    public function sanitizeFloat(float $float) : float {
        return (float) filter_var(
            $float,
            FILTER_SANITIZE_NUMBER_FLOAT
        );
    }

}

/*
$sanitizing = (object) new Sanitizing();
*/

/*
var_dump(
    $sanitizing->sanitizeString("La description de mon article <script>alert()</script>")
);

var_dump(
    $sanitizing->sanitizeInteger(1)
);

var_dump(
    $sanitizing->sanitizeFloat(1.99)
);
*/

?>