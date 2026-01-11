<?php 
declare(strict_types=1);
namespace app\Entities;
use DateTime;
 class MaintenanceTask extends Task  {
    protected string $MaintenanceType;
     public function __construct( string $title, ?string $description, int $projectId, ?int $assigneeId, int $reporterId,?string $priority, ?string $status,float $estimatedHours,?float $actualHours,?DateTime $dueDate,?DateTime $updatedAt, string $MaintenanceType)
{
    parent::__construct( $title, $description, $projectId, $assigneeId, $reporterId, $priority, $status, $estimatedHours, $actualHours, $dueDate, $updatedAt);
$this->MaintenanceType=$MaintenanceType;
 }
public function calculateComplexity(): int{
    if($this->MaintenanceType=='Security Patch'){
return 100;
    }else if($this->MaintenanceType=='Server Update'){
return 60;
    } 
else if($this->MaintenanceType=='Database Optimization'){
return 20;
    } 
    else return 1;

}
public function getRequiredSkills():array{
    return ['System Administration', 'Database Management', 'DevOps'];
}
}