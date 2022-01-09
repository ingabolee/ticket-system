@extends('layouts.layout')

@section('content')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">All Events</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead >
                                                        <tr>
                                                            <th>Event Id</th>
                                                            <th>Name</th>
                                                            <th>Time</th>
                                                            <th>Location</th>
                                                            <th>Price</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($events as $event)
                                                         <tr>
                                                            <td>{{ $event['event_id'] }}</td>
                                                      
                                                            <td>{{ $event['event_name'] }}</td>
                                                       
                                                            <td>{{ $event['event_time'] }}</td>
                                                      
                                                            <td>{{ $event['event_location'] }}</td>
                                                       
                                                            <td>{{ $event['event_price'] }}</td>
                                                        </tr>
                                                        
                                                        @endforeach
                                                     
                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                        <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="/assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="/assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

@endsection