<?php

for ($code = 257; $code < 512; $code++) {
    $code1 = $code + 128;
    echo "<p>code ($code) = ".chr($code).
    "   code ({$code1}) = ".chr($code1);
}
?>