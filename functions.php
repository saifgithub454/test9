<?php 

/*===========================================================
                        PHP Function
============================================================*/

// Function is a set of program.

/*===========================================================
                    1. PHP Built-in Function:
============================================================*/

    $variable = "Saiful";
    echo strlen($variable);

    echo "\n";



/*===========================================================
                2. PHP User defined Function:
============================================================*/

// Basic user defined function:

    function sum(){
        $n1 = "20";
        $n2 = "5";
        echo $n1 + $n2;
    }
    sum();

    echo "\n";

    function ishrak(){
        $n1 = "Ishrak";
        $n2 = "Hossain";
        echo "$n1 $n2";
    }
    ishrak();
    
    
    echo "\n";
    echo "\n";
    
    

/*===========================================================
                    PHP Function Arg & Params:
============================================================*/

    
    function mul($a, $b){
        echo $a * $b /100 / 118, "\n";
    }
    mul(65, 100000);
    mul(65, 50000);
    
    echo "\n";
    
    function bum($a, $b, $c){   // Here is Argument.
        $num1 = $a;
        $num2 = $b;
        $num3 = $c;
        echo "($num1 + $num2 - $num3) =". $num1 + $num2 - $num3, "\n" ;
    }
    bum(10,50, 5);      // Here is parameter
    bum(5,20, 10);
        
    echo "\n";
        






/*===========================================================
        PHP Function Arg & Params with default value:
============================================================*/       


    function aec($a=0, $b=0, $c=0){   // Here is Argument.
        $num1 = $a;
        $num2 = $b;
        $num3 = $c;
        echo "($num1 + $num2 - $num3) =". $num1 + ($num2 - $num3), "\n" ;
    }
    aec(10,50); // Here is parameter
    aec(10,0,50);
    
    
    
    
echo "\n";
    
    
    
    
    
/*===========================================================
        PHP Function Arg & parameters with type hinting:
============================================================*/    
    
    function xyz(int $a, int $b, int $c){
        $num1 = $a;
        $num2 = $b;
        $num3 = $c;
        echo $num1 + ($num2 - $num3), "\n";
    }
    xyz( 5, 10, 5);

    echo "\n";



/*===========================================================
        PHP Function Arg & parameters with type hinting:
============================================================*/

    
    function mySelf(string $name, int|string $age, string $city){
        // $num1 = $a;
        // $num2 = $b;
        // $num3 = $c;
        echo "My name is = $name. Age is = $age. I Live in = $city.","\n";
    }
    mySelf("Saiful Islam", 25, "Dhaka");

// ===========================================================

    function mySelf2(string $a, int|string $b, string $c){
        $name = $a;
        $age = $b;
        $city = $c;
        echo "My name is = $a. Age is = $b. I Live in = $c.","\n";
    }
    mySelf2(123, 12, "Madhabdi");




/*===========================================================
                PHP Function null type hinting:
============================================================*/

    function test(?string $name){
        echo $name. "\n";
    }
    test(null );
    test("Saif");
    test(123);




/*===========================================================
        Function null type hinting with Stricked Mood:
============================================================*/


    // ----------------------------------------------
    //   Follow to (function with stricked type.php)
    // ----------------------------------------------



echo "\n";




/*===========================================================
                    PHP Variadic Function
============================================================*/


    function test3(...$number){
        echo "Array is = ", $number[2];
    }
    test3(10, 20, 30, 40);
  
    echo "\n";
    echo "\n";
                
/*===========================================================
                    PHP Anonymous Function
                        Hit & Run || IIF
============================================================*/

// Without fn name:

    (function(){
        echo "I am a Anonymous function";
    })();

    echo "\n";
    echo "\n";

// With fn name:

    $hitRun=function(){
        echo "I am a Anonymous function with fn name";
    };
    $hitRun();

    echo "\n";
    echo "\n";

// With fn name with Args & Prams:
// Anonymous function with Assaigned to variable:

    $hitRun=function($name){
        echo "$name";
    };
    $hitRun("This is a new fn");


    echo "\n";



/*===========================================================
                        PHP Return Type
============================================================*/


// Basic Return type (string, int, float, bool, void):

function add2num(): int{
    $a = 5;
    $b = 10;
    return $a + $b;
}
$abc = add2num()+5;
echo $abc;

echo "\n";



// Union Return type (multiple return type):

function add2num2(): int | float | string | bool{
    $a = 5;
    $b = 10;
    return $a + $b;
}
$abc = add2num2()+5;
echo $abc;



?>