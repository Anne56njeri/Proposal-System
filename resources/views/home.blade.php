@extends('layouts.app')

@section('content')

<div class="jumbotron" style="background-image:url(../images/front.jpg);height:400px;background-repeat: no-repeat;background-position:center ;  background-size: cover;">
  <center><h2 style="color:white;padding:50px;">Proposal Management System</h2></center>
  <center><button class="button" style=""><span>We offer easier solutions</span></button><center>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

@endsection
