<?php 
declare(strict_types=1);
namespace app\Entities;
use app\Interfaces\Assignable;
use app\Interfaces\Prioritizable;
use app\Interfaces\Commentable;
use DateTime;
abstract class Task implements Assignable, Prioritizable, Commentable {

protected ?int $idTask=null;
protected string $title;
protected ?string $description;
protected int $projectId;
protected ?int $assigneeId;
protected int $reporterId;
protected ?string $priority;
protected ?string $status;
protected float $estimatedHours;
protected ?float $actualHours;
protected ?DateTime $dueDate;
protected DateTime $createdAt;
protected ?DateTime $updatedAt;

public function __construct( string $title, ?string $description=null, int $projectId, ?int $assigneeId=null, int $reporterId,?string $priority=null, ?string $status=null,float $estimatedHours,?float $actualHours=null,?DateTime $dueDate= null,?DateTime $updatedAt= null)
{ 
    $this->title=$title;
     $this->description=$description;
      $this->projectId=$projectId;
      $this->assigneeId=$assigneeId;
       $this->reporterId=$reporterId;
       $this->priority=$priority; 
       $this->status=$status; 
       $this->estimatedHours=$estimatedHours;
       $this->actualHours=$actualHours ;
       $this->dueDate=$dueDate;
       $this->createdAt=new DateTime;
        $this->updatedAt=$updatedAt;
}
abstract public function calculateComplexity();
abstract public function getRequiredSkills();

    public function assignTo(int $idUser): void{
        $this->assigneeId=$idUser;
    }
    public function getAssigneeId():?int{
       return $this->assigneeId;
    }
    public function isAssigned():bool{
        if($this->assigneeId==null){
            return false;
        }
        else return true;
    }



    public function setPriority(string $priority): void{
        $this->priority=$priority;
    }
    public function getPriority():string{
        return $this->priority;
    }
    public function isUrgent():bool{
        if($this->priority =='high' || $this->priority=='critical'){
        return true;
            }
        else if($this->priority =='low'|| $this->priority=='medium'){
        return false;
            } return false;
    }
    
    protected array $comments=[];

    public function addComment(string $text, int $idUser): void{
        $this->comments[]=[
            'test'=>$text,
            'user'=>$idUser,
            'Date'=>new DateTime()
            ];
    }
    public function getComments(): array{
    return $this->comments;
    }
    public function getCommentsCount(): int{
        return count($this->comments);
    }   
}