fetch("http://127.0.0.1:8000/api/get-all-users").then((data)=>{
   // console.log(data); //json format
   return data.json();
}).then((objectData)=>{
  console.log(objectData);
  let tableData="";
  objectData.users.forEach(function (user,i){
    tableData +=`<tr>
    
    <td>${i+1}</td>
    <td>${user.name}</td>
    
    <td>${user.email}</td>
    
    <td>${user.phone_no}</td>
    <td><a href="edit-user/`+`${user.id}`+`">Edit</a></td>
    
    </tr>`;
  });
  document.getElementById("table-body").innerHTML=tableData;
});