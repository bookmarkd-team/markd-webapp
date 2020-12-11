
// create code to access any marked button with a data-destination attribute 
var markdButtons = document.querySelectorAll('.button[data-destination]');

console.log(markdButtons);

console.log(markdButtons[0].dataset.destination);

console.log(userId);

// add an event listener to every button on the page
for (i=0; i < markdButtons.length; i++){

    markdButtons[i].addEventListener("click", markd);

}




function markd(e){
    //function that marks the destination in database.
    
    //console when mouse down
    console.log("clicked");
    //console the destination id for the sected destination
    console.log(e.srcElement.dataset.destination);

    let selectedDestination = e.srcElement.dataset.destination

    //call check if saved function
    checkIfSave(selectDestination, userId);
    
}



//some varibale that tracks if destination is currently saved and changes front end accrodingly 

// call function to add selected destination to save DB 
    //{
        //if( destination is not saved already ){
         // save it with saveDestinationProccessing.php 
        //} else {
        
        // remove it from Save Data base


        //}
        
        


    //}

  
function checkIfSave(destination, user){
    var destinationSaved = false;
    
    //Open up a asynchronous AJAX Connection
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function(e){     
        console.log(xhr.readyState);     
        if(xhr.readyState === 4){        
            console.log(xhr.responseText);// modify or populate html elements based on response.
                //DOM Manipulation
        } 
    }

   
   
    return destinationSaved

}


function save(destination){



    //Open up a asynchronous AJAX Connection
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function(e){     
        console.log(xhr.readyState);     
        if(xhr.readyState === 4){        
            console.log(xhr.responseText);// modify or populate html elements based on response.
                //DOM Manipulation
        } 
    }

    //Make call to to php script to do the insert
    xhr.open("GET","saveDestinationProcessing.php",true); 
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var postString = "userId=" + userId + "&destinationId=" + selectDestination[i] ; 
    
    console.log(postString);

    xhr.send(postString);


}
   