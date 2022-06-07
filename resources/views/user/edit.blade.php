<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}
img{
    height: 100px;

}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
        </style>
</head>
<body>

<form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" id="avatar" src="{{ asset('storage/'.$user->partial->avatar) }}">
                    <input type="file" class="form-control" name="file"  onchange="document.getElementById('avatar').src = window.URL.createObjectURL(this.files[0])" id="exampleInputPassword1"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50"></span><span>{{ $user->email }}</span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Reset your Profile</h4>
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text"  value=" {{ $user->name }}" name="name"  class="form-control" placeholder="first name" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" value=" {{ $user->email }}" name="email" class="form-control" placeholder="enter phone number" value=""></div>
                        <div class="col-md-12"><label class="labels">Phone</label><input type="text" value=" {{ $user->partial->phone }}" name="phone" class="form-control" placeholder="enter address" value=""></div>
                        <div class="col-md-12"><label class="labels">CNIC</label><input type="text" value=" {{ $user->partial->cnic }}" name="cnic" class="form-control" placeholder="enter email id" value=""></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" value=" {{ $user->partial->address }}" name="address" class="form-control" placeholder="enter email id" value=""></div>
                    </div>

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update</button></div>
                </div>
            </div>

        </div>
    </div>
    </div>

    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

