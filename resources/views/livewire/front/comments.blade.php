<div>
@livewireStyles
    <div class="card">
        <div class="card-body">
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
                            <th>Email</th>
                            <th>comment</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $i=>$comment)
                        <tr>
                            @php
                                if( $comments->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($comments->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$comment->id}}</td>
                            <td>{{$comment->names}}</td>
                            <td>{{$comment->comment}}</td>
                            <td>{{$comment->reply}}</td>
                            <td>{{$comment->name}}</td>
                            <td>
                                <a href="/front/replay-comment/{{$comment->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Reply </a>
                               
                                <a href="/front/delete-comment/{{$comment->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                {{$comments->links()}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>

