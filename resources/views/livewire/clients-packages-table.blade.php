<div>
    <div class="card">
        <div class="card-body">
          
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group col-sm-6">
                        <label class="form-label">Entries</label>
                        <select class="custom-select" wire:mode='per_page'>
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                            <option>50</option>
                            <option>60</option>
                            <option>70</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5">
                    <div class="form-group col-sm-6 align-items-right">
                        <label class="form-label">Search</label>
                        <input type="text" class="form-control" wire:model="searchTerm">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            {{--<th>Package</th>--}}
                            <th>Amount Range</th>
                            <th>Interest %</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $i=>$package)
                        <tr class="text-center">
                            @php
                                if( $packages->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($packages->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$package->id}}</td>
                            {{--<td>{{$package->package_name}}</td>--}}
                            <td>{{ number_format($package->from)}}-{{ number_format($package->to)}}</td>
                            <td>{{$package->client_interests}}</td> 
                            <td>
                                <a href="/clients/request-for-loan/{{$package->id}}" class="btn btn-warning btn-sm"><i class="feather icon-plus"></i>Request For First Time Loan</a>
                                <a href="/clients/new-loan/{{$package->id}}" class="btn btn-success btn-sm"><i class="feather icon-plus"></i>Request For New Loan</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$packages->links()}}
            </div>
        </div>
    </div>
</div>
