<div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group col-sm-6">
                        <label class="form-label">Entries</label>
                        <select class="custom-select">
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
                        <input type="text" class="form-control">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-cente">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Options</th>  
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($get_users_for_permission as $i=>$user)
                        <tr>
                            @php
                                if( $get_users_for_permission->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($get_users_for_permission->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="/admin/assign-or-remove-permissions/{{$user->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Assign or remove prmissions </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-3">
                {{$get_users_for_permission->links()}}
            </div>
        </div>
    </div>
</div>
