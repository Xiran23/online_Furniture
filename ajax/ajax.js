function showCustomers(){
    console.log("this is show cutomer fucntion");
    const xhr = new XMLHttpRequest();

    xhr.open('POST','./adminview/addproduct.php',true);
    xhr.onreadystatechange = function(){
        console.log('ready state is ', this.readyState);

    }

    //what to do when progress is ready 
    xhr.onload = function(){
        if(this.status === 200){

            console.log(this.responseText);
        } 
        else {
            console.log("some error has occured");
        }
 
    
}
//send the request 

xhr.send();
   
    }



