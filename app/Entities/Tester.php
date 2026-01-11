<?php 
declare(strict_types=1);
namespace app\Entities;

 class Tester extends TeamMember  {
     public function __construct(string $username,string $email,string $password,int $teamId)
{
    parent::__construct( $username, $email, $password, $teamId);

 }
public function canCreateProject():bool{
    return false;
}
public function canAssignTasks():bool{
    return false;
}
public function getRolePermissions():array{
    return ["test tasks","review tasks"];
}
}