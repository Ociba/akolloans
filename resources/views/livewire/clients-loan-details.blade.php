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
                            <th>Date Of Birth</th>
                            <th>Contact</th>
                            <th>NIN</th>
                            <th>TIN No.</th>
                            <th>Computer</th>
                            <th>Employment Status</th>
                            <th>Employer</th>
                            <th>District</th>
                            <th>Loan Amount</th>
                            <th>Actual Amount</th>
                            <th>Loan Status</th>
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
                            <td>{{$loan_request->date_of_birth}}</td>
                            <td>{{$loan_request->phone_number}}</td>
                            <td>{{$loan_request->nin_number}}</td>
                            <td>{{$loan_request->tin_number}}</td>
                            <td>{{$loan_request->computer_no}}</td>
                            <td>{{$loan_request->employment_status}}</td>
                            <td>{{$loan_request->employer}}</td>
                            <td>{{$loan_request->district}}</td>
                            <td>{{ number_format($loan_request->loan_amount)}}</td>
                            <td></td>
                            <td>{{$loan_request->loan_status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$my_loan_request_info->links()}}
            </div>
        </div>
    </div>
</div>
