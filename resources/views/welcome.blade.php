<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style type="text/css">
        h1 {
            text-align: center;
        }
        body {
            background-color: blanchedalmond;
        }
    </style>
</head>
<body>
    <h1><b>EMPLOYEE LIST</b></h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Add Employee Card</h5>
            <a href="/employee/add" class="btn btn-primary">Add Employee</a>
        </div>
    </div>

    <br>

    @foreach ($karyawan as $item)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title"> {{$item->employeeName}} </h3>
            <p class="card-text">this is employee number {{$item->id}}. <br> personal details are shown below.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <b>Employee's age</b> <br> {{$item->age}} </li>
            <li class="list-group-item"> <b>Employee's home address</b> <br> {{$item->address}} </li>
            <li class="list-group-item"> <b>Employee's phone number</b> <br> {{$item->phoneNumber}} </li>
        </ul>
        <div class="card-body">
            <a href="/employee/update/{{$item->id}}/" class="btn btn-primary">Update Details</a>
        </div>
        <div class="card-body">
            <form action="/employee/delete/{{$item->id}}/" method="GET">
                @csrf
                @method('DELETE')
                <a href="/employee/delete/{{$item->id}}/" class="btn btn-danger">Delete</a>
            </form>
        </div>
    </div>
    <br>
    @endforeach
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>