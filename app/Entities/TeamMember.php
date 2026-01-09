<?php 
declare(strict_types=1);
namespace app\Entities;
abstract class TeamMember{

protected ?int $id=null;
private string $username;
protected string $email;
protected string $passwordhash;
protected int $teamId;
protected DateTime $createdAt;


public function __construct(string $username,string $email,string $password,int $teamId, DateTime $createdAt)
{
    $this->username=$username;
    $this->email=$email;
    $this->passwordhash=$password;
    $this->teamId=$teamId;
    $this->createdAt=$createdAt;
}


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordhash;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId): void
    {
        $this->teamId = $teamId;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
abstract public function canCreateProject();
abstract public function canAssignTasks();
abstract public function getRolePermissions();

public function setPassword(string $password){
 $this->passwordhash=password_hash($password,PASSWORD_BCRYPT);
 
}

public function verifyPassword(string $password){
return password_verify( $password,$this->passwordhash);

}


}