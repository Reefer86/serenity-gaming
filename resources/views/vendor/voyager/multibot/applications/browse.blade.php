@extends('voyager::master')

@section('content')

<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-github"></i> Multibot
    </h1>
    <a href="http://localhost:8000/admin/multibot/applications/create" class="btn btn-success btn-add-new">
        <i class="voyager-plus"></i> <span>Manual Application</span>
    </a>          
</div>

<div class="page-content browse container-fluid">
   <div class="alerts">
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-bordered">
            <div class="panel-body">
               <table id="datatableMultibot"></table>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

@section('javascript')
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script>
var dataSet = [
    @foreach($applications as $application)
    ["{{ $application['id'] }}","{{ $application['name'] }}","{{ $application['age'] }}","{{ $application['location'] }}","{{ $application['game'] }}","{{ $application['current'] }}","{{ $application['conduct'] }}","{{ $application['reference'] }}","{{ date('d/m/Y', strtotime($application['application_date'])) }}", "{{ $application['status'] }}"],
    @endforeach
];

$(document).ready(function() {
    $('#datatableMultibot').DataTable( {
        data: dataSet,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        columns: [
            { title: "id" },
            { title: "Name" },
            { title: "Age" },
            { title: "Location" },
            { title: "Game Interests" },
            { title: "Current SR" },
            { title: "Conduct" },
            { title: "Reference" },
            { title: "Application Date" },
            { title: "Status" }
        ]
    } );
} );
</script>
@endsection
