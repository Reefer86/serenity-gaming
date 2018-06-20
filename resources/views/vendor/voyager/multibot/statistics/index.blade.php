<!DOCTYPE html>
@extends('voyager::master')

@section('content')
<style>
    .rightButton {
        float: right;
        margin-top: 37px !important;
    }
    .marLeft {
        margin-left: 10px;
    }
</style>
<form class="form-edit-add-new" action="/admin/multibot/applications/handle" method="POST">
{{ csrf_field() }}
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-github"></i> Multibot
        </h1>
        <a href="http://localhost:8000/admin/multibot/applications/create" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Discord Statistics</span>
        </a>  
        <input type="submit" name="accept" class="btn btn-success btn-add-new rightButton marLeft" value="Accept Application(s)"></input>
        <input type="submit" name="decline" class="btn btn-danger btn-add-new rightButton marLeft" value="Decline Application(s)"></input>        
    </div>

    <div class="page-content browse container-fluid">
        <div class="alerts">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                    <h1>This is where the content would go!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@extends('shared.admin.footer')