<?php
require_once './autoload.php';
use app\Entities;
use app\Core\Database;
use app\Entities\{Developer, Manager, FeatureTask, BugTask};

echo "=== TASKFLOW PART 1: ARCHITECTURE VALIDATION ===<br><br>";

// Test 1: Singleton Database
echo "1. Testing Singleton Database:<br>";
try {
    $db1 = Database::getInstance();
    $db2 = Database::getInstance();
    
    if ($db1 === $db2) {
        echo "   PASS: Singleton works correctly (same instance)<br>";
    } else {
        echo "FAIL: Singleton pattern broken (different instances)<br>";
    }
} catch (Exception $e) {
    echo " FAIL: " . $e->getMessage() . "<br>";
}

// Test 2: Inheritance Hierarchy
echo "<br>2. Testing Inheritance Hierarchy:<br>";
try {
    $developer = new Developer("john_dev", "john@company.com", "password123", 1);
    $manager = new Manager("jane_manager", "jane@company.com", "password123", 1);
    
    // Check inheritance
    if ($developer instanceof \App\Entities\TeamMember) {
        echo " PASS: Developer extends TeamMember <br>";
    }
    
    if ($manager instanceof \App\Entities\TeamMember) {
        echo " PASS: Manager extends TeamMember<br>";
    }
    
    // Check abstract methods
    echo "   Developer can create project: " . ($developer->canCreateProject() ? 'No' : 'Yes') . " (expected: No)<br>";
    echo "   Manager can create project: " . ($manager->canCreateProject() ? 'Yes' : 'No') . " (expected: Yes)<br>";
    
} catch (Exception $e) {
    echo "  FAIL: " . $e->getMessage() . "<br>";
}

// Test 3: Task Hierarchy
echo "<br>3. Testing Task Hierarchy:<br>";
try {
$featureTask = new FeatureTask("New Login Feature", "Implement OAuth login",1,null,1,null, null, 10, null,null,null,5 );   
$bugTask = new BugTask("Fix CSS Bug","Button alignment issue",1,null,1,null,null,2,null ,null ,null, "High");    
    if ($featureTask instanceof \App\Entities\Task) {
        echo "  PASS: FeatureTask extends Task<br>";
    }
    
    if ($bugTask instanceof \App\Entities\Task) {
        echo "  PASS: BugTask extends Task<br>";
    }
    
    // Check interface implementation
    if ($featureTask instanceof \App\Interfaces\Assignable) {
        echo "  PASS: FeatureTask implements Assignable<br>";
    }
    
    if ($bugTask instanceof \App\Interfaces\Prioritizable) {
        echo "  PASS: BugTask implements Prioritizable<br>";
    }
    
} catch (Exception $e) {
    echo "   FAIL: " . $e->getMessage() . "<br>";
}

// // Test 4: Abstract Class Prevention
// echo "<br>4. Testing Abstract Class Instantiation Prevention:<br>";
// try {
//     // This should fail
//     $task = new \App\Entities\Task();
//     echo "  FAIL: Should not be able to instantiate abstract Task class<br>";
// } catch (Error $e) {
//     echo "   ✅ PASS: Cannot instantiate abstract Task class<br>";
// }

// echo "<br>=== VALIDATION COMPLETE ===<br>";
// echo "If all tests pass, you're ready for Part 2!<br>";

