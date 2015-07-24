<div class="well">
	
	<form action="controller.php?action=delsy&studentId=<?php echo $_SESSION['IDNO']; ?>" Method="POST">  					
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Course</th>
					<th>Duration</th>
					<th>Course Fee</th>
					
				</tr>	
			</thead>
			<tbody>
				<?php 
					$mydb->setQuery("SELECT  `course_id`, `course_title` ,course_duration,  `course_fee` 
					FROM  `courses`");
					$cur = $mydb->loadResultList();
					foreach ($cur as $course) {
				  		echo '<tr>';
						
				  		echo '<td><a href = "index.php?page=2&cid='. $course->course_id.'"><strong><h4>' . $course->course_title.'</a></h4></strong></td>';
						
				  		echo '<td>'. $course->course_duration.'</td>';
				  		echo '<td>'. $course->course_fee.'</td>';
				  		echo '</tr>';
					} 
				?>
			</tbody> 
			<tfoot>
				<tr><td></td><td></td><td></td></tr>
			</tfoot>	
		</table>
		
	</form>
</div><!--End of well-->

</div><!--End of container-->