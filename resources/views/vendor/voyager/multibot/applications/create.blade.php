@extends('voyager::master')

@section('content')

<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-github"></i> Manual Application
    </h1> 
</div>

<div class="page-content edit-add container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <!-- form start -->
                <form class="form-edit-add-new" action="/admin/multibot/applications/create/manual" method="POST">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group  col-md-12">
                            <label for="name">Name</label>
                            <input required="" type="text" class="form-control" name="name" placeholder="Enter Name" value="">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="age">Age</label>
                            <input required="" type="text" class="form-control" name="age" placeholder="Enter Age" value="">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="location">Location</label>
                            <input required="" type="text" class="form-control" name="location" placeholder="Enter Location" value="">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="interests">Game Interests</label>
                            <input required="" type="text" class="form-control" name="interests" placeholder="Enter Game Interests" value="">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="current">Current SR</label>
                            <input required="" type="text" class="form-control" name="current" placeholder="Enter Current SR" value="">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="conduct">Conduct</label>
                            <input required="" type="text" class="form-control" name="conduct" placeholder="Enter Conduct" value="">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="reference">Reference</label>
                            <select class="form-control" name="reference">
                                @foreach($users as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select> 
                        </div>
                    </div>
                    <!-- panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection