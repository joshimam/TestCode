<html>
    <head>
        <title>Add User</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       <!--bootsrap style-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
    <body>
    <div>
    <h1>  Add User</h1>
    <div>
        <form id="user-form">
            @csrf
            <label>User Name</label>
            <input type="text" name="name" placeholder="Enter The Name" required>
            </br>
            <label>Email</label>
            <input type="email" name="email" Placeholder="Enter The Email">
            </br>
            <label>Phone Number</label>
            <input type="number" name="phone_no" placeholder="Enter Phone No">
            </br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password">
</br>
            <input type="submit" name="submit" value="submit" id="buttonSubmit"/>
            
</form>
<span id="output"></span>
<script>
    $(document).ready(function(){
        $('#user-form').submit(function(){
                 event.preventDefault();

                 var form= $('#user-form')[0];
                 var data=new FormData(form);
                 $("#buttonSubmit").prop('disabled',true);
                 
                 $.ajax({
                    type:'POST',
                    url:"{{ route('adduser') }}",
                    data:data,
                    processData:false,
                    contentType:false,
                    success:function(data){
                       $('#output').text(data.res);
                       $("#buttonSubmit").prop('disabled',false);
                       $("input[type='text']").val('');
                       $("input[type='email']").val('');
                       $("input[type='number']").val('');
                       $("input[type='password']").val('');
                    },
                    error:function(e){
                        $('#output').text(e.responseText);
                        $("#buttonSubmit").prop('disabled',false);
                        $("input[type='text']").val('');
                       $("input[type='email']").val('');
                       $("input[type='number']").val('');
                       $("input[type='password']").val('');
                    }

                 });
        });

    });
    </script>
    </div>
    </div>
</body>

</html>