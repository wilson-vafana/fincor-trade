 <?php
  
    Class transaction {
        public int $amount;
        public int $rate;
        public int $payout;
    }
    /*
    class SetupConfigurations {     
        public int $rate;
        public string $defcurrency;
    }
    class TelecashToDarro {
        public int $amount;
        public int $rate;
        public int $payout;
    }
    class OneMoneyToDarro {
        public int $amount;
        public int $rate;
        public int $payout;
    }
    class DarroToEcocash {
        public int $amount;
        public int $rate;
        public int $payout;
    }
    class DarroToTelecash {
        public int $amount;
        public int $rate;
        public int $payout;
    }
    class DarroToOneMoney { 
        public int $amount;
        public int $rate;
        public int $payout;
    } 
    class DarroToDarro {
        public  $amount;
        public  $rate;
        public  $payout; 
    }
*/

    function EcocashToPaypal(int $amount , $ecocash , $paypal ,$email){
       try {
        $conn = new PDO(
        "mysql:host=127.0.0.1;dbname=fincores", 'root', '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
       $ecoTopaypalTransaction = new transaction();
       $ecoTopaypalTransaction->amount   = $amount;
       $ecoTopaypalTransaction->ecocash  = $ecocash;
       $ecoTopaypalTransaction->paypal   = $paypal;
       $charges = "1";
       $ecoTopaypalTransaction->payout = $amount + $charges;
       $payout  = $ecoTopaypalTransaction->payout;
       
        $statement = $conn->prepare('INSERT INTO transactions (
        email,
        amount,
        ecocash,
        paypal,
        payout
        ) VALUES ( 
        :email,
        :amount,
        :ecocash,
        :paypal,
        :payout
        );
        ');
        $statement->execute([
        ':email'  => $email,
        ':amount' => $amount,
        ':ecocash'   => $ecocash,
        ':paypal' => $paypal,
        ':payout' => $payout
        ]);
         echo " Alive ";
        } catch (PDOException $e) {
         echo " Dead ";
        }
    }
    /*
    function TelecashToDarro(int $amount , int $rate){
        try {
         $conn = new PDO(
         "mysql:host=127.0.0.1;dbname=Darro", 'root', '',
         [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
         );
        $teleTodarroTransaction = new TelecashToDarro();
        $teleTodarroTransaction->amount = $amount;
        $teleTodarroTransaction->rate  = $rate;
        $charges = '10';
        $teleTodarroTransaction->payout = $amount * $rate + $charges;
        $payout  = $teleTodarroTransaction->payout;
        
         $statement = $conn->prepare('INSERT INTO TelecashToDarro (
         amount,
         rate,
         payout
         ) VALUES (
         :amount,
         :rate,
         :payout
         );
         ');
         $statement->execute([
         ':amount' => $amount,
         ':rate'   => $rate,
         ':payout' => $payout
         ]);
         echo "<center><div style='padding-bottom:150px;'></div><br><br><img src='err.gif'> <p>Something is Just not right</p></center>";
         header( "page.html");
         } catch (PDOException $e) {
         echo "<center><div style='padding-bottom:150px;'></div><br><br><img src='err.gif'> <p>Something is Just not right , Please try contacting the </p></center>";;
         }
     }
     function OneMoneyToDarro(int $amount , int $rate){
        try {
         $conn = new PDO(
         "mysql:host=127.0.0.1;dbname=Darro", 'root', '',
         [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
         );
        $onemoneyTodarroTransaction = new OneMoneyToDarro();
        $onemoneyTodarroTransaction->amount = $amount;
        $onemoneyTodarroTransaction->rate  = $rate;
        $charges = '10';
        $onemoneyTodarroTransaction->payout = $amount * $rate + $charges;
        $payout  = $onemoneyTodarroTransaction->payout;
        
         $statement = $conn->prepare('INSERT INTO OneMoneyToDarro (
         amount,
         rate,
         payout
         ) VALUES (
         :amount,
         :rate,
         :payout
         );
         ');
         $statement->execute([
         ':amount' => $amount,
         ':rate'   => $rate,
         ':payout' => $payout
         ]);
         echo "<center><div style='padding-bottom:150px;'></div><br><br><img src='err.gif'> <p>Something is Just not right</p></center>";
         header( "page.html");
         } catch (PDOException $e) {
         echo "<center><div style='padding-bottom:150px;'></div><br><br><img src='err.gif'> <p>Something is Just not right , Please try contacting the </p></center>";;
         }
     }
?>
*/