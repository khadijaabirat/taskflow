<?php
declare(strict_types=1);
namespace app\Interfaces;

interface Assignable{
    public function assignTo(int $idUser): void;
    public function getAssigneeId():?int;
    public function isAssigned():bool;
}