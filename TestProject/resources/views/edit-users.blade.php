<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<h1>Edit Users </h1>
<form id="update-user-form">
            @csrf
            <label>User Name</label>
            <input type="text" name="name" value="{{$users[0]->name}}" placeholder="Enter The Name" required>
            </br>
            <label>Email</label>
            <input type="email" name="email" value="{{$users[0]->email}}" Placeholder="Enter The Email">
            </br>
            <label>Phone Number</label>
            <input type="number" name="phone_no" value="{{$users[0]->phone_no}}" placeholder="Enter Phone No">
            </br>
            <label>Password</label>
            <input type="password" name="password" value="{{$users[0]->password}}" placeholder="Enter Password">
</br>
            <input type="hidden" value="{{$users[0]->id}}" name="id"/>
            <input type="submit" name="submit" value="Update Data" id="buttonSubmit"/>
            
</form>
<span id="output"></span>


<script>
    $(document).ready(function(){
        $('#update-user-form').submit(function(event){
           event.preventDefault();
            var form =$('#update-user-form')[0];
            var data=new FormData(form);
            $.ajax({
                type:"POST",
                url:"{{ route('updateuser')}}",
                data:data,
                processData:false,
                contentType:false,
                success:function(data){
                    $("#output").text(data.res);
                    window.open('/get-users',"_self")

                },
                error:function(err)
                {
                  $("#output").text(err.responseText)
                }

            });
        });
    });
</script>
