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
                            <th>NIN</th>
                            <th>TIN No.</th>
                            <th>Computer</th>
                            <th>District</th>
                            <th>Loan Amount</th>
                            <th>Actual Amount</th>
                            <th>Loan Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_loan_request_info as $i=>$loan_request)
                        <tr>
                            @php
                                if( $my_loan_request_info->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($my_loan_request_info->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$loan_request->id}}</td>
                            <td>{{$loan_request->nin_number}}</td>
                            <td>{{$loan_request->tin_number}}</td>
                            <td>{{$loan_request->computer_no}}</td>
                            <td>{{$loan_request->district}}</td>
                            <td>{{ number_format($loan_request->loan_amount)}}</td>
                            @php
                            $surcharge =1000;
                            $surcharge_wiloan_paymentth_overdue_days = Carbon\Carbon::parse($loan_request->overdue_date)->diffInDays() *$surcharge;

                            $client_interest =\DB::table('packages')->where('id',$loan_request->package_id)->value('client_interests');
                            $loan_amount=\DB::table('clients')->where('id',$loan_request->id)->value('loan_amount');
                            $actual_intest_amount=($client_interest/100)*$loan_amount;
                            $dabt =$actual_intest_amount + $loan_amount + $surcharge_wiloan_paymentth_overdue_days;
                            @endphp
                            <td>{{ number_format($dabt)}}</td>
                            <td>{{$loan_request->loan_status}}</td>
                            <td>
                               @if($loan_request->loan_status == 'paid')
                               <button class="btn btn-sm btn-success">Loan Cleared</button>
                               @else
                               <a href="/clients/pay-loan-form/{{$loan_request->id}}" class="btn btn-sm btn-primary">Pay Loan</a>
                               @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$my_loan_request_info->links()}}
            </div>
        </div>
    </div>
</div>
