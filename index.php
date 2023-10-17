<?php
require_once 'Book.php';
require_once 'Customer.php';


$book = new Book(123456, 'The Catcher in the Rye', 'J.D. Salinger', 5);
$customer = new Customer(1, 'John', 'Doe', 'john.doe@example.com');
$book->setAvailable(4);
$customer->setEmail('new.email@example.com');

$book->available = 3;
$customer->email = 'another.email@example.com';

echo $book . "\n";
echo $customer . "\n";

if ($book->getCopy()) {
    echo "Copy acquired!\n";
} else {
    echo "No copies available.\n";
}

$book->addCopy(2);
echo $book . "\n";
?>