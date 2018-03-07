$( function () {
	$('a').attr('data-ajax', 'false').css('text-decoration','none');
	
		$('div[data-role="header"], div[data-role="footer"]' ).css('background',' rgb(40,80,120) ');
		$( 'div[data-role="header"] > h1, div[data-role="header"] > a,  div[data-role="footer"] > h4' ).css({'color':'#fff', 'text-shadow':'none'}); 
		$( 'div[data-role="header"] > a ').css({ 'background':' rgb(20,100,130)', 'border-radius': '18px' , 'border':'none', 'box-shadow':'1px 1.5px 10px #000'});
	 	$( 'div[data-role="header"] > a:visited ').css({ 'box-shadow':'0 0 4px #001', 'color':'#7a58ff' });
		$('label').css('font-weight','bold');
			
		$( '#search' ).append("<input type='search' placeholder='search...' id='search_box' /> ");
		$('#search').click(function (){
			$('#search_box').css( 
			{
				'border-radius':'10px',
				'box-shadow':'0 0 5px #00ffde',
				'outline':'none',
				'padding':'5px'
			});
			
			$('#search_box').blur( function() {
				var vall = $( '#search_box' ).val();
				
			if( vall != undefined){
				$( '#search_box' ).remove();
				$( '#search' ).text('searching...');
				window.location = ' https://www.google.com/search?q='+vall;
				}
				});
			});
	
/**
Api codes below
*/
$(document).bind('mobileinit', function(){
	
	 });
	
	var appCache = window.applicationCache;
	
	appCache.addEventListener('updateready', function(){
	if( appCache.status == appCache.UPDATEREADY ) { 
		 
		if(confirm('There is an update available for app. Do you want to load it?') ){
			appCache.swapCache();
			window.location.reload();
			 
			}
		}
 }, false);

function localStore(){
 var lists = {

	list1:{
	'name':'try'
	}, 
	
	list2:{
	'title':'title'}
	};
	
	var mlists = {
		list3:{
		name:'named'
		}
	};
	
	$.extend(lists,mlists);
	
	localStorage.setItem('us', JSON.stringify(lists));
	 var gl = JSON.parse(localStorage.getItem('us'));
	
	console.log(gl.list3.name);
	
  if(typeof(Storage) !== 'undefined'){
		//localStorage.removeItem('');
	}
}

window.onload = localStore;


/**
*The following code portion makes the todo app what it really is
*/
		
$('#add_todo').click( function(){
	$('#completed_todo_list').append('<li> <a href="#"> Agree </a> </li>').listview('refresh');
var title,details,end_date;

title = $('#todo_title').val();
details = $('#todo_details').val();
end_date = $('#todo_date_expire').val();

var today = new Date();
var date = today.getFullYear()+'-'+today.getMonth()+1+'-'+today.getDate();

$(date).attr('min','date');

$('#todo_items').prepend
("<ul data-inset='true' data-role='collapsible' data-collapsed='false' ><h3 >" +title+ " </h3><li> <a href='#' > "+details+" </a> <span id='date_due'> "+end_date+"</span> </li><select id='done_state' data-role='slider'><option value='No'>Undone</option><option value='Yes'> Done</option></select></ul>");
  $('#add_todo').attr('a', 'href="#todo_list" ');

});


			$('#choice').change( function(){
			 var choice = $('#done_state option:selected').attr('value');
				if(choice == 'Yes'){
				//code goes here 
				alert('33');
				}
				
				else{
				//Code here
				}
				
			});
			
			$(" ul #exit" ).click(function(){
					window.history.back();
				});
	 		
});   //closing all codes

 