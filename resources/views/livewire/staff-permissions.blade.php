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
                            <th>Permissions</th>
                            <th>Action</th>  
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($get_users_and_permission as $i=>$permission)
                        <tr>
                            @php
                                if( $get_users_and_permission->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($get_users_and_permission->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$permission->id}}</td>
                            <td>{{$permission->permission}}</td>
                            <td>
                                <a href="/admin/unassign-permissions/{{$permission->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Assign or remove prmissions </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-3">
                {{$get_users_and_permission->links()}}
            </div>
        </div>
    </div>
</div>
