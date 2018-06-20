<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
@section('javascript')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<script>
@if(Session::has('message'))
    toastr.options({
        "preventDuplicates": true,
        "preventOpenDuplicates": true
    });

    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
@endif
</script>
@if(isset($applications))
<script>
var dataSet = [
    @foreach($applications as $application)
    ["","{{ $application['id'] }}","{{ $application['name'] }}","{{ $application['age'] }}","{{ $application['location'] }}","{{ $application['game'] }}","{{ $application['current'] }}","{{ $application['conduct'] }}","{{ $application['reference'] }}","{{ date('d/m/Y', strtotime($application['application_date'])) }}", "{{ $application['status'] }}"],
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
            { title: "" },
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
        ],
        "columnDefs": [{
                "targets": 0,  // column target which that render will return text to, starts from 0 
                "data": "text",
                "render": function(data, type, full, meta) {
                    return '<input name="selectedApps[]" type="checkbox" value="' + String(full).split(',')[8] + '">';
                }
            }]
    } );
} );
</script>
@endif
@endsection