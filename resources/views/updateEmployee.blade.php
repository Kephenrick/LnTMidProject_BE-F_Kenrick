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
            background-color: darkgrey;
        }
    </style>
</head>
<body>
    <form method="POST" action="/employee/saveUpdate/{{$karyawan->id}}/">
        @csrf
        @method('PUT')
        
        <h1>Update Employee Menu</h1>
        <br>
        <hr>
        <h2>Update Form</h2>
        <hr>

        <div class="mb-3">
            <label for="employeeName" class="form-label">Name</label>
            <input type="text" class="form-control" id="employeeName" placeholder="Enter your name" name="namaEmployee" minlength="5" maxlength="20" value="{{$karyawan->employeeName}}">
        </div>
        <div class="mb-3">
            <label for="employeeAge" class="form-label">Age</label>
            <input type="number" class="form-control" id="employeeAge" placeholder="Enter your age (min. 21)" name="umurEmployee" min="21" value="{{$karyawan->age}}">
        </div>
        <div class="mb-3">
            <label for="employeeAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="employeeAddress" placeholder="Enter your address" name="alamatEmployee" minlength="10" maxlength="40" value="{{$karyawan->address}}">
        </div>
        <div class="mb-3">
            <label for="employeePN" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="employeePN" placeholder="Enter your phone number (ex. 08XXXXXXXXXX)" name="noTelpEmployee" value="{{$karyawan->phoneNumber}}" pattern="[0]{1}[8]{1}[0-9]{10}|[0]{1}[8]{1}[0-9]{9}|[0]{1}[8]{1}[0-9]{8}|[0]{1}[8]{1}[0-9]{7}" required />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/" class="btn btn-light">Return Home</a>
      </form>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>