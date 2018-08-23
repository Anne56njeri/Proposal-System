@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>


            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
<div class="jumbotron">
  <center><h2>Proposal Management System</h2></center>
</div>
</div>
<div class="container">
  @if (\Session::has('success'))
  <div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
  </div>
  <br>
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>

        <th>Phone Number</th>
        <th>Proposal</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($proposalform as $proposal)

      <tr>
        <td>{{$proposal->id}}</td>
        <td>{{$proposal->name}}</td>


        <td>{{$proposal->number}}</td>
        <td>{{$proposal->Proposal}}</td>

        <td>
        <a href=" " class="btn btn-warning">Accept</a>
        </td>
        <td>
            <form action=" " method="post">
              @csrf
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger" type="submit">Reject</button>
            </form>
          </td>
      </tr>
      @endforeach
      </tbody>
    </table>

</div>
@endsection
