<!DOCTYPE html>
<html lang="en">
<head>
    <title>php Basics</title>
    <style>
        h1{
            text-align: center;
            color: blue;
        }
    </style>
</head>
<body>
    <h1><u>Welcome to Php Basics</u></h1><br><br>

    <!-- Php Code -->
    <?php
        //For Print any value or statement use "echo"
        echo "Welcome to php (written in php)";
        echo "<br>";    //Use HTML <br> tag to give a line break 

        //php Variables are defined Using '$' + variable name
        $num1 = 6;
        $num2 = 4;
        $str = "This is String";
        echo $num1; 
        echo "<br>"; //Use HTML <br> tag to give a line break 
        echo $num2;
        echo "<br>";
        echo $str;
        echo "<br>";

        /*
        //Data Types of PHP
        1. String
        2. Integers
        3. Floating Points
        4. Boolean
        5. Array
        6. Object
        Note: No need to specify datatype of a variable in php only use $var_name = data;
        */

        //Declare Constant Variable 
        define('PI', '3.14'); // ('variable_name' , 'value')
        echo PI; // No need to use $ in constant variables
        echo "<br>";
        echo "Area of a circle (radius 4cm) is ";
        $radius = 15;
        $area = PI * $radius * $radius;
        echo $area;
        echo "<br>";
        

        /*
        PHP Operators
        1. Arithmetic Operators (+,-,*,/)
        2. Assignment OPerators (=,+=,-=,*=,/=)
        3. Comparison Operators (==,<,>,<=,>=)
        4. Increment & Decrement Operators ($i++,++$i,$i--,--$i)
        5. Logical Operators (and / &&, or / ||, xor, !)
        */
        //Arithmatic Operators
        echo "The value of num1 + num2 is ";
        echo $num1 + $num2;
        echo "<br>";
        echo "The value of num1 - num2 is ";
        echo $num1 - $num2;
        echo "<br>";
        echo "The value of num1 * num2 is ";
        echo $num1 * $num2;
        echo "<br>";
        echo "The value of num1 / num2 is ";
        echo $num1 / $num2;
        echo "<br>";

        //Increment / Decrement Operators
        //Post Increment / Decrement
        $num1--;
        $num2++;
        echo $num1;
        echo "<br>";
        echo $num2;
        echo "<br>";

        //Pre Increment / Decrement
        ++$num1;
        --$num2;
        echo $num1;
        echo "<br>";
        echo $num2;
        echo "<br>";

        //Assignment Operators
        $num3 = $num1 + $num2;
        echo "num3 = num1 + num2 = ";
        echo $num3;
        echo "<br>";

        $num3+= 10;
        echo "num3+=10 = ";
        echo $num3;
        echo "<br>";

        //COmparison Operators
        // TO get output of comparison use =>{
        //     "var_dump"
        // }
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";

        //Logical Operators
        echo "The value of 1!=4 && 1!=4 is ";
        echo var_dump(1!=4 && 1!=4); // true and true = true
        echo "<br>";
        echo "The value of 1==4 && 1!=4 is ";
        echo var_dump(1==4 && 1!=4); //(false and true) =false
        echo "<br>";
        echo "The value of 1!=4 || 1!=4 is ";
        echo var_dump(1!=4 || 1!=4); //true or flase = true
        echo "<br>";
        echo "The value of 1==4 || 1==4 is ";
        echo var_dump(1==4 || 1==4); // false or flase = false
        echo "<br>";
    ?>
    
</body>
</html>