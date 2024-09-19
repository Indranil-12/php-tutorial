<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Basics</title>
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
        //Marge Strings and Values in Output 
        // Use . sign to add
        // $name = "Php";
        // echo "My Fav Language is " . $name . "<br>";
        // Output : My Fav Language is Php
        //

        /*
        //Conditional Statements
        1. if
        2. if-else
        3. if-else-if
        4. Nested if-else
        */
        $age =3;
        if($age>=18){
            echo "You can drive cars";
        }
        else if($age<18){
            if($age>12){
                echo "You Can drive Cycles";
            }
            else if($age<12 && $age>5){
                echo "You can drive toy cars";
            }
            else{
                echo "You are a child";
            }
        }
        else{
            echo "Sleep in front of your parents";
        }
        echo "<br>";

        //Arrays
        // to declare a array use=>
        // array(list of array)
        $arr_Number = array(1,2,3,4,5,6,7,8);
        $arr_Str = array("One","Two","Three","Four","Five","Others");

        //Access array Elements using => variable_Name[position]
        echo $arr_Number[0]."<br>";
    

        //Count numberof elements present in array or length of an array
        // Use count(array_Variable_Name)
        $length = count($arr_Number);
        echo $length."<br>";

        /*
        //Loops 
        1. While
        2. Do-While
        3. For
        4. Foreach
        */

        //While Loop
        $i=1; //Initialization
        while($i<=10){ //Condition 
            echo $i." ";
            $i++; //Increment/Decrement
        }
        echo " While Loop<br>";

        //Do-While Loop
        $i=1; //Initialization
        do{ 
            echo $i." ";
            $i++; //Increment/Decrement
        }while($i<=10); //Condition 
        echo "do-while Loop<br>";

        //For Loop
        for($i=1;$i<=10;$i++){ //(initialization ; condition ; increment/decrement)
            echo $i." ";
        }
        echo "for Loop<br>";

        //for-each Loop
        // It only can be used in arrays 
        // Iterate all elements of array from 0 index to null
        foreach($arr_Str as $value){ //(arr_Name as name)
            echo $value." ";
        }
        echo "foreach Loop<br>";

        //Function
        // 1. In-Build Function
        // 2. User Defined Function
        // Function define 
        function print_Number($num){
            echo "Your Number is ". $num."<br>";
        }
        //Function call;
        print_Number(7);

        //Function with return type
        function sum($num1,$num2){
            return $num1+$num2;
        }
        $sumDigit = sum(1,2); 
        echo "Sum of num1 and num2 is ".$sumDigit."<br>";


        //Strings
        $str = "My php";
        echo $str."<br>";
        //Length of a String
        $len = strlen($str); 
        echo "Length of the String is ".$len."<br>"; 
        //Other In-Build Functions for String 
        echo "The Number of words in this String is ".str_word_count($str)."<br>";
        echo "The Revese String is ".strrev($str)."<br>";
        echo "THe search for hp in this string is ".strpos($str,"hp")."<br>";
        echo "The replaced string is ".str_replace("hp","hone",$str)."<br>";



    ?>
</body> 

</html>