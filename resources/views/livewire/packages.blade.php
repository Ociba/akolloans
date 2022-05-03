<div>
@livewireStyles
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-right">
                    @if(in_array('Can add Package', auth()->user()->getUserPermisions()))
                    <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Package</button>
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
                            <th>Package Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Investors Interest %</th>
                            <th>Client Interest %</th>
                            <th>Company Interest</th>
                            <th>Created By</th>
                            @if(in_array('Can view Packages options', auth()->user()->getUserPermisions()))
                            <th>Option</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $i=>$package)
                        <tr>
                            @php
                                if( $packages->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($packages->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$package->id}}</td>
                            <td>{{$package->package_name}}</td>
                            <td>{{ number_format($package->from)}}</td>
                            <td>{{ number_format($package->to)}}</td>
                            <td>{{$package->investor_interest}}</td>
                            <td>{{$package->client_interests}}</td>
                            <td>{{$package->client_interests -$package->investor_interest}}</td>
                            <td>{{$package->name}}</td>
                            @if(in_array('Can edit Package', auth()->user()->getUserPermisions()))
                            <td>
                                <a href="/admin/edit-package/{{$package->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                @endif
                                @if(in_array('Can delete Package', auth()->user()->getUserPermisions()))
                                <a href="/admin/delete-package/{{$package->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                {{$packages->links()}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>

