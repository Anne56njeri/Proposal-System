@extends('layouts.app')

@section('content')
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
<div class="container">
<div class="jumbotron" style="background-image:url(../images/front.jpg);">
  <center><h2>Proposal Management System</h2></center>
</div>
</div>

@endsection
