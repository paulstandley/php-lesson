<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>OOP PHP</title>
</head>
<body>
  <header>
    <h1>OOP PHP</h1>
  </header>
    <?php 
      // https://www.youtube.com/watch?v=dQxuYRNbL_M&t=49s
      abstract class Customer {
        private $id;
        public $name;
        protected $email;
        private $balance;

        public function __construct($id, $name, $email, $balance) {
          echo "The constructor ran...<br>";
          $this->id = $id;
          $this->name = $name;
          $this->email = $email;
          $this->balance = $balance;
        }

        abstract function getEmail();
        /*
        public function __destruct() {
          echo "the destruct ran... <br>";
        }
        
        public function getCustomer($id) {
          return "John Doe ".$id;
        }

        public function getEmail() {
          return $this->email;
        }
      }
      */
      /*
      $customer = new Customer;
      echo $customer->id;
      echo "<br>";
      echo $customer->Customer(0, "Paul Standley", "paul@paul.com",10000);
      echo "<br>";
      echo $customer->name."<br>";
      
      $customer = new Customer(0, "Paul Standley", "paul@paul.com",100000);
      echo $customer->name;
      echo "<br>";
      echo $customer->getEmail();
      */
    }
      class Subscriber extends Customer {
        public $plan;

        public function __construct($id, $name, $email, $balance, $plan) {
          parent::__construct($id, $name, $email, $balance);
          $this->plan = $plan;
        }

        public function getEmail() {
          return $this->email;
        }
      }
      $subsriber = new Subscriber(007, "Paul Standley", "paul@paul.com", 10000000, "Pro");
      echo $subsriber->getEmail();
    ?>
    <hr>
    <?php 

     class User{
       public $username;
       public $password;
       public static $passwordLength = 5;
       public static function getPasswordLength() {
         return self::$passwordLength;
       }
     } 
     echo User::getPasswordLength();
    ?>


  </body>
</html>