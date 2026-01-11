<?php
declare(strict_types=1);
namespace app\Interfaces;

interface Prioritizable{
    public function setPriority(string $priority): void;
    public function getPriority():string;
    public function isUrgent():bool;
}