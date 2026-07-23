<?php
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    echo "*";
    for ($u = 5; $u >= 1; $u--) {
        if ($i < $u):
            echo "*";
        else:
            echo "";
        endif;
    }
    echo "<br>";
}

echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    echo "*";
    for ($u = 5; $u >= 1; $u--) {
        if ($u < $i):
            echo "*";
        else:
            echo "";
        endif;
    }
    echo "<br>";
}

echo "<br> Ketiga <br>";

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br> Keempat <br>";

for ($x = 1; $x <= 5; $x++) {
    for ($z = 5; $z >= $x; $z--) {
        echo "1";
    }

    for ($y = 1; $y <= $x; $y++) {
        echo "* ";
    }

    echo "<br>";
}

for ($x = 1; $x <= 5; $x++) {
    for ($z = 5; $z > $x; $z--) {
        echo "  ";
    }

    for ($y = 1; $y <= $x; $y++) {
        echo "* ";
    }

    echo "<br>";
}
