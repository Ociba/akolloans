<div>
    @livewireStyles
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-right">
                    @if(in_array('Can add Category', auth()->user()->getUserPermisions()))
                    <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add category</button>
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
                <table id="report-table" class="table table-bordered table-striped mb-0 text-center">
                    <thead>
                        <tr class="">
                            <th>No.</th>
                            <th>Category</th>
                            @if(in_array('Can view Category Option', auth()->user()->getUserPermisions()))
                            <th>Option</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($get_categories as $i=>$cate)
                        <tr>
                            @php
                                if( $get_categories->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($get_categories->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$cate->id}}</td>
                            <td>{{$cate->category}}</td>
                            @if(in_array('Can edit Category', auth()->user()->getUserPermisions()))
                            <td>
                                <a href="/accountsettings/edit-category/{{$cate->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                @endif
                                @if(in_array('Can delete Category', auth()->user()->getUserPermisions()))
                                <a href="/accountsettings/delete-category/{{$cate->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                {{$get_categories->links()}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>
