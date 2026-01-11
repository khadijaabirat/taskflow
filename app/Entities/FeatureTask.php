<?php 
declare(strict_types=1);
namespace app\Entities;
use DateTime;
 class FeatureTask extends Task  {
    protected int $complexityLevel;
     public function __construct( string $title, ?string $description, int $projectId, ?int $assigneeId, int $reporterId,?string $priority, ?string $status,float $estimatedHours,?float $actualHours,?DateTime $dueDate,?DateTime $updatedAt, int $complexityLevel)
{
    parent::__construct( $title, $description, $projectId, $assigneeId, $reporterId, $priority, $status, $estimatedHours, $actualHours, $dueDate, $updatedAt);
$this->complexityLevel=$complexityLevel;
 }
public function calculateComplexity():int{
return $this->complexityLevel;
}
public function getRequiredSkills():array{
    return ['Authentication', 'Encryption', 'SQL'];
}
}