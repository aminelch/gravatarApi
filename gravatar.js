
// on crée l'objet
var xhr=new XMLHttpRequest();
// var data= new FormData();
var email= "joe_doe@gmail.com"
var url="email_hash.php?email"
var grav_url="https://www.gravatar.com/"



var result=makeRequest(url,email)
console.log(result)


function makeRequest(url,email) { 
    xhr.open('GET', url+ encodeURIComponent(email), true)
    xhr.onreadystatechange=function() { 
        if(xhr.readyState===4){
            // console.log("done")
            var response=xhr.responseText
            console.log(response)
            // return response
        }else { 
            return null  

        }
    }
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send() 
}