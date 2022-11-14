<!doctype html>
<html lang="en">
  <head>
     <title>FinTab</title>
     
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
     <script type="text/javascript" src="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  


     <link rel="stylesheet"   href="{{asset('css/app.css')}}" />
    
     
   

    <script src="{{asset('js/app.js')}}"></script>
    
  </head>

<body id="body-pd">
    <div class="headerdiv">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="headerName">Kelvin Maxwell</div>
        <div class="header_img"> <img src="data:image/jpeg;base64,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" alt=""> </div>
    </header>
</div>
    
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">FINTAB</span> </a>
                <div class="nav_list"> 

                <div class="sidebody">
                <li class="nav-item has-submenu">
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
</li>

<li class="nav-item has-submenu">
                 <a href="#" class="nav_link"> <div class="sidebaritem"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Account</span> <i class='fa fa-caret-right '></i></div> </a>
                 <ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
             </li>
             <li class="nav-item has-submenu"> 
                <a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Customers</span> <i class='fa fa-caret-right'></i></div></a> 
                <ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"> <a href="#" class="nav_link"><div class="sidebaritem"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">H R</span><i class='fa fa-caret-right'></i></div> </a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"> <a href="#" class="nav_link">  <div class="sidebaritem"><i class='bx bx-folder nav_icon'></i> <span class="nav_name">Loans</span><i class='fa fa-caret-right'></i></div> </a>
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Loans AWS</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>

<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Products</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Purchases</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reports</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Returns</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Sales</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Settings</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Savings</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu"><a href="#" class="nav_link"> <div class="sidebaritem"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Tax</span> <i class='fa fa-caret-right'></i></div></a> 
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
<li class="nav-item has-submenu">  <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
</li>
</div>
        </nav>
   
    <!--Container Main start-->
    <div class="height-100 bg-light" id="contentsection">
        <h4>Main Components</h4>
    </div>
    <!--Container Main end-->