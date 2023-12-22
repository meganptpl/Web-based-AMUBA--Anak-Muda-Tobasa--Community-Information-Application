@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<br>

<table class="table table-bordered" id="table_user">
<thead>
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th width="280px">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
       <a class="btn btn-success" href="{{ route('users.show',$user->id) }}">Lihat</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
  </tbody>
 @endforeach

</table>

<div class="bottommargin mx-auto" style="max-width: 750px; min-height: 350px;">
    <canvas id="chart-0"></canvas>
</div>

{!! $data->render() !!}

@endsection

