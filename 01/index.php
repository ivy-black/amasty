<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class First {
        public function getClassname(){
             $a = "First <br/>";
             return $a;
         }
         public function getLetter(){
            $b = "A <br/>";
            return $b;
        }
        public function getColor(){
            $c = "Blue <br/>";
            return $c;
        }
     }
     class Second {
        public function getClassname(){
             $a = "Second <br/>";
             return $a;
         }
         public function getLetter(){
            $b = "B <br/>";
            return $b;
        }
        public function getColor(){
            $c = "Red <br/>";
            return $c;
        }
     }
     $first = new First();
     $second = new Second();
     echo $first->getClassname();
     echo $second->getClassname();
     //
     echo $first->getLetter();
     echo $second->getLetter();
     //
     echo $first->getColor();
     echo $second->getColor();
    ?>
</body>
</html>