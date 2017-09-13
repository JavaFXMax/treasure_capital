@extends('layouts.main')
@section('content')
<style>

  .main_dashboard{
      background-image: url({{ URL::asset('site/img/slides/bg/001.jpg') }});
      height: 70%;
      text-align: center;
      background-position: center center;
  }

  .main_dashboard img{
      /*width: 50%;*/
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      color: #E7E7E7;
  }

</style>

<div class="row">
    <div class="col-lg-12" style="margin-top: -12%;">
	<div class="main_dashboard">
	    <img src="{{ URL::asset('site/img/xara.jpg') }}" width="50%" alt="Xara Financials">      
      <div class="col-lg-12">
          @if(Session::has('notice2'))
      <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{{ Session::get('notice2')}}}</strong> 
      </div>      
    @endif  
    @if(Session::get('notice'))
            <div class="alert">{{{ Session::get('notice') }}}</div>
        @endif
  <div class="panel panel-success">
      <div class="panel-heading">
          <h4>{{{ Lang::get('messages.members') }}}</h4>
        </div>
      <div class="panel-body table-responsive">
    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">
      <thead>
        <th>#</th>
        <th>Member Number</th>
        <th>Member Name</th>
        <th>Branch Name</th>
        <th>Phone Number</th>
        <th>ID Number</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        @foreach($members as $member)
        <tr>
          <td> {{ $i }}</td>
          <td>{{ $member->membership_no }}</td>
          <td>{{ $member->name }}</td>
          <td>{{ $member->branch->name }}</td>
          <td>{{ $member->phone }}</td>
          <td>{{ $member->id_number }}</td>
          <td>
             <a href="{{ URL::to('member/savingaccounts/'.$member->id) }}" class="btn btn-info btn-sm">{{{ Lang::get('messages.savings') }}}</a>
           </td>
           <td>
              <a href="{{  URL::to('members/loanaccounts/'.$member->id) }}" class="btn btn-info btn-sm">{{{ Lang::get('messages.loans') }}}</a>
            </td>
      <td>
             <a href="{{ URL::to('sharetransactions/show/'.$member->shareaccount->id) }}" class="btn-sm-info btn-info btn-sm">{{{ Lang::get('messages.shares') }}}</a>
            </td>
            <td>
             <a href="{{ URL::to('members/show/'.$member->id) }}" class="btn btn-info btn-sm">{{{ Lang::get('messages.manage') }}}</a>
      </td>
        </tr>
        <?php $i++; ?>
        @endforeach
      </tbody>
    </table>
</div>
</div>
	</div>
    </div>
</div>

@stop
