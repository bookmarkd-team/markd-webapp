
//var userId= 1; //Getting userID from the userhome php file
//console.log(userId);

// create code to access any marked button with a data-destination attribute 
var markdButtons = document.querySelectorAll('#mark[data-destination]');

// console.log(markdButtons);

// console.log(markdButtons[0].dataset.destination);



// add an event listener to every button on the page
for (i=0; i < markdButtons.length; i++){

    markdButtons[i].addEventListener("click", markd);

}




function markd(e){
    //function that marks the destination in database.
    
    //console when mouse down
    console.log("clicked");
    //console the destination id for the sected destination
    //console.log(e.srcElement.dataset.destination);

    //Collect the destination of the marked item that was clicked
    let selectedDestination = e.srcElement.dataset.destination

    //Call the Save function. It checks if saved first before it saves.
    checkIfSave(selectedDestination);

    //call check if saved function is working
    //console.log(checkIfSave(selectedDestination));
    
}



//some varibale that tracks if destination is currently saved and changes front end accrodingly 

// call function to add selected destination to save DB 
    //{
        
        
        


    //}

  
function checkIfSave(destination){
    let destinationSaved;
    
    //Open up a asynchronous AJAX Connection
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function(e){     
        //console.log(xhr.readyState);     
        if(xhr.readyState === 4){        
            //console.log(xhr.responseText);// modify or populate html elements based on response.
            
            

            let response = parseInt(this.responseText);
            console.log(response);
            
            if(response > 0) {
                destinationSaved = true;
                console.log(destinationSaved);
            } else {
                destinationSaved = false;
            }

             //destinatonSaved returns if true of false if the user has saved the destination all ready. 
            //Call save function right after:
            save(destination, destinationSaved);
                

        } 
    }

    //Make call to to php script to do the insert
    var getString = "userId=" + userId + "&destinationId=" + destination ; 
    xhr.open("GET","checkIfSaved.php?"+ getString,true); 
    xhr.send();
    console.log(getString);



}


function save(destination, hasBeenSaved){

    //testing if variables sent to function has been recived
    console.log("save function called, with variables: "+ destination + ". And hasBeenSaved=" + hasBeenSaved);


     //Open up a asynchronous AJAX Connection
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function(e){     
        //console.log(xhr.readyState);     
        if(xhr.readyState === 4){ 
            
            if(hasBeenSaved == true){
                
                //Manipulate the DOM to say the destination has been saved. You can change CSS or HTML with java script here

                console.log(markdButtons[i]);
                console.log(markdButtons);

                e.style.backgroundColor="#1B1948";
                e.innerHTML="Mark'd"; 

            } else if (hasBeenSaved == false) {

                //Manipulate the DOM to say the destination has not saved. You can change CSS or HTML with java script here

            }
        

        } 
    }


    if(hasBeenSaved == true){
        
        //if saved already do not save again
        console.log("We should not Save again");
    
        
    } else if (hasBeenSaved == false) {
        
        //if not saved already please save it
        console.log(" We should Save");

        //Make call to to php script to do the insert
        xhr.open("POST","saveDestinationProcessing.php",true); 
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        var postString = "userId=" + userId + "&destinationId=" + destination ; 

        console.log("Post the following data to saveDestinationProcessing.php: " + postString);
        xhr.send(postString);

    }




}
   