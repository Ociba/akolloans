<div>
    @livewireStyles
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-1">
                 <a href="/" class="btn btn-sm btn-primary">Export as Excel</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                 <a href="/" class="btn btn-sm btn-primary">Export as PDF</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                     @if(in_array('Can add Investor', auth()->user()->getUserPermisions()))
                    <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Investor</button>
                    @endif
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
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>District</th>
                            <th>Amount</th>
                            <th>Interest %</th>
                            <th>Period</th>
                            <th>Status</th>
                            @if(in_array('Can view Investor options', auth()->user()->getUserPermisions()))
                            <th>Option</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($investors as $i=>$investor)
                        <tr>
                            @php
                                if( $investors->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($investors->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$investor->id}}</td>
                            <td>{{$investor->name}}</td>
                            <td>{{$investor->contact}}</td>
                            <td>{{$investor->email}}</td>
                            <td>{{$investor->district}}</td>
                            <td>{{ number_format($investor->amount_deposited)}}</td>
                            <td>{{$investor->investor_interest}}</td>
                            <td>{{$investor->period}} {{$investor->state}}</td>
                            <td>{{$investor->investor_status}}</td>
                            @if(in_array('Can suspend Investor', auth()->user()->getUserPermisions()))
                            <td>
                                 @if($investor->status == 'active')
                                <a href="/admin/suspend-investor/{{$investor->id}}" class="btn btn-success btn-sm"><i class="feather icon-edit"></i>&nbsp;Suspend </a>
                                @endif
                                @else
                                     @if(in_array('Can activate Investor', auth()->user()->getUserPermisions()))
                                    <a href="/admin/activate-investor/{{$investor->id}}" class="btn btn-info btn-sm"><i class="feather icon-check"></i>&nbsp; Activate</a>
                                    @endif
                            
                                @endif
                                @if(in_array('Can delete Investor', auth()->user()->getUserPermisions()))
                                <a href="/admin/delete-investor/{{$investor->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                    {{$investors->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
