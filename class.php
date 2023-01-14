<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>the fruit programme </h1>
    <?php
    class fruit{  //class
        public $name; //property1
        public $color;//property2

        function set_name($name){// method 1
            $this->name = $name;
        }
        function get_name(){// method 2
            return $this->name;
        }
    }
    ?>
</body>
</html>