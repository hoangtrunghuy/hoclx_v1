<script src="{{'admin/vendor/jquery/jquery.min.js'}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{'admin/vendor/bootstrap/js/bootstrap.min.js'}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{'admin/vendor/metisMenu/metisMenu.min.js'}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{'admin/vendor/raphael/raphael.min.js'}}"></script>
<script src="{{'admin/vendor/morrisjs/morris.min.js'}}"></script>
<script src="{{'admin/data/morris-data.js'}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{'admin/dist/js/sb-admin-2.js'}}"></script>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script>
    /*$(document).ready( function () {
        $('#myTable').DataTable();
        CKEDITOR.replace( 'content' );
    } );*/


    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

</script>
<script src="{{ asset('js/sb-admin-2.js') }}"></script>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}