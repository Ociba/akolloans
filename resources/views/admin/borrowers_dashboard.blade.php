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
                                                <i class="fas fa-user-md f-36 text-info"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Doctor</h6>
                                                <h2 class="m-b-0">35</h2>
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
                                                <i class="fas fa-user-injured f-36 text-danger"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Patient</h6>
                                                <h2 class="m-b-0">368</h2>
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
                                                <i class="fas fa-user-nurse f-36 text-success"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Nurse</h6>
                                                <h2 class="m-b-0">79</h2>
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
                                                <i class="fas fa-prescription-bottle-alt f-36 text-primary"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Pharmacist</h6>
                                                <h2 class="m-b-0">10</h2>
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
                                                <i class="fas fa-flask f-36 text-warning"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Laboratories</h6>
                                                <h2 class="m-b-0">35</h2>
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
                                                <i class="fas fa-user-tie f-36 text-primary"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Accountant</h6>
                                                <h2 class="m-b-0">368</h2>
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
                                                <i class="fas fa-file-invoice-dollar f-36 text-danger"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Payment</h6>
                                                <h2 class="m-b-0">79</h2>
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
                                                <i class="fas fa-pills f-36 text-info"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Medicine</h6>
                                                <h2 class="m-b-0">10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- customar project  end -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <canvas id="chart-bars" height="250" style="width:100%;" class="chartjs-demo"></canvas>
                                    </div>
                                </div>
                            </div>
                            
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
   <script src="{{ asset('assets/libs/chartjs/chartjs.js')}}"></script>
   <script src="{{ asset('assets/js/pages/charts_chartjs.js')}}"></script>
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
        label: 'Package Amount',
        data: [53, 99, 14, 10, 43, 27,53, 99, 14, 10, 43, 27],
        borderWidth: 1,
        backgroundColor: 'rgba(255, 73, 97, 0.3)',
        borderColor: '#FF4961'
      }, {
        label: 'Interest',
        data: [55, 74, 20, 90, 67, 97, 53, 99, 14, 10, 43, 27],
        borderWidth: 1,
        backgroundColor: 'rgba(255, 145, 73, 0.3)',
        borderColor: '#f4ab55'
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
