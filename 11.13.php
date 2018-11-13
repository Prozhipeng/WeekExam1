<?php


function sumn($n) {
        $r = 0;
        $n && ($r = (sumn($n - 1) + $n));
        return $r;
    }
 echo sumn(3);