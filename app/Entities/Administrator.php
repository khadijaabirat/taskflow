<?php 
declare(strict_types=1);
namespace app\Entities;

 class Administrator extends TeamMember  {
     public function __construct(string $username,string $email,string $password,int $teamId)
{
    parent::__construct( $username, $email, $password, $teamId);

 }
public function canCreateProject():bool{
    return true;
}
public function canAssignTasks():bool{
    return true;
}
public function getRolePermissions():array{
    return ["manage teams","manage members"];
}
}