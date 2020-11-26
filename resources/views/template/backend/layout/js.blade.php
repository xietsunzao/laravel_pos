<script src="{{ asset('template/backend/') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/js/popper.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="{{ asset('template/backend/') }}/assets/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="{{ asset('template/backend/') }}/assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('template/backend/') }}/assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="{{ asset('template/backend/') }}/assets/js/app-script.js"></script>

<!--Data Tables js-->
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js">
</script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="{{ asset('template/backend/') }}/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>


<script>
    $(document).ready(function() {
        //Default data table
        $('#default-datatable').DataTable();
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });

</script>
