@section('title', 'Generate XML')

<x-app-layout>
    <x-slot name="header">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('public/back/css/datatable-buttons/buttons.bootstrap4.min.css') }}">
        <style>
            #sparks li {
                display: inline-block;
                max-height: 47px;
                overflow: hidden;
                text-align: left;
                box-sizing: content-box;
                -moz-box-sizing: content-box;
                -webkit-box-sizing: content-box;
                width: 95px;
            }

            #sparks li h5 {
                color: #555;
                float: none;
                font-size: 11px;
                font-weight: 400;
                margin: -3px 0 0 0;
                padding: 0;
                border: none;
                font-weight: 900;
                text-transform: uppercase;
                webkit-transition: all 500ms ease;
                -moz-transition: all 500ms ease;
                -ms-transition: all 500ms ease;
                -o-transition: all 500ms ease;
                transition: all 500ms ease;
                text-align: center;
            }

            #sparks li span {
                color: #324b7d;
                display: block;
                font-weight: 900;
                margin-top: 5px;
                webkit-transition: all 500ms ease;
                -moz-transition: all 500ms ease;
                -ms-transition: all 500ms ease;
                -o-transition: all 500ms ease;
                transition: all 500ms ease;
            }

            #sparks li h5:hover {
                color: #999999;
            }

            #sparks li span:hover {
                color: #ffffff;
            }
        </style>
    </x-slot>


    <div id="main" role="main">
        <!-- RIBBON -->
        <div id="ribbon"></div>
        <!-- END RIBBON -->
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('scenario-six-list') }}">
                            <button class="btn cms_top_btn top_btn_height ">{{ __('Generate XML') }}</button>
                        </a>

                        <a href="{{ route('scenario-six-all-list') }}">
                            <button class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('user.view_all') }}</button>
                        </a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <section id="widget-grid" class="">

                <!-- row -->
                <div class="row">

                    <!-- NEW WIDGET START -->

                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <!-- Widget ID (each widget will need unique ID)-->

                        <div class="jarviswidget jarviswidget-color-darken" id="scenario_six" data-widget-editbutton="false">
                            <header>
                                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                <h2>{{ __('Scenario Six Transactions') }}</h2>
                            </header>

                            <!-- widget div-->
                            <div>

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->
                                </div>
                                <!-- end widget edit box -->


                                <!-- widget content -->
                                <div class="widget-body no-padding table-responsive">
                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">

                                                <form action="{{ route('generate-old-xml-six') }}" method="POST">

                                                    @csrf

                                                  <div class="row">

                                                    <!-- Add From Date input -->


                                                    <div class="col-lg-3">
                                                        <div class="">

                                                            <label for="scenario_type" style="color: #5d5d5d; float: left; width: 100%; text-align: start;">Scenario Type:</label>
                                                            <input type="text" id="scenario_type" name="scenario_type" class="form-control" value="{{ $xml_type }}" readonly>

                                                        </div>
                                                    </div>

                                                    <!-- Add From Date input -->

                                                    <div class="col-lg-3">

                                                        <label for="from_date" style="color: #5d5d5d; float: left;">From Date:</label>

                                                        <input type="date" id="from_date" name="from_date" class="form-control" value="{{ $from_date }}" readonly>

                                                    </div>


                                                    <!-- Add To Date input -->

                                                    <div class="col-lg-3">

                                                        <label for="to_date" style="color: #5d5d5d; float: left;">To Date:</label>

                                                        <input type="date" id="to_date" name="to_date" class="form-control" value="{{ $to_date }}" readonly>

                                                    </div>



                                                    <!-- Add Generate XML button -->

                                                    <div class="col-lg-3">

                                                        <label>&nbsp;</label> <!-- Spacer -->

                                                        <button id="generate_xml" class="btn btn-primary" style="margin-top: 16px;">Generate XML</button>

                                                    </div>

                                                  </div>



                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                    <table class="table table-bordered data-table" width="100%">
                                        <thead>
                                            <tr>
                                                <th>{{ __('No') }}</th>
                                                <th>{{ __('Scenario Type') }}</th>
                                                <th>{{ __('Transaction No') }}</th>
                                                <th>{{ __('Internal Ref No') }}</th>
                                                <th>{{ __('Transaction Location') }}</th>
                                                <th>{{ __('Transaction Description') }}</th>
                                                <th>{{ __('Date Transaction') }}</th>
                                                <th>{{ __('Value Date') }}</th>
                                                <th>{{ __('Transmode Code') }}</th>
                                                <th>{{ __('Edit') }}</th>
                                                <th width="100px">{{ __('Status') }}</th>
                                                <th width="100px">{{ __('Delete') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- end widget content -->
                            </div>
                            <!-- end widget div -->
                        </div>
                        <!-- end widget -->
                    </article>
                    <!-- WIDGET END -->
                </div>
                <!-- end row -->
                <!-- end row -->
            </section>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('public/back/js/plugin/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatables/dataTables.colVis.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatables/dataTables.tableTools.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatable-responsive/datatables.responsive.min.js') }}"></script>

        <script src="{{ asset('public/back/js/plugin/datatable-buttons/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatable-buttons/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatable-buttons/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatable-buttons/buttons.print.min.js') }}"></script>
        <script src="{{ asset('public/back/js/plugin/datatable-buttons/buttons.colVis.min.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                var id = "{{ $log_id }}";
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
                    ajax: {
                        url: "{{ url('scenario-six-edit') }}/" + id, // Construct the AJAX URL with the id
                        type: 'GET'
                    },
                    columnDefs: [{
                            "defaultContent": "-",
                            "targets": "_all"
                        }],
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'id'
                        },
                        {
                            data: 'scenario_type',
                            name: 'scenario_type'
                        },
                        {
                            data: 'transactionnumber',
                            name: 'transactionnumber'
                        },
                        {
                            data: 'internal_ref_number',
                            name: 'internal_ref_number'
                        },
                        {
                            data: 'transaction_location',
                            name: 'transaction_location'
                        },
                        {
                            data: 'transaction_description',
                            name: 'transaction_description'
                        },
                        {
                            data: 'date_transaction',
                            name: 'date_transaction'
                        },
                        {
                            data: 'value_date',
                            name: 'value_date'
                        },
                        {
                            data: 'transmode_code',
                            name: 'transmode_code'
                        },
                        {
                            data: 'edit',
                            name: 'edit',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'activation',
                            name: 'activation',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'blockscenariosix',
                            name: 'blockscenariosix',
                            orderable: false,
                            searchable: false
                        },
                    ],
                    dom: 'Blfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                });

            });

            $('#scenario_six').on('click', '.btn-delete', function(e) {
                event.preventDefault();
                const url = $(this).attr('href');
                var ent_id = $(this).val();
                swal({
                    title: 'Are you sure?',
                    text: 'This record will be permanantly deleted!',
                    icon: 'warning',
                    buttons: ["Cancel", "Yes"],
                }).then(function(value) {
                    if (value == true) {
                        window.location.replace("blockscenariosix/" + ent_id);
                    }
                });
            });
        </script>
    </x-slot>
</x-app-layout>
