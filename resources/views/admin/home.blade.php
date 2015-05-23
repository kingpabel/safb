@extends('admin.layout')
@section('content')
<div class="row">

    <div class="col-xs-6">
        <div class="sec-box">
            <a class="closethis">Close</a>
            <header>
                <h2 class="heading">Demo</h2>
            </header>
            <div class="contents boxpadding">
                <a class="togglethis">Toggle</a>
                <div class="charts-box">
                    <script type="text/javascript" src="assets/js/raphael-2.1.0.min.js"></script>
                    <script type="text/javascript" src="assets/js/morris-0.4.1.min.js"></script>
                    <div id="area"></div>
                    <div id="bars"></div>
                    <script>
                        // Use Morris.Bar
                        Morris.Bar({
                            element: 'bars',
                            data: [
                                {x: '2011 Q1', y: 3, z: 2, a: 3},
                                {x: '2011 Q2', y: 2, z: null, a: 1},
                                {x: '2011 Q3', y: 0, z: 2, a: 4},
                                {x: '2011 Q4', y: 2, z: 4, a: 3}
                            ],
                            xkey: 'x',
                            ykeys: ['y', 'z', 'a'],
                            labels: ['Y', 'Z', 'A']
                        }).on('click', function(i, row){
                            console.log(i, row);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- Donut Chart Start -->
    <div class="col-xs-6">
        <div class="sec-box">
            <a class="closethis">Close</a>
            <header>
                <h2 class="heading">Chart - 1</h2>
            </header>
            <div class="contents boxpadding">
                <a class="togglethis">Toggle</a>
                <div class="charts-box">
                    <div id="donutchart"></div>
                    <script>
                        Morris.Donut({
                            element: 'donutchart',
                            data: [
                                {value: 70, label: 'foo'},
                                {value: 15, label: 'bar'},
                                {value: 10, label: 'baz'},
                                {value: 5, label: 'A really really long label'}
                            ],
                            formatter: function (x) { return x + "%"}
                        }).on('click', function(i, row){
                            console.log(i, row);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section">
        <div class="container-liquid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="sec-box">
                        <a class="closethis">Close</a>
                        <header>
                            <h2 class="heading">SAARC Agri Food Bank Reports</h2>
                        </header>
                        <div class="contents">
                            <div class="content_header">
                                <div class="row">
                                    <div class="col-md-8"><h2 style="margin-top:0px" align="center"">Annual Production of Food Grains in the Member State</h2>
                                    </div>

                                    <div class="col-md-4"><h3 style="margin-top:0px; margin-right:10px; color:#E9535E" align="right"><i>(000 MT)</i></h3></div>
                                </div>
                            </div>
                            <a class="togglethis">Toggle</a>
                            <div class="table-box">
                                <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
                                <table class="display table" id="example">
                                    <thead>
                                    <tr>
                                        <th style="border-bottom:0px"><h3>Year</h3></th>
                                        <th colspan="7"><h3>Amount</h3></th>
                                    </tr>
                                    <tr>
                                        <th style="border-top:0px"></th>
                                        <th><h4>Rice</h4></th>
                                        <th><h4>Wheat</h4></th>
                                        <th><h4>Maize</h4></th>
                                        <th><h4>Jowar</h4></th>
                                        <th><h4>Bajra</h4></th>
                                        <th><h4>Other Cereals</h4></th>
                                        <th><h4>Total</h4></th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>2011-12</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>2012-13</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>2013-14</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    </tbody>
                                </table>
                                <script>
                                    var asInitVals = new Array();
                                    $(document).ready(function() {
                                        var oTable = $('#example').dataTable( {
                                            "oLanguage": {
                                                "sSearch": "Search all columns:"
                                            }
                                        } );

                                        $("tfoot input").keyup( function () {
                                            /* Filter on the column (the index) of this element */
                                            oTable.fnFilter( this.value, $("tfoot input").index(this) );
                                        } );



                                        /*
                                         * Support functions to provide a little bit of 'user friendlyness' to the textboxes in
                                         * the footer
                                         */
                                        $("tfoot input").each( function (i) {
                                            asInitVals[i] = this.value;
                                        } );

                                        $("tfoot input").focus( function () {
                                            if ( this.className == "search_init" )
                                            {
                                                this.className = "";
                                                this.value = "";
                                            }
                                        } );

                                        $("tfoot input").blur( function (i) {
                                            if ( this.value == "" )
                                            {
                                                this.className = "search_init";
                                                this.value = asInitVals[$("tfoot input").index(this)];
                                            }
                                        } );
                                    } );

                                </script>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Content Section End -->
</div>
@endsection