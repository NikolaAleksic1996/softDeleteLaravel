<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <title>Laravel soft delete</title>
</head>
<body>
<div class="container">
<h1 class="text-center text-success pt-4">Laravel soft delete</h1>
    <div class="row py-2">
        <div class="col-md-6">
            <h2>List of Users</h2>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <b>
                    <a class="btn btn-default m-2" href="/"><i class="fa fa-thin fa-newspaper"></i> List of Users</a>
                    <a class="btn btn-default m-2" href="trashed"> <i class="fa fa-duotone fa-trash"></i>Trashed</a>
                </b>
            </div>
        </div>
        <table id="example" class="table  table-bordered table-hover display">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Soft Delete</th>
                <th scope="col">Force Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $rs)
                <tr>
                    <th scope="row">{{$rs->id}}</th>
                    <td>{{$rs->name}}</td>
                    <td>{{$rs->email}}</td>
                    <td ><a href="softDelete/{{$rs->id}}" class="text-warning btn"><i class="fa fa-solid fa-trash"></i> Delete</a></td>
                    <td ><a href="forceDelete/{{$rs->id}}" class="text-danger btn"><i class="fa fa-solid fa-trash"></i> Forever</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
