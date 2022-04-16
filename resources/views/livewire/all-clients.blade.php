<div>
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-right">
                    <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add client</button>
                </div>
            </div>
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
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>NiN</th>
                            <th>Computer No.</th>
                            <th>TIN No.</th>
                            <th>DOB</th>
                            <th>Employ't Status</th>
                            <th>Employer</th>
                            <th>District</th>
                            <th>Amount</th>
                            <th>Interest %</th>
                            <th>Debt</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients_with_paid_loans as $i=>$client)
                        <tr>
                            @php
                                if( $clients_with_paid_loans->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($clients_with_paid_loans->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->phone_number}}</td>
                            <td>{{$client->nin_number}}</td>
                            <td>{{$client->computer_no}}</td>
                            <td>{{$client->tin_number}}</td>
                            <td>{{$client->date_of_birth}}</td>
                            <td>{{$client->employment_status}}</td>
                            <td>{{$client->employer}}</td>
                            <td>{{$client->district}}</td>
                            <td>{{ number_format($client->loan_amount)}}</td>
                            <td>{{$client->client_interests}}</td>
                            @php
                            $client_interest =\DB::table('packages')->where('id',$client->package_id)->value('client_interests');
                            $loan_amount=\DB::table('clients')->where('id',$client->id)->value('loan_amount');
                            $actual_intest_amount=($client_interest/100)*$loan_amount;
                            $dabt =$actual_intest_amount + $loan_amount;
                            @endphp
                            <td>{{ number_format($dabt)}}</td>
                            <td><label class="badge badge-pill badge-success">{{$client->loan_status}}</label></td>
                            <td>
                                <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$clients_with_paid_loans->links()}}
            </div>
        </div>
    </div>
</div>
