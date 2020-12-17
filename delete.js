//var userId= 1; //Getting userID from the userhome php file
//console.log(userId);

// create code to access any marked button with a data-destination attribute 
var deleteButton = document.querySelectorAll('#delete[data-destination]');

// console.log(markdButtons);

// console.log(markdButtons[0].dataset.destination);



// add an event listener to every button on the page
for (i=0; i < deleteButton.length; i++){

    deleteButton[i].addEventListener("click", deleteMarkd);

}


let selectedDestination; 
let destinationId; 
function deleteMarkd(e){
    //function that marks the destination in database.
    
    //console when mouse down
    console.log("clicked");
    //console the destination id for the sected destination
    //console.log(e.srcElement.dataset.destination);

    //Collect the destination of the marked item that was clicked
    destinationId = e.target.dataset.destination; 
    selectedDestination=e.path[2]; //the destination div 
    
    
    e.preventDefault();
	var xhr = new XMLHttpRequest(); 

	xhr.onreadystatechange = function(e){     
		console.log(xhr.readyState);  

		if(xhr.readyState === 4){    
			console.log(xhr.responseText);// modify or populate html elements based on response.
		    selectedDestination.remove(); //remove the selected destination element 
			
		} 
	};
	

	xhr.open("POST","deleteMarkdProcessing.php",true); 
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var postString = "userId=" + userId + "&destinationId=" + destinationId ;  
    console.log(postString);    
    xhr.send(postString); 

}





  




