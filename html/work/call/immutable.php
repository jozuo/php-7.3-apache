<?php

declare(strict_types=1); ?>
<?php

namespace call;

require_once '../vendor/autoload.php';

use model\Book;
use model\Person;

$book1 = new Book('タイトル', new Person('hanako', 'yamada'));
$book2 = clone $book1;
$book3 = $book1->withTitle('ほげほげ');

print var_dump($book1->getAuthor() === $book2->getAuthor()) . '<br>';
print $book3->getTitle();
