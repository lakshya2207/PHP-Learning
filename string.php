<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    echo "<h1>Hello World!</h1>";
    echo "<br/>";

    $a = "Hello World!";
    $b = explode(" ", $a);
    //Use the print_r() function to display the result:
    print_r($b);

    $str = "Hello World!";
    echo str_replace("World", "Dolly", $str);
    echo "<br/>";

    echo 'Double quoted string literals perform operations for special characters';

    $x = "John";
    echo "Hello $x";
    echo "<br/>";

    echo 'strlen("Hello world!");';
    echo "<br/>";
    echo strlen("Hello world!")


        ?>

</body>

</html>