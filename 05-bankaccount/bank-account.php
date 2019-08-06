<?php

/**
 * Nous allons créer un système de gestion de compte en banque en POO.
 * 
 * Nous aurons d'abord le compte en banque classique représentée par la classe BankAccount.
 * Il possédera un identifiant (int), un propriétaire (string) et un montant (float).
 * On devra définir l'identifiant et le propriétaire dans le constructeur. Le montant pourra être défini dans le constructeur de manière optionnelle.
 */

$bankAccount01 = new BankAccount(123456, 'Matthieu'); // Matthieu a 0 sur son compte
echo $bankAccount01->getBalance(); // Renvoie 0
$bankAccount01->depositMoney(1000); // Matthieu a 1000 sur son compte
echo $bankAccount01->getBalance(); // Renvoie 1000
$bankAccount01->withdrawMoney(1000); // Matthieu a 0 sur son compte

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
