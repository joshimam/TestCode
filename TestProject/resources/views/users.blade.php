<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="{{url('asset/script.js')}}"></script>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<h1>
    Users List
</h1>
<a href="{{ route('adduser')}}">Add User</a>

<table border="1" style="width:100%">
    <tr>
        <th>S No.</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone No.</th>
    <th>Action </th>
</tr>
    <tbody id="table-body">
        <tr><td></td></tr>
</tbody>

</table>
<script>
    $(document).ready(function(){
        
    });
</script>
