@extends('layouts.css')
@section('content')
<br/>
<div class="row">
    <div class="col-lg-12">
      <h3>Sacco Product Trends</h3>
      <hr>
    </div>  
</div>
<div class="row">
    <div class="col-lg-12">
        @if (Session::get('notice'))
            <div class="alert alert-info">
                {{Session::get('notice')}}
            </div>
        @endif
    <div class="panel " style="height: auto;" >
         <div class="panel-heading" style="height: auto;">
          <form action="{{{URL::to('trends')}}}" method="post">
                <div class="form-group col-lg-4">
                    <label for="username">Product<span style="color:red">*</span></label>
                    <select name="trend_product" class="form-control">
                        <option></option>
                        <option value="saving">Saving Product</option>
                        <option value="loan">Loan Product</option>
                        <option value="investment">Investment Product</option>
                    </select>                
                </div>
                <div class="form-group col-lg-4">
                    <label for="username">Graph Type<span style="color:red">*</span></label>
                    <select name="trend_graph" class="form-control">
                        <option></option>
                        <option value="bar">Bar Graph</option>
                        <option value="line">Line Graph</option>
                        <option value="pie-chart">Pie Chart</option>
                    </select>                
                </div>
                <div class="form-group col-lg-4" style="margin-top: 3%;">
                    <input type="submit" name="trend_cmd" class="form-control btn btn-primary"  value="View Product Trend">             
                </div>
          </form>
        </div>
        <div class="panel-body">      
        </div>
    </div>
</div>
<!--
<div class="row">
    <div class="col-md-12">
        <h1>Loans Trends</h1>
        <ul class="nav nav-pills ranges">
            <li class="active"><a href="#" data-range='7'>7 Days</a></li>
            <li><a href="#" data-range='30'>30 Days</a></li>
            <li><a href="#" data-range='60'>60 Days</a></li>
            <li><a href="#" data-range='90'>90 Days</a></li>
            <li><a href="#" data-range='120'>120 Days</a></li>
            <li><a href="#" data-range='150'>150 Days</a></li>
            <li><a href="#" data-range='180'>180 Days</a></li>            
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div id="stats-container" style="height: 250px;"></div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<script src="//cdn.jsdelivr.net/spinjs/1.3.0/spin.min.js"></script>

<script>
    $(function () {
        // Define the area for the spinner
        var spinTarget = document.getElementById('stats-container');
        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            // Activate the spinner
            var spinner = new Spinner().spin(spinTarget);
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./api", // This is the URL to the API
                data: { days: days }
            })
                .done(function (data) {
                    // When the response to the AJAX request comes back render the chart with new data
                    chart.setData(data);
                })
                .fail(function () {
                    // If there is no communication between the server, show an error
                    alert("error occured");
                })
                .always(function () {
                    // No matter if request is successful or not, stop the spinner
                    spinner.stop();
                });
        }

        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'stats-container',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['LoanAccounts'] // Set the label when bar is rolled over
        });

        // Request initial data for the past 7 days:
        requestData(7, chart);
        $('ul.ranges a').click(function (e) {
            e.preventDefault();
            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-range');
            // Request the data and render the chart using our handy function
            requestData(days, chart);
            // Make things pretty to show which button/tab the user clicked
            el.parent().addClass('active');
            el.parent().siblings().removeClass('active');
        })
    });
</script>
-->
@stop