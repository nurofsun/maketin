import $ from 'jquery';
import 'datatables.net-bs4';
import '../../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css';
//require( 'datatables.net-bs4' )();
//require( 'datatables.net-buttons-bs4' )();

$(document).ready(function() {
    let studentTable = $('#studentTable').DataTable({
        "lengthMenu": [[5, 10, -1], [5, 10, "All"]]
    });
});
