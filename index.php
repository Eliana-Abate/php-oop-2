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
    <section id="user">
    <h1>User</h1>
    <?php $user1 = new User ('John', 'Doe', true); ?>
    <h3><?php echo $user1->getFullName() ?></h3>
    <p>Il tuo sconto è del <?php echo $user1->getDiscount() ?> % </p>
    
    <?php var_dump($user1); ?>
    <?php $user1->setNewsletter(false); ?> 
    <p>Il tuo sconto è del <?php echo $user1->getDiscount() ?> % </p>
    <?php var_dump($user1); ?>

    </section>

    <hr>

    <section id="premium-user">
    <h1>Premium User</h1>
    <?php $premiumUser1 = new PremiumUser ('Clara', 'McKenzie', true, 1); ?>
    <h3><?php echo $premiumUser1->getFullName() ?></h3>
    <p>Il tuo sconto è del <?php echo $premiumUser1->getDiscount() ?> % </p>
    
    <?php var_dump($premiumUser1); ?>
    <?php $premiumUser1->setNewsletter(false); ?> 
    <p>Il tuo sconto è del <?php echo $premiumUser1->getDiscount() ?> % </p>
    <?php var_dump($premiumUser1); ?>


    </section>
    
</body>
</html>