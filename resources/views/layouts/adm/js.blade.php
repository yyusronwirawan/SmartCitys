
    <!-- jQuery -->
    <script src="{{ asset('adm') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adm') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    {{-- <script src="{{ asset('adm') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('adm') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adm') }}/dist/js/demo.js"></script>

    <!-- SweetAlert2 -->
    <script src="{{ asset('adm') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="{{ asset('adm') }}/plugins/toastr/toastr.min.js"></script>

    <!-- Select2 -->
    <script src="{{ asset('adm') }}/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>

    <!-- Moment JS -->
    <script src="{{ asset('assets/moment.min.js') }}"></script>
    <script src="{{ asset('assets/moment-with-locales.min.js') }}"></script>

    <!-- DataTables & Plugins -->
    <script src="{{ asset('adm') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('adm') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
            let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

            let languages = {
                'id': "{{ asset('assets/lang/datatables/id.json') }}",
                'en': "{{ asset('assets/lang/datatables/en.json') }}",
            };
            // $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
            //     className: 'btn'
            // })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages["{{ app()->getLocale() == 'id' ? 'id' : 'en' }}"]
                },
                // columnDefs: [{
                //     orderable: false,
                //     className: 'select-checkbox',
                //     targets: 0
                // }, {
                //     orderable: false,
                //     searchable: false,
                //     targets: -1
                // }],
                // select: {
                //     style: 'multi+shift',
                //     selector: 'td:first-child'
                // },
                // order: [],
                // scrollX: true,
                // pageLength: 100,
                // dom: 'lBfrtip<"actions">',
                // buttons: [{
                //         extend: 'copy',
                //         className: 'btn-default',
                //         text: copyButtonTrans,
                //         exportOptions: {
                //             columns: ':visible'
                //         }
                //     },
                //     {
                //         extend: 'csv',
                //         className: 'btn-default',
                //         text: csvButtonTrans,
                //         exportOptions: {
                //             columns: ':visible'
                //         }
                //     },
                //     {
                //         extend: 'excel',
                //         className: 'btn-default',
                //         text: excelButtonTrans,
                //         exportOptions: {
                //             columns: ':visible'
                //         }
                //     },
                //     {
                //         extend: 'pdf',
                //         className: 'btn-default',
                //         text: pdfButtonTrans,
                //         exportOptions: {
                //             columns: ':visible'
                //         }
                //     },
                //     {
                //         extend: 'print',
                //         className: 'btn-default',
                //         text: printButtonTrans,
                //         exportOptions: {
                //             columns: ':visible'
                //         }
                //     },
                //     {
                //         extend: 'colvis',
                //         className: 'btn-default',
                //         text: colvisButtonTrans,
                //         exportOptions: {
                //             columns: ':visible'
                //         }
                //     }
                // ]
            });
            // $.fn.dataTable.ext.classes.sPageButton = '';
        });
    </script>
