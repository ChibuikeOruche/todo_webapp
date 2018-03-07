<!doctype html>
<html manifest='offline.appcache'>
<head>
    <title>ToDo App</title>
		<meta charset='utf-8' >
		<meta name='viewport' content='width=device-width, initial-scale=0.7' >
		<meta name='keywords' content='jquery, Mobile, themes, web , apps ' >
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name='apple-mobile-web-app-status-bar' content='black'/>
		
<link rel="apple-touch-icon" sizes='57*57' type="image/png" href="./images/favicon.png" /> 
<link rel="apple-touch-icon" sizes='114*114' type="image/png" href="./images/favicon.png" /> 
<link rel="apple-touch-icon" sizes='80*80' type="image/png" href="./images/favicon.png" /> 
<link rel="apple-touch-icon" sizes='72*72' type="image/png" href="./images/favicon.png" />
<link rel="apple-touch-icon-precomposed" sizes='android-only' type="image/png" href="./images/favicon.png" />

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='webscript.js'></script>
<script src='db.js'></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<body >
	
<div data-role='page' id='todo_list'>

	<div data-role='header' data-position='fixed' id='main'> 
		<h1> To Do App </h1>
	</div><!-- Header Closed-->
		
	<div data-role='navbar'> 
		<ul > 
			<li> <a href='#add_new'> New Task </a> </li>
			<li> <a href='#completed_todo'>  Accomplished Task</a> </li>
		</ul>
	</div><!-- Navbar Closed-->

<div data-role='content'>

	<div data-role='collapsible' data-collapsed='false'>
		<ul data-role='listview' data-inset='true' data-filter='true' data-filter-text='Search list...'>
			<li> <a href=''> Good Day </a> <select data-role='slider'> 
				<option value='No'> No</option>
				 <option value='Yes'> Yes</option>
			</select></li>
		 	<li> <a href=''> Good Day </a> </li>
		 	<li> <a href=''> Good Day </a> </li>
		 	<li> <a href=''> Good Day </a> </li>
		</ul> <!-- listitem closing tag-->
	</div>
</div> <!--Content closed -->
		
	
	<div data-role='footer' data-position='fixed' > 
	<div data-role='navbar'> 
	<ul> 
	<li id='exit' > <h4><a href='#'> Back</a> </h4> </li>
	</ul>
	</div>
	</div> <!-- Footer Closed-->
	
</div> <!-- End of Page for Todo List-->


<!--Add new todo list page--> 

<div data-add-back-btn='true' data-role='page' id='add_new'> 
	
		<div data-role='header' data-position='fixed'> 
		 <a data-icon='carat-l' href='#todo_list'> Home </a>
			<h1 data-title='true'> Add New ToDo</h1>
		</div>
	
		<div data-role='content'>  
		
		<div data-role='fieldcontainer'>
		<label for='title'> Title </label>
		<input type='text' id='todo_title' placeholder='title'>
		</div>
		
		<div data-role='fieldcontainer'>
		<label for='details'> Details </label>
		<textarea type='text' id='todo_details' placeholder='title'> </textarea>
		</div>
		
		<div data-role='fieldcontainer'>
		<label for='title'> Due date </label>
		<input data-native-menu='false' type='date' id='todo_date_expire' placeholder='choose date'>
		</div>
		
		<input type='button' data-icon='plus' value='Add New' id='add_todo'>
		
		</div> <!--Content closed -->
		
	<div data-role='footer' data-position='fixed' > 
	<div data-role='navbar'> 
	<ul> 
	<li> <h4></h><a href='#completed_todo'> Completed ToDo </a> </h4> </li>
	</ul>
	</div>
	</div> <!-- Footer Closed-->

	</div>
	
</div> <!-- End of Page for add new todo-->

<div data-role='page' id='completed_todo'> 
	<div data-role='header' data-position='fixed'> 
		 <h1> To Do App </h1>
	</div>
	
	<div data-role='content' >
	
	<div data-role='collapsible' >
		<h3> Completed Tasks </h3>
		<ul id='completed_todo_list' data-collapsed='false'  data-role='listview'  data-inset='true'>
				
			 </ul>
			
	 	</div>
	</div> <!-- Content Closed -->
	
	<div data-role='footer' data-position='fixed' > 
	<div data-role='navbar'> 
	<ul> 
	<li> <h4><a href='#todo_list'> Return to Home </a> </h4> </li>
	</ul>
	</div>
	</div> <!-- Footer Closed-->

</div>


</body>
</html>