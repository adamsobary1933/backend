@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                          <h3> <a href="logout"  style="color:black">Klik Disini->Logout</a></h3>
                          <br><br>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div role='alert' aria-live='assertive' aria-atomic='true' class='alert' style='color:black' data-autohide='false' >
                                            <h4>Username</h4> <strong><h4>{{ Auth::user()->name }}</h4> </strong><h4>Email</h4> <strong><h4>{{ Auth::user()->email }}</h4></strong>
                                            <h3>maaf anda sudah login!!silahkan logout dulu dan login kembali!!</h3>
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                    <body style="background-image: url(backend/assets/img/avatars/background.jpg); background-size:100%">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
