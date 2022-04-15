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
                            <th>Name</th>
                            <th>contact</th>
                            <th>Package</th>
                            <th>Deposit</th>
                            <th>Interest</th>
                            <th>Period</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $i=>as $package)
                        <tr>
                            @php
                                if( $packages->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($packages->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td>{{$package->package_name}}</td>
                            <td>Opio Mark</td>
                            <td>0778965783</td>
                            <td>Gold</td>
                            <td>60000000</td>
                            <td>30%</td>
                            <td>2 Years</td>
                            <td>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
