<!doctype html>
<html lang="en">

<head>
    <title>SystemBar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet"/>
</head>

<body class="dark-edition">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                SYSTEM BAR
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="material-icons">dashboard</i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>Empleados</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/tabla">
                        <i class="material-icons">content_paste</i>
                        <p>Productos</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="material-icons">library_books</i>
                        <p>Ventas</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <p>Caja</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/proveedores">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i>
                        <p>Proveedores</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/entrada">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <p>Entradas</p>
                    </a>
                </li>
                <!-- <li class="nav-item active-pro ">
                      <a class="nav-link" href="./upgrade.html">
                          <i class="material-icons">unarchive</i>
                          <p>Upgrade to PRO</p>
                      </a>
                  </li> -->
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary text-center">
                                <h2 class="card-title ">SYSTEM BAR</h2>
                                <p class="card-category"> Sistema de gestión para bares</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header card-header-success">
                                <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="129" x2="129" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="218" x2="218" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="307" x2="307" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="396" x2="396" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="485" x2="485" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="574" x2="574" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="663" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 91.2 C 129 79.2 129 79.2 129 79.2 C 218 103.2 218 103.2 218 103.2 C 307 79.2 307 79.2 307 79.2 C 396 64.8 396 64.8 396 64.8 C 485 76.8 485 76.8 485 76.8 C 574 28.8 574 28.8 574 28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="129" y1="79.2" x2="129.01" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="218" y1="103.2" x2="218.01" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="307" y1="79.2" x2="307.01" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="396" y1="64.8" x2="396.01" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="485" y1="76.8" x2="485.01" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="574" y1="28.799999999999997" x2="574.01" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="89" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 89px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="129" y="125" width="89" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 89px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="218" y="125" width="89" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 89px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="307" y="125" width="89" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 89px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="396" y="125" width="89" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 89px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="485" y="125" width="89" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 89px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="574" y="125" width="89" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 89px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Daily Sales</h4>
                                <p class="card-category">
                                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header card-header-warning">
                                <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="658" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="658" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="658" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="658" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="658" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="658" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="65.75" x2="65.75" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="117.25" x2="117.25" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="168.75" x2="168.75" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="220.25" x2="220.25" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="271.75" x2="271.75" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="323.25" x2="323.25" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="374.75" x2="374.75" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="426.25" x2="426.25" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="477.75" x2="477.75" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="529.25" x2="529.25" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="580.75" x2="580.75" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="632.25" x2="632.25" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="91.5" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="143" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="194.5" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="246" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="297.5" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="349" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="400.5" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="452" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="503.5" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="555" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="606.5" y="125" width="51.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 52px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Email Subscriptions</h4>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header card-header-danger">
                                <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="117.875" x2="117.875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="195.75" x2="195.75" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="273.625" x2="273.625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="351.5" x2="351.5" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="429.375" x2="429.375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="507.25" x2="507.25" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="585.125" x2="585.125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="663" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="663" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.4 C 117.875 30 117.875 30 117.875 30 C 195.75 66 195.75 66 195.75 66 C 273.625 84 273.625 84 273.625 84 C 351.5 86.4 351.5 86.4 351.5 86.4 C 429.375 91.2 429.375 91.2 429.375 91.2 C 507.25 96 507.25 96 507.25 96 C 585.125 97.2 585.125 97.2 585.125 97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="117.875" y1="30" x2="117.885" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="195.75" y1="66" x2="195.76" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="273.625" y1="84" x2="273.635" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="351.5" y1="86.4" x2="351.51" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="429.375" y1="91.2" x2="429.385" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="507.25" y1="96" x2="507.26" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="585.125" y1="97.2" x2="585.135" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="117.875" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="195.75" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="273.625" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="351.5" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="429.375" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="507.25" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="585.125" y="125" width="77.875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 78px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Completed Tasks</h4>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<!-- Navbar -->--}}
{{--      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">--}}
{{--        <div class="container-fluid">--}}
{{--          <div class="navbar-wrapper">--}}
{{--            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>--}}
{{--          </div>--}}
{{--          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="sr-only">Toggle navigation</span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--          </button>--}}
{{--          <div class="collapse navbar-collapse justify-content-end">--}}
{{--            <ul class="navbar-nav">--}}
{{--              <li class="nav-item">--}}
{{--                <a class="nav-link" href="javascript:void(0)">--}}
{{--                  <i class="material-icons">notifications</i>--}}
{{--                  <p class="d-lg-none d-md-block">--}}
{{--                    Notifications--}}
{{--                  </p>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <!-- your navbar here -->--}}
{{--            </ul>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </nav>--}}
{{--<!-- End Navbar -->--}}
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
        </div>
    </div>

</div>
</div>
  {{--<div class="fixed-plugin">--}}
      {{--<div class="dropdown show-dropdown show">--}}
          {{--<a href="#" data-toggle="dropdown" aria-expanded="true">--}}
              {{--<i class="fa fa-cog fa-2x"> </i>--}}
          {{--</a>--}}
          {{--<ul class="dropdown-menu show" x-placement="top-start" style="position: absolute; top: -110px; left: -231px; will-change: top, left;">--}}
              {{--<li class="header-title"> Sidebar Filters</li>--}}
              {{--<li class="adjustments-line">--}}
                  {{--<a href="javascript:void(0)" class="switch-trigger active-color">--}}
                      {{--<div class="badge-colors ml-auto mr-auto">--}}
                          {{--<span class="badge filter badge-purple active" data-color="purple"></span>--}}
                          {{--<span class="badge filter badge-azure" data-color="azure"></span>--}}
                          {{--<span class="badge filter badge-green" data-color="green"></span>--}}
                          {{--<span class="badge filter badge-warning" data-color="orange"></span>--}}
                          {{--<span class="badge filter badge-danger" data-color="danger"></span>--}}
                      {{--</div>--}}
                      {{--<div class="clearfix"></div>--}}
                  {{--</a>--}}
              {{--</li>--}}
              {{--<li class="header-title">Images</li>--}}
              {{--<li>--}}
                  {{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
                      {{--<img src="../assets/img/sidebar-1.jpg" alt="">--}}
                  {{--</a>--}}
              {{--</li>--}}
              {{--<li class="active">--}}
                  {{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
                      {{--<img src="../assets/img/sidebar-2.jpg" alt="">--}}
                  {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                  {{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
                      {{--<img src="../assets/img/sidebar-3.jpg" alt="">--}}
                  {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                  {{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
                      {{--<img src="../assets/img/sidebar-4.jpg" alt="">--}}
                  {{--</a>--}}
              {{--</li>--}}
              {{--<li class="button-container">--}}
                  {{--<a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>--}}
              {{--</li>--}}
              {{--<!-- <li class="header-title">Want more components?</li>--}}
                  {{--<li class="button-container">--}}
                      {{--<a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">--}}
                        {{--Get the pro version--}}
                      {{--</a>--}}
                  {{--</li> -->--}}
              {{--<li class="button-container">--}}
                  {{--<a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">--}}
                      {{--View Documentation--}}
                  {{--</a>--}}
              {{--</li>--}}
              {{--<li class="button-container github-star">--}}
                  {{--<span></span>--}}
              {{--</li>--}}
              {{--<li class="header-title">Thank you for 95 shares!</li>--}}
              {{--<li class="button-container text-center">--}}
                  {{--<button id="twitter" class="btn btn-round btn-twitter sharrre"><i class="fa fa-twitter"></i> · 45</button>--}}
                  {{--<button id="facebook" class="btn btn-round btn-facebook sharrre"><i class="fa fa-facebook-f"></i> · 50</button>--}}
                  {{--<br>--}}
                  {{--<br>--}}
              {{--</li>--}}
          {{--</ul>--}}
      {{--</div>--}}
  {{--</div>--}}
{{--<!--   Core JS Files   -->--}}
<script src="./assets/js/core/jquery.min.js"></script>
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="./assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="./assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="./assets/demo/demo.js"></script>
<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function () {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function () {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function () {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
</body>

</html>
