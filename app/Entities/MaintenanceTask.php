<?php 
declare(strict_types=1);
namespace app\Entities;
 class BugTask extends Task  {
     public function __construct(( string $title, string $description, int $projectId, int $assigneeId, int $reporterId,string $priority, string $status,float $estimatedHours,float $actualHours,\DateTime $dueDate, \DateTime $createdAt,\DateTime $updatedAt))
{
    parent::__construct( ($title, $description, $projectId, $assigneeId, $reporterId, $priority, $status, $estimatedHours, $actualHours, $dueDate,  $createdAt, $updatedAt));

 }
public function calculateComplexity():bool{
 
}
public function getRequiredSkills():string{
    
}
}