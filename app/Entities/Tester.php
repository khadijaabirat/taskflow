<?php 
declare(strict_types=1);
namespace app\Entities;
 class Tester extends TeamMember  {
     public function __construct(string $username,string $email,string $password,int $teamId, \DateTime $createdAt)
{
    parent::__construct( $username, $email, $password, $teamId,  $createdAt);

 }
public function canCreateProject():bool{
    return false;
}
public function canAssignTasks():bool{
    return false;
}
public function getRolePermissions():string{
    return "tester";
}
}