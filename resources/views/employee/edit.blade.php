@extends('master')
@section('content')
 <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Employee</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        <form action="{{url('employee/'.$employee->id)}}" method="post" enctype="multipart/form-data"  id="" data-parsley-validate class="form-horizontal form-label-left">                           <div class="col-md-12 col-sm-12">
                            @csrf
                            @method('PUT')
                            <div class="col-md-3 col-sm-3 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input type="text" id="name" name="name" value="{{$employee->name}}" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email<span class="required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input type="text" id="last-name" name="email" value="{{$employee->email}}" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                        <div class="col-md-10 col-sm-10">
                                            <div id="gender" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="{{$employee->gender == 'Male'}}" class="join-btn"> &nbsp; Male &nbsp;
                                                </label>
                                                <label class="btn btn-sm btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="{{$employee->gender =='Female'}}" class="join-btn">Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PhoneNo</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="middle-name" class="form-control" type="tel" name="phone" value="{{$employee->phone}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="middle-name" class="form-control" type="text" name="address" value="{{$employee->address}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Experience</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="middle-name" class="form-control" type="text" name="experience" value="{{$employee->experience}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-7 col-sm-7 label-align">salary</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="middle-name" class="form-control" type="text" name="salary" value="{{$employee->salary}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-7 col-sm-7 label-align">Vacation</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="middle-name" class="form-control" type="text" name="vacation" value="{{$employee->vacation}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-7 col-sm-7 label-align">City</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="middle-name" class="form-control" type="text" name="city" value="{{$employee->city}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-7 col-sm-7 label-align">NID No</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="middle-name" class="form-control" type="text" name="nid_no" value="{{$employee->nid_no}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-7 col-sm-7 label-align">Date Of Birth <span class="required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="birthday" class="date-picker form-control" name="DateOfBirth" value="{{$employee->DateOfBirth}}" placeholder="dd-mm-yyyy" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 photo">
                                        <div class="item form-group">
                                            <div class="col-md-8 col-sm-8 employee_img">
                                            <img src="{{ asset('/photo/'.$employee->photo)}}" height="100%" width="100%"/>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Photo</label>
                                            <div class="col-md-5 col-sm-5">
                                                <input id="middle-name" class="form-control" type="File" name="photo">
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                    <div class="col-md-11 col-sm-11 offset-sm-9">
                                        <button class="btn btn-sm btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-sm btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                                    </div>
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
 </div>
@endsection
