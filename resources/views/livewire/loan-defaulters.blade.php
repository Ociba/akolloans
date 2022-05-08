<div>
   @livewireStyles
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0 mb-2">
                <div class="col-sm-6">
                   <a href="/" class="btn btn-sm btn-primary">Export as Excel</a>
                </div>
                <div class="col-sm-6 text-right">
                   <a href="/" class="btn btn-sm btn-primary">Export as PDF</a>
                    
                </div>
            </div>
            <div class="row m-l-0">
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
                        <input type="text" class="form-control" placeholder="Computer Number" wire:model="searchTerm">
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
                            <th>Overdue</th>
                            <th>Amount With Charge</th>
                            <th>Total Debt</th>
                            <th>Status</th>
                            {{--<th>Option</th>--}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($loan_defaulter as $i=>$client)
                        <tr>
                            @php
                                if( $loan_defaulter->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($loan_defaulter->currentPage()-1);
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

                            $surcharge =1000;
                            $surcharge_with_overdue_days = Carbon\Carbon::parse($client->overdue_date)->diffInDays() *$surcharge;
                            @endphp
                            <td>{{Carbon\Carbon::parse($client->overdue_date)->diffInDays()}} Days</td>
                            <td>{{ number_format($surcharge_with_overdue_days)}}</td>
                            <td>{{ number_format($dabt + $surcharge_with_overdue_days)}}</td>
                            <td><label class="badge badge-pill badge-danger">{{$client->loan_status}}</label></td>
                            {{--<td>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                            --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                {{$loan_defaulter->links()}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>
