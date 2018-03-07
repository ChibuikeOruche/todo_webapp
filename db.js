indexed = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB; 
	window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
		window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange; 
		
		if (!indexed) {  
			 window.alert("Your browser doesn't support a stable version of IndexedDB.");
			}
			
			var users = [
			{ 
				id:0,
				name:"minee",
				email:"oruchegoodluck@gmail.com"
			} ,
			-
			{
				id:1,
				name:"mineh",
				email:" leolleol159@gmail.com"
			}
			];

 function add() {   
	var request = db.transaction(["user"], "readwrite").objectStore("user") .add({ id: "01", name: "Gleo", age: 20, email: "oruchegoodluck@gmail.com.com" });  
	
	request.onsuccess = function(event) {  
	   alert("Gleo has been added to your database.");   };
	
	 request.onerror = function(event) {     
		 alert("Unable to add data\r\n Gleo is already exist in your database! ");   
	};
	
	}