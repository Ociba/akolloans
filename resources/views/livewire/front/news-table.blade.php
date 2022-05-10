<div>
@livewireStyles
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-right">
                    <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add News</button>
                    
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
                            <th>Title</th>
                            <th>News Content</th>
                            <th>Photo</th>
                            <th>Created By</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $i=>$new)
                        <tr>
                            @php
                                if( $news->currentPage() == 1){
                                $i = $i+1;
                                }else{
                                $i = ($i+1) + 10*($news->currentPage()-1);
                                }
                            @endphp
                            <td>{{$i}}</td>
                            <td hidden>{{$new->id}}</td>
                            <td>{{$new->title}}</td>
                            <td>{{$new->content}}</td>
                            <td><img style="width:60px; height:40px;" src="{{ asset('news_images/'.$new->image)}}"></td>
                            <td>{{$new->name}}</td>
                            <td>
                                <a href="/admin/edit-new/{{$new->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                               
                                <a href="/admin/delete-new/{{$new->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mt-2">
                {{$news->links()}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>

