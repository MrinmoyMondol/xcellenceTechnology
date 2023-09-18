
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('dashboard_asset/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('dashboard_asset/assets/node_modules/popper/popper.min.js')}}"></script>
<script src="{{asset('dashboard_asset/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>






<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('dashboard_asset/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('dashboard_asset/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('dashboard_asset/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('dashboard_asset/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{asset('dashboard_asset/assets/node_modules/raphael/raphael-min.js')}}"></script>
<script src="{{asset('dashboard_asset/assets/node_modules/morrisjs/morris.min.js')}}"></script>
<script src="{{asset('dashboard_asset/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{asset('dashboard_asset/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('dashboard_asset/js/dashboard1.js')}}"></script>


{{--<script src="{{asset('dashboard_asset/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>--}}


<!--stickey kit -->
<script src="{{asset('dashboard_asset/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('dashboard_asset/assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Magnific popup JavaScript -->
<script src="{{asset('dashboard_asset/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('dashboard_asset/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>



<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>



<script !src="">
    $(document).ready(function () {
        $('#testimonials').DataTable();
    });
</script>


{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>




<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* When click show user */
        $('body').on('click', '#replyMailModal', function () {
            var id = $(this).data('id');
            var problem_cat = '';
            // console.log(id);
            $.get('/dashboard/support/unSendSupport/' + id , function (data) {

                $('#modal_header').html('Customer Support Details');

                $('#email').html(data.email);
                $('#client_name').html(data.name);
                $('#phone').html(data.phone);
                $('#description').html(data.description);
                $('#comments').html(data.comment);
                $('#cmp_name').html(data.cmp_name);
                $('#client_email').val(data.email);
                $('#client_id').val(data.id);

                var cat = JSON.parse(data.prb_cat);
                var p = '<p>' +  '&nbsp;'+  cat+ '</p>';
                $('#prbCat').html(p);

            })
        });
    });


</script>


<script !src="">
    /* When click show user */
    $('body').on('click', '#viewSupportDetails', function () {
        var id = $(this).data('id');
        var problem_cat = '';
        // console.log(id);
        $.get('/dashboard/support/viewDetails/' + id , function (data) {

            // console.log(data);

            $('#modal_header').html('Customer Support Details');

            $('#email').html(data.email);
            $('#vclient_name').html(data.name);
            $('#phone').html(data.phone);
            $('#description').html(data.description);
            $('#comments').html(data.comment);
            $('#cmp_name').html(data.cmp_name);
            $('#client_email').val(data.email);

            var cat = JSON.parse(data.package);
            var p = '<p>' +  '&nbsp;'+  cat+ '</p>';
            $('#prbCat').html(p);

        })
    });
</script>



<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(function() {
        $('#myTable').DataTable();
        $(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
</script>


<script src="{{ asset('dashboard_asset/js/lightbox.min.js') }}"></script>
<script src="{{ asset('dashboard_asset/js/lightbox-plus-jquery.min.js') }}"></script>

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>
