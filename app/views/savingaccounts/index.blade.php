

@extends('layouts.savings')


@section('content')
<br/>
@if(Session::has('notice'))
  <div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>{{{ Session::get('notice')}}}</strong> 
  </div>      
@endif  
<div class="row">
	<div class="col-lg-12">
  <h3>Share Accounts</h3>
<hr>
</div>	
</div>
<div class="row">
	<div class="col-lg-12">

    <div class="panel panel-default">
      <div class="panel-heading">
          <a class="btn btn-info btn-sm" href="{{ URL::to('savingaccounts/create')}}">New Share Account</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Member Name</th>
        <th>Shares Product</th>
        <th>Account Number</th>
         
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($savingaccounts as $saving)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $saving->member->name }}</td>
          <td>{{ $saving->savingproduct->name }}</td>
          <td>{{ $saving->account_number }}</td>
         
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>          
                  <ul class="dropdown-menu" role="menu">
                    <!--
                    <li>
                      <a href="{{URL::to('savingaccounts/edit/'.$saving->id)}}">Update</a>
                    </li>
                    -->                   
                    <li>
                      <a href="{{URL::to('savingaccounts/delete/'.$saving->id)}}">Delete</a>
                    </li>                    
                  </ul>
                  </div>
          </td>
        </tr>

        <?php $i++; ?>
        @endforeach


      </tbody>


    </table>
  </div>
  </div>
</div>
@stop