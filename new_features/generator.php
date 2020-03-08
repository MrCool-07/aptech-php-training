<?php
function nums() {
    echo "The generator has started";

    for ($j = 6, $i = 0; $i < 5; ++$i) {     
        yield $i;
        yield $j;
        $j++;
    }
    echo "The generator has ended"; 
}

foreach (nums() as $v){
	echo "<br>".$v;
};