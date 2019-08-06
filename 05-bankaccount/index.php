<?php

require_once 'BankAccount.php';

$bankAccount01 = new BankAccount(123456, 'Matthieu');
// $bankAccount02 = new BankAccount(123457, 'Toto', 5);
// $bankAccount03 = new BankAccount(123458, 'Titi', 1000000);
var_dump($bankAccount01);
echo 'Montant sur le compte : ' . $bankAccount01->getBalance() . '<br />';
$bankAccount01->depositMoney(2000);
$bankAccount01->depositMoney(2000);
echo 'Montant sur le compte : ' . $bankAccount01->getBalance() . '<br />';
$bankAccount01->withdrawMoney(5000);
echo 'Montant sur le compte : ' . $bankAccount01->getBalance() . '<br />';

// On renvoie une erreur si le montant du compte tombe en dessous de 0
$bankAccount01->withdrawMoney(1000);
$bankAccount01->depositMoney(-2000);

/**
 * On va ajouter un système de livret qui va hériter d'un compte standard.
 */
$savingAccount01 = new SavingAccount(123457, 'Matthieu'); // Matthieu a 0 sur son livret
$savingAccount01->depositMoney(1000); // Matthieu a 1000 sur son livret
$savingAccount01->applyInterest(0.75); // Augmente le montant du livret de 0,75%
$savingAccount01->withdrawMoney(1000); // Matthieu a 7,5 sur son livret
echo $savingAccount01->getBalance(); // Renvoie 7,5
