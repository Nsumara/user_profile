@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form  action="{{ route('user.store') }}" class="form-group border p-5" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" id="avatar" src="">
                    <input type="file" class="form-control" name="file"  onchange="document.getElementById('avatar').src = window.URL.createObjectURL(this.files[0])" id="exampleInputPassword1"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50"></span><span>{{ $user->email }}</span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="text-center">Complete Your Profile</h1>
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
                        <div class="col-md-6"><label class="labels">Name</label><input type="text"  value=" {{ $user->name }}" name="name" readonly class="form-control" placeholder="first name" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" value=" {{ $user->email }}" name="email"  readonly class="form-control" placeholder="enter phone number" value=""></div>
                        <div class="col-md-12"><label class="labels">Phone</label><input type="text"  name="phone" class="form-control" placeholder="enter your Mobil Number" value=""></div>
                        <div class="col-md-12"><label class="labels">CNIC</label><input type="text"  name="cnic" class="form-control" placeholder="enter your cnic" value=""></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text"  name="address" class="form-control" placeholder="enter Your Address" value=""></div>
                    </div>

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Submit</button></div>
                </div>
            </div>

        </div>
    </div>
    </div>

    </div>
</form>

</body>
</html>
@endsection
