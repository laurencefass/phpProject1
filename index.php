<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         echo "hello world";
        
        class Calculator
        {
            /**
            * @assert (0, 0) == 0
            * @assert (0, 1) == 1
            * @assert (1, 0) == 1
            * @assert (1, 1) == 2
            * @assert (1, 2) == 4
            */
            public function add($a, $b)
            {
                return $a + $b;
            }
        }

        
        ?>

    </body>
</html>
