<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.css')

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumbs')
                        <div class="row">
                              <!-- customar project  start -->
                              <div class="col-xl-2">
                            </div>
                             <div class="col-xl-8">
                                 @include('layouts.message')
                                 <div class="card">
                                 <div class="card-body">
                                 @foreach($get_staff as $staf)
                                 <div class="row align-items-center m-l-0">
                                    <div class="col-sm-6">
                                        
                                         <span class="text-info font-weight-bold"> {{$staf->name}}</span>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        
                                    
                                    </div>
                                </div>
                                @endforeach
                                <form action="/admin/assign-permissions/{{request()->route()->staff_id}}" method="get">
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-stripe mb-0">
                                        <thead>
                                            <tr class="text-cente">
                                                <th>No.</th>
                                                <th><input type='checkbox' id='select_all_permissions' onclick="selectAll()"> Select All Permissions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            @if ($get_permissions->currentPage() > 1)
                                            @php($i =  1 + (($get_permissions->currentPage() - 1) * $get_permissions->perPage()))
                                            @else
                                            @php($i = 1)
                                            @endif
                                            @foreach($get_permissions as $index=>$permission)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td hidden>{{$permission->id}}</td>
                                                <td> <label class="">
                                                        <input type="checkbox" class='check_permission' name="user_permisions[]" value="{{$permission->id}}"> {{$permission->permission}}
                                                    </label>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mt-3">
                                  @if(isset($search_query))
                                    {{ $get_permissions->appends(['name' => $search_query])->links() }}
                                    @else
                                    {{ $get_permissions->links() }}
                                    @endif
                                </div>
                               </div>
                               <div class="form-group text-center">
                                   <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                                </div>
                              </div>
                              <div class="col-xl-2">
                            </div>
                              </div>
                            <!-- customar project  end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    @include('layouts.footer')
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Modal -->
    
    <!-- Core scripts -->
   @include('layouts.javascript')
   <script>
        function selectAll() {
            var blnChecked = document.getElementById("select_all_permissions").checked;
            var check_permissions = document.getElementsByClassName("check_permission");
            var intLength = check_permissions.length;
            for(var i = 0; i < intLength; i++) {
                var check_permission = check_permissions[i];
                check_permission.checked = blnChecked;
            }
        }
    </script>
</body>
</html>
