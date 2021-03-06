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
                            <th>Contact</th>
                            <th>Package</th>
                            <th>District</th>
                            <th>Amount</th>
                            <th>Interest %</th>
                            <th>Period</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_packages as $i=>$package)
                        <tr>
                            @php
                                if( $my_packages->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($my_packages->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$package->id}}</td>
                            <td>{{$package->contact}}</td>
                            <td>{{$package->package_name}}</td>
                            <td>{{$package->district}}</td>
                            <td>{{ number_format($package->amount_deposited)}}</td>
                            <td>{{$package->investor_interest}}</td>
                            <td>{{$package->period}} {{$package->state}}</td>
                            <td>{{$package->investor_status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$my_packages->links()}}
            </div>
        </div>
    </div>
</div>
