//(function(){
    // var ajaxRequest =new XMLHttpRequest
 
    var email="joedoe@gmail.com"

    var url=decodeURI( "email_hash.php?email="+email)

    console.log(url)
    debugger
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var result = JSON.parse(this.responseText);
            console.log(result);
        }
    };
    xmlhttp.open("GET",url, true);
    xmlhttp.send();


//})()
