<?php 
declare(strict_types=1);
namespace app\Entities;
abstract class Task {

protected ?int $id=null;
protected string $title;
protected ?string $description;
protected int $projectId;
protected ?int $assigneeId=null;
protected int $reporterId;
protected string $priority;
protected string $status;
protected ?float $estimatedHours;
protected float $actualHours;
protected ?DateTime $dueDate=null;
protected DateTime $createdAt;
protected ?DateTime $updatedAt=null;

public function __construct( string $title, string $description, int $projectId, int $assigneeId, int $reporterId,string $priority, string $status,float $estimatedHours,float $actualHours,DateTime $dueDate, DateTime $createdAt,DateTime $updatedAt)
{ 
    $this->title=$title;
     $this->description=$description;
      $this->projectId=$projectId;
      $this->assigneeId=$assigneeId;
       $this->reporterId=$reporterId;
       $this->priority=$priority; 
       $this->status=$status; 
       $this->estimatedHours=$estimatedHours;
       $this->actualHours=$actualHours;
       $this->dueDate=$dueDate;
       $this->createdAt=$createdAt;
        $this->updatedAt=$updatedAt;
}
abstract public function calculateComplexity();
abstract public function getRequiredSkills();



}