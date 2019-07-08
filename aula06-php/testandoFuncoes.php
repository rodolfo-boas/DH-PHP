<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando Funções</title>
</head>
<body>
    <?php
        $mystring = 'abc';
        $findme   = 'a';
        $pos = strpos($mystring, $findme);

        echo "strpos: $pos <br>";

        $email  = 'name@example.com';
        $domain = strstr($email, '@');
        echo "strstr: $domain <br>"; // prints @example.com

        $user = strstr($email, '@', true); // A partir do PHP 5.3.0
        echo "User: $user <br>"; // prints name

        $str = 'abcdef';
        $tamanhoStr = strlen($str);
        echo "strlen: $tamanhoStr <br>"; // 6

        // Fornece: Hll Wrld f PHP
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
        echo "only: $onlyconsonants<br>";

        $a[0] = 1;
        $a[1] = 3;
        $a[2] = 5;
        $result = count($a);
        echo "count: $result <br>";

        $var = "";

        if (isset($var)){
            echo "Essa variável existe.";
        }

        echo isset($var);
        
    ?>
</body>
</html>