<?php
// Imports
require_once 'controller\InvalidInputException.php';
require_once 'persistence\PersistenceTAMAS.php';
require_once 'model\Course.php';
require_once 'model\Department.php';
require_once 'model\Instructor.php';
require_once 'model\Job.php';
require_once 'model\Review.php';
require_once 'model\Student.php';

session_start();

// Load data from persistence
$_SESSION['persis'] = new PersistenceTamas();
$dpt = $_SESSION['persis'] -> loadDataFromStore();

// Dummy courses & jobs
$teacher1 = new Instructor("Teacher Teaching", "260543215", "teacher.teaching@mcgill.ca");
$dpt -> addAllInstructor($teacher1);

$allTeachers = $dpt -> getAllInstructors();

$myTeacher = $allTeachers;
$course1 = new Course("ECSE321", "ISE", "W2017", "3", "0", "2", "9", "60", "2", "5", "11.75", "11.75", "60", $myTeacher);
$dpt -> addAllCourse($course1);

$allCourses = $dpt -> getAllCourses();

$myCourse = $allCourses[0];

$job1 = new Job("TA", "2017-07-21", $myCourse);
$job2 = new Job("Grader", "2017-07-21", $myCourse);

$dpt -> addAllJob($job1, $job2);


// Write data to persistence
$_SESSION['persis']->writeDataToStore($dpt);

$dpt = $_SESSION['persis'] -> loadDataFromStore();
$_SESSION['allJobs'] = $dpt -> getAllJobs();

$allJobs = $_SESSION['allJobs'];
$_SESSION['jobNamesArray'] = array();
foreach($allJobs as $job){
	$optionValue = $job -> getJobID();

	$jobCode = $job -> getCorrespondingCourse() -> getCode();
	$jobType = $job -> getPosType();

	$optionSeenName = $jobCode . " " . $jobType;

	$_SESSION['jobNamesArray'][$optionValue] = $optionSeenName;
}

// Go to main page
header("Location: InstructorHomePage.php");
exit;
?>