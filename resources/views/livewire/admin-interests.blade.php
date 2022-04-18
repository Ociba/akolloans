<div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group col-sm-6">
                        <label class="form-label">Entries</label>
                        <select class="custom-select" wire:model="per_page">
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
                        <input type="text" class="form-control" wier:model="searchTerm">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-cente">
                            <th>No.</th>
                            <th>Client</th>
                            <th>Package</th>
                            <th>Investors Interest</th>
                            <th>Clients Interest</th>
                            <th>Loan</th>
                            <th>Amount</th>
                            <th>Investor Amount</th>
                            <th>Company Amount</th>
                            <th>Paid On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($interests as $i=>$client)
                        <tr>
                            @php
                                if( $interests->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($interests->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$client->id}}</td> 
                            <td>{{$client->name}}</td>
                            <td>{{$client->package_name}}</td>
                            <td>{{$client->investor_interest}} %</td>
                            <td>{{$client->client_interests}} %</td>
                            <td>{{$client->loan_amount}}</td>
                            <td>{{$client->paid_amount}}</td>
                            <td>{{$client->interest_for_investor}}</td>
                            <td>{{$client->company_interest}}</td>
                            <td>{{ date('d-m-Y', strtotime($client->created_at))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$interests->links()}}
            </div>
        </div>
    </div>
</div>
