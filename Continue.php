<?php

for ($i = 10; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo "$i, ";
}

?>