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

<!--Sweet Alerts -->
<script src="{{ asset('template/backend/') }}/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
    $(document).ready(function() {
        $("body").on("click", ".remove-data", function(e) {
            e.preventDefault();
            let targetUrl = $(this).attr("href");
            let id = $(this).attr("data-id");
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ml-3',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang dihapus tidak bisa dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '<i class="fa fa-trash"></i> Hapus!',
                cancelButtonText: '<i class="fa fa-sign-out-alt"></i> Batal!',
            }).then((result) => {
                if (result.value) {
                    var postData = {};
                    postData["id"] = id;
                    $.get(targetUrl, postData, function(willDelete) {
                        Swal.fire(
                            'Dihapus!',
                            'Data telah dihapus!',
                            'success'
                        ).then(function() {
                            location.reload();
                        });
                    });
                }
            })
        });
    });

</script>
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
