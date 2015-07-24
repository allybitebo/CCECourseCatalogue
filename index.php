<?php
	require_once("includes/initialize.php");
	//total number of curses avilable
	$mydb->setQuery("SELECT  `course_id` 
	FROM  `courses`");
	$cur = $mydb->executeQuery();
	$total_courses = $mydb->num_rows($cur);
	
	//end of total courses query
	
	$content='courselist.php';
	$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	switch ($view) {
		case '1' :
        $title="Course";	
		$content='courselist.php';		
		break;
		case '2' :
	    $title="Course Profile";	
		$content ='course_profile.php';
		break;
		case '3' :
	    $title="Record";	
		$content = 'record.php';		
		break;
		
		case '4' :
	    $title="subject";	
 		$content ='studentsubject.php';		
		break;
		
		case '5' :
	    $title="Room Rates";	
		$content='rates.php';
		break;	
		
		case '7' :
	    $title="Location";	
		$content ='sitemap.php';
		break;
		default :
		if ($total_courses == 0){
			$title= $total_courses. "NO COURSES AVAILABLE - PLEASE VISIT AGAIN LATER";	
			$content ='courselist.php';	
		}elseif ($total_courses == 1){
			$title= $total_courses. "  COURSE";	
			$content ='courselist.php';
		}else
	    $title= $total_courses. "  COURSES";	
		$content ='courselist.php';		
	}
	
	require_once 'theme/frontendTemplate.php';
	?>
