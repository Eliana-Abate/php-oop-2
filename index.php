<?php require_once __DIR__ . '/models/PremiumUser.php' ?>
<?php require_once __DIR__ . '/models/User.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Ereditarietà</title>
</head>
<body>
    <header>
        <h1>The Musicians' Shop</h1>
        <p> -- Users Database --</p>
        <br>
        <hr>
    </header>
   
    
    <section id="user">
        <h2>Users:</h2>
        
        <ol>
            <li>
                <!-- Dati utente -->
                <?php $user1 = new User ('John', 'Doe', true); ?>

                <h3><?php echo $user1->getFullName() ?></h3>
                <p>Il tuo sconto è del <?php echo $user1->getDiscount() ?> % </p>

                <!-- Ultimo acquisto -->
                <?php $product1 = new Product ('Stratocaster', 'Fender', '123456', '3,8 Kg', 1300); ?>
                <?php $user1->setLastPurchase($product1); ?>
                <h4>Ultimo prodotto acquistato:</h4>
                <p>Prodotto: <?php echo $user1->getLastPurchase()->brand . ' ' . $user1->getLastPurchase()->name?></p>
                <p>Prezzo originale: <?php echo $user1->getLastPurchase()->price ?> $USD </p>
                <p>Prezzo di acquisto: <?php echo $user1->getDiscountedPrice() ?> $USD </p>
                <br>

                <!-- Metodo di pagamento -->
                <?php $card1 = new CreditCard ('Mastercard', '1111-2222-3333', '31/12/2021'); ?>
                <?php $user1->setCreditCard($card1); ?>
                <?php var_dump($user1->credit_card->getCardDetails()); ?>
                <h4>Metodo di pagamento utilizzato:</h4>
                <p>Carta di credito: <?php $user1->getCreditCard(); ?></p>
                <br>
            
            </li>

            <li>
                <!-- Dati utente -->
                <?php $user2 = new User ('Kate', 'Smith', false); ?>

                <h3><?php echo $user2->getFullName() ?></h3>
                <p>Il tuo sconto è del <?php echo $user2->getDiscount() ?> % </p>

                <!-- Ultimo acquisto -->
                <?php $product2 = new Product ('V3SKA 4/4 Violin', 'Yamaha', '234567', '1,8 Kg', '290 $USD'); ?>
                <?php $user2->setLastPurchase($product2); ?>
                <h4>Ultimo prodotto acquistato:</h4>
                <p>Prodotto: <?php echo $user2->getLastPurchase()->brand . ' ' . $user2->getLastPurchase()->name?></p>
                <p>Prezzo originale: <?php echo $user2->getLastPurchase()->price ?></p>
                <br>
            </li>
        </ol>
    </section>

    <hr>

    <section id="premium-user">
        <h2>Premium Users:</h2>

        <ol>
            <li>
                <!-- Dati utente -->
                <?php $premiumUser1 = new PremiumUser ('Amy', 'Lee', true, 2); ?>
                <h3><?php echo $premiumUser1->getFullName() ?></h3>
                <p>Il tuo sconto è del <?php echo $premiumUser1->getDiscount() ?> % </p>

                <!-- Ultimo acquisto -->
                <?php $product3 = new Product ('SF10 - 1974', 'Baldwin', '75323754', '250 Kg', '24000 $USD'); ?>
                <?php $premiumUser1->setLastPurchase($product3); ?>
                <h4>Ultimo prodotto acquistato:</h4>
                <p>Prodotto: <?php echo $premiumUser1->getLastPurchase()->brand . ' ' . $premiumUser1->getLastPurchase()->name?></p>
                <p>Prezzo originale: <?php echo $premiumUser1->getLastPurchase()->price ?></p>
                <br>
            </li>

            <li>
                <!-- Dati utente -->
                <?php $premiumUser2 = new PremiumUser ('Phil', 'Collins', false, 3); ?>
                <h3><?php echo $premiumUser2->getFullName() ?></h3>
                <p>Il tuo sconto è del <?php echo $premiumUser2->getDiscount() ?> % </p>

                <!-- Ultimo acquisto -->
                <?php $product4 = new Product ('A20542 Crash Plate', 'Zildjian', '567754', '0,9 Kg', '200 $USD'); ?>
                <?php $premiumUser2->setLastPurchase($product4); ?>
                <h4>Ultimo prodotto acquistato:</h4>
                <p>Prodotto: <?php echo $premiumUser2->getLastPurchase()->brand . ' ' . $premiumUser2->getLastPurchase()->name?></p>
                <p>Prezzo originale: <?php echo $premiumUser2->getLastPurchase()->price ?></p>
                <br>
            </li>

            <li>
                <!-- Dati utente -->
                <?php $premiumUser3 = new PremiumUser ('Dave', 'Grohl', true, 1); ?>
                <h3><?php echo $premiumUser3->getFullName() ?></h3>
                <p>Il tuo sconto è del <?php echo $premiumUser3->getDiscount() ?> % </p>

                <!-- Ultimo acquisto -->
                <?php $product5 = new Product ('Les Paul', 'Gibson', '987654', '4,8 Kg', '6900 $USD'); ?>
                <?php $premiumUser3->setLastPurchase($product5); ?>
                <h4>Ultimo prodotto acquistato:</h4>
                <p>Prodotto: <?php echo $premiumUser3->getLastPurchase()->brand . ' ' . $premiumUser3->getLastPurchase()->name?></p>
                <p>Prezzo originale: <?php echo $premiumUser3->getLastPurchase()->price ?></p>
                <br>
            </li>
        </ol>
    </section>
    
</body>
</html>