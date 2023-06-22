alert();
fetch("http://127.0.0.1:8000/api/get-all-users").then((data)=>{
    console.log(data);
})