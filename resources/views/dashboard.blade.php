@extends('layouts.layout')

@section('content')


	                        <div class="row">
	                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <h5 class="text-muted">Number of Events</h5>
	                                        <div class="metric-value d-inline-block">
	                                            <h1 class="mb-1">{{ $total_events }}</h1>
	                                        </div>
	                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
	                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span></span>
	                                        </div>
	                                    </div>
	                                    <div id="sparkline-revenue"></div>
	                                </div>
	                            </div>
	                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <h5 class="text-muted">Number of customers</h5>
	                                        <div class="metric-value d-inline-block">
	                                            <h1 class="mb-1">{{ $total_customers }}</h1>
	                                        </div>
	                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
	                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span></span>
	                                        </div>
	                                    </div>
	                                    <div id="sparkline-revenue2"></div>
	                                </div>
	                            </div>
	                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <h5 class="text-muted">Tickets sold</h5>
	                                        <div class="metric-value d-inline-block">
	                                            <h1 class="mb-1">{{ $total_tickets }}</h1>
	                                        </div>
	                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
	                                            <span>N/A</span>
	                                        </div>
	                                    </div>
	                                    <div id="sparkline-revenue3"></div>
	                                </div>
	                            </div>
	                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <h5 class="text-muted">Total revenue</h5>
	                                        <div class="metric-value d-inline-block">
	                                            <h1 class="mb-1">sh13,500</h1>
	                                        </div>
	                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
	                                            <span></span>
	                                        </div>
	                                    </div>
	                                    <div id="sparkline-revenue4"></div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
	                                <div class="card">
	                                    <h5 class="card-header">Recent Events</h5>
	                                    <div class="card-body p-0">
	                                        <div class="table-responsive">
	                                            <table class="table">
	                                                <thead class="bg-light">
	                                                    <tr class="border-0">
	                                                        <th colspan="9" class="border-0">Event Id</th>
	                                                        <th colspan="9" class="border-0">Name</th>
	                                                        <th colspan="9" class="border-0">Time</th>
	                                                        <th colspan="9" class="border-0">Location</th>
	                                                        <th colspan="9" class="border-0">Price</th>
	                                                        
	                                                    </tr>
	                                                </thead>
	                                                <tbody>
	                                                	@foreach($events as $event)
	                                                	 <tr>
	                                                        <td colspan="9">{{ $event['event_id'] }}</td>
	                                                  
	                                                        <td colspan="9">{{ $event['event_name'] }}</td>
	                                                   
	                                                        <td colspan="9">{{ $event['event_time'] }}</td>
	                                                  
	                                                        <td colspan="9">{{ $event['event_location'] }}</td>
	                                                   
	                                                        <td colspan="9">{{ $event['event_price'] }}</td>
	                                                    </tr>
	                                                	
	                                                    @endforeach
	                                                 
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                                <div class="card">
	                                    <h5 class="card-header">Customer Acquisition</h5>
	                                    <div class="card-body">
	                                        <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
	                                        <div class="text-center">
	                                            <span class="legend-item mr-2">
	                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
	                                            <span class="legend-text">Returning</span>
	                                            </span>
	                                            <span class="legend-item mr-2">

	                                                    <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
	                                            <span class="legend-text">First Time</span>
	                                            </span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>  
	                    </div>
	                </div>
            </div>
        </div>
@endsection