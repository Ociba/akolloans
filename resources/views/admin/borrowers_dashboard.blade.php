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
            @include('layouts.borrowers_sidebar')
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
                              <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Loan Status</h6>
                                                @foreach($get_loan_status as $status)
                                                @if($status->loan_status == 'overdue')
                                                <h2 class="m-b-0 text-primary">{{$status->loan_status}}</h2>
                                                @elseif($status->loan_status == 'paid')
                                                <h2 class="m-b-0 text-success">{{$status->loan_status}}</h2>
                                                @else
                                                <h2 class="m-b-0 text-info">{{$status->loan_status}}</h2>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Loan Amount</h6>
                                                @foreach($get_loan_status as $status)
                                                <h2 class="m-b-0">{{ number_format($status->loan_amount)}} /=</h2>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            
                                                <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Interest Amount</h6>
                                                <h2 class="m-b-0">{{ number_format($get_client_interests)}} /=</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Overdue Date</h6>
                                                @foreach($no_of_overdue_days as $overdue)
                                                <h2 class="m-b-0">{{ date('d-m-Y',strtotime($overdue->overdue_date))}}</h2>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Number of Overdue Days</h6>
                                                @foreach($no_of_overdue_days as $overdue)
                                                <h2 class="m-b-0">{{ Carbon\Carbon::parse($overdue->overdue_date)->diffInDays()}} Days</h2>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Overdue Charge Now</h6>
                                                @foreach($no_of_overdue_days as $overdue)
                                                @php
                                                $surcharge =1000;
                                                $surcharge_with_overdue_days = Carbon\Carbon::parse($overdue->overdue_date)->diffInDays() *$surcharge;
                                                @endphp
                                                <h2 class="m-b-0">{{ number_format($surcharge_with_overdue_days)}} /=</h2>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">To Be Paid Without Charge</h6>
                                                <h2 class="m-b-0">{{ number_format($get_client_interests + $actual_loan_amount)}} /=</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">To Be Paid With Charge</h6>
                                                @foreach($no_of_overdue_days as $overdue)
                                                @php
                                                $surcharge =1000;
                                                $surcharge_with_overdue_days = Carbon\Carbon::parse($overdue->overdue_date)->diffInDays() *$surcharge;
                                                @endphp
                                                <h2 class="m-b-0">{{ number_format($get_client_interests + $actual_loan_amount + $surcharge_with_overdue_days)}} /=</h2>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- customar project  end -->
                        </div>
                       {{--<div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <canvas id="chart-bars" height="250" style="width:100%;" class="chartjs-demo"></canvas>
                                    </div>
                                </div>
                            </div>
                            
                        </div>--}}
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
   <script src="{{ asset('assets/libs/chartjs/chartjs.js')}}"></script>
   <script>
       $(function() {
  // Wrap charts
  $('.chartjs-demo').each(function() {
    $(this).wrap($('<div style="height:' + this.getAttribute('height') + 'px"></div>'));
  });
  var barsChart = new Chart(document.getElementById('chart-bars').getContext("2d"), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Interest Rate',
        data: [53, 99, 14, 10, 43, 27,53, 99, 14, 10, 43, 27],
        borderWidth: 1,
        backgroundColor: 'rgba(255, 73, 97, 0.3)',
        borderColor: '#FF4961'
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  var graphChart = new Chart(document.getElementById('chart-graph').getContext("2d"), {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label:           'My First dataset',
        data:            [43, 91, 89, 16, 21, 79, 28],
        borderWidth:     1,
        backgroundColor: 'rgba(113, 106, 202, 0.3)',
        borderColor:     '#ff4a00',
        borderDash:      [5, 5],
        fill: false
      }, {
        label:           'My Second dataset',
        data:            [24, 63, 29, 75, 28, 54, 38],
        borderWidth:     1,
        backgroundColor: 'rgba(40, 208, 148, 0.3)',
        borderColor:     '#62d493',
      }],
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

 
  var pieChart = new Chart(document.getElementById('chart-pie').getContext("2d"), {
    type: 'pie',
    data: {
      labels: [ 'Red', 'Blue', 'Yellow' ],
      datasets: [{
        data: [ 180, 272, 100 ],
        backgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ],
        hoverBackgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ]
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });
  var pieChart = new Chart(document.getElementById('chart-pie2').getContext("2d"), {
    type: 'pie',
    data: {
      labels: [ 'Red', 'Blue', 'Yellow' ],
      datasets: [{
        data: [ 180, 272, 100 ],
        backgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ],
        hoverBackgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ]
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });
  var doughnutChart = new Chart(document.getElementById('chart-doughnut').getContext("2d"), {
    type: 'doughnut',
    data: {
      labels: [ 'Red', 'Blue', 'Yellow' ],
      datasets: [{
        data: [ 137, 296, 213 ],
        backgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ],
        hoverBackgroundColor: [ '#FF4961', '#ff4a00', '#f4ab55' ]
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });
  var radarChart = new Chart(document.getElementById('chart-radar').getContext("2d"), {
    type: 'radar',
    data: {
      labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgba(40, 208, 148, 0.3)',
        borderColor: '#62d493',
        pointBackgroundColor: '#62d493',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: '#62d493',
        data: [39, 99, 77, 38, 52, 24, 89],
        borderWidth: 1
      }, {
        label: 'My Second dataset',
        backgroundColor: 'rgba(255, 73, 97, 0.3)',
        borderColor: '#FF4961',
        pointBackgroundColor: '#FF4961',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: '#FF4961',
        data: [6, 33, 14, 70, 58, 90, 26],
        borderWidth: 1
      }]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  var polarAreaChart = new Chart(document.getElementById('chart-polar-area').getContext("2d"), {
    type: 'polarArea',
    data: {
      datasets: [{
        data: [ 12, 10, 14, 6, 15 ],
        backgroundColor: [ '#FF4961', '#62d493', '#f4ab55', '#E7E9ED', '#55a3f4' ],
        label: 'My dataset'
      }],
      labels: [ 'Red', 'Green', 'Yellow', 'Grey', 'Blue' ]
    },

    // Demo
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  // Resizing charts

  function resizeCharts() {
    graphChart.resize();
    barsChart.resize();
    radarChart.resize();
    polarAreaChart.resize();
    pieChart.resize();
    doughnutChart.resize();
  }

  // Initial resize
  resizeCharts();

  // For performance reasons resize charts on delayed resize event
  window.layoutHelpers.on('resize.charts-demo', resizeCharts);
});

   </script>

</body>
</html>
