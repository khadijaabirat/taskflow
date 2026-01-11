<?php
declare(strict_types=1);
namespace app\Interfaces;

interface Commentable{
    public function addComment(string $text, int $idUser): void;
    public function getComments(): array;
    public function getCommentsCount(): int;
}