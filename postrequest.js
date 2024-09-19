function login(){
    let data = {
    "username": "series", 
    "password": "12345"
    }
}

fetch("/datastorage.php", {

    method: "POST",
    body: JSON.stringify({data}),
    headers: {
        "Content-type": "application/json; charset=UTF-8"
    }

})

