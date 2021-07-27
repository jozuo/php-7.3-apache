<?php

declare(strict_types=1); ?>
<?php

namespace model;

final class Book
{
  private string $title;
  private Person $author;

  public function __construct(string $title, Person $author)
  {
    $this->title = $title;
    $this->author = $author;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getAuthor(): Person
  {
    return clone $this->author;
  }

  /**
   * タイトルを変更した複製インスタンスを取得
   * @param string $title タイトル
   * @return Book タイトルを変更した複製インスタンス
   */
  public function withTitle(string $title): Book
  {
    $book = clone $this;
    $book->title = $title;
    return $book;
  }

  public function __set(string $name, mixed $value): void
  {
    throw new \Exception('Unknown proprty');
  }

  public function __clone()
  {
    $this->author = clone $this->author;
  }
}
