<?php 
declare(strict_types=1);
namespace app\Entities;
use DateTime;
 class BugTask extends Task  {
    protected string $Severity;
     public function __construct( string $title, ?string $description, int $projectId, ?int $assigneeId, int $reporterId,?string $priority, ?string $status,float $estimatedHours,?float $actualHours,?DateTime $dueDate,?DateTime $updatedAt, string $Severity)
{
    parent::__construct( $title, $description, $projectId, $assigneeId, $reporterId, $priority, $status, $estimatedHours, $actualHours, $dueDate, $updatedAt);
$this->Severity=$Severity;
 }
public function calculateComplexity(): int{
    if($this->Severity=='critical'){
return 100;
    }else if($this->Severity=='Major'){
return 60;
    } 
else if($this->Severity=='Minor'){
return 20;
    } 
    else return 1;

}
public function getRequiredSkills():array{
    return ['Debugging', 'Log Analysis', 'Unit Testing'];
}
}