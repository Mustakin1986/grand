@extends('master')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
                <a href="{{ route('employee.create') }}">
                <h2><i class="fa-solid fa-user-plus"></i><small></small>All Employee</h2>
                </a>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>phone No</th>
                    <th>Address</th>
                    <th>Experience</th>
                    <th>Salary</th>
                    <th>Vacation</th>
                    <th>City</th>
                    <th>NID</th>
                    <th>Date Of Birth</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $employees as $row )
                     <tr>
                        <td>{{ $loop->index+1}}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->gender }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->experience }}</td>
                        <td>{{ $row->salary }}</td>
                        <td>{{ $row->vacation }}</td>
                        <td>{{ $row->city }}</td>
                        <td>{{ $row->nid_no }}</td>
                        <td>{{ $row->DateOfBirth }}</td>
                        <td>
                            <a href="{{ url('employee/'.$row->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                            {{-- <a href="{{ route('employee.destroy',$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                             --}}
                             <form action="{{'employee/'.$row->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-sm btn-danger delete_btn" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                             </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
