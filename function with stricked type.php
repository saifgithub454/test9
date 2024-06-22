<?php 

// Function null type hinting with Stricked function:

declare(strict_types=1);
    
function test2(?string $name){
    echo $name. "\n";
}
test2(null );
test2("Saif");
// test2(123);


// =====================================================
// End Function null type hinting with Stricked function.

?>