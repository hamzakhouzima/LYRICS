function myAjax(){

    var myRequest = new XMLHttpRequest();
    myRequest.onreadystatechange = function(){

        if(this.readyState === 4 && this.status === 200){
            console.log(this.responseText);
        }


    };
    myRequest.open("GET , '../controller/content.php', true");
    myRequest.send();




}