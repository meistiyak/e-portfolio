<! DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>
        </title>

       	{!! Html::style("login/css/Navbar-style.css") !!}
       	
       	{!! Html::style("login/css/bootstrap.css") !!}
       	{!! Html::style("login/css/bootstrap.min.css") !!}
        {!! Html::style("login/assets/ico/favicon.png") !!}
        {!! Html::style("login/assets/font-awesome/css/font-awesome.min.css") !!}

    </head>

    <body>
        <div class="header top-line">

            <div class="nevigation">
                <a class="logo no-underline float-left" href="#">Portfolio HUB</a>

                <div id = "searchbar">
                    <div id="search-icon-container" class="float-left">
                        <div id="search-icon" class="spritis search-icon"></div>
                    </div>
                    <input id ="searchbar-input" class="float-left" type="text" placeholder="Search Here"></input>
                </div>

                <ul class="nav-bar no-padding float-right tablet-hide">
                    <a class="massage-icon" href="#">
                        <li class="msg">
                            <span>Massage</span>
                        </li>
                    </a>

                    <a class="notify-icon" href="#">
                        <li class="noty">
                            <span>Notification</span>
                        </li>
                    </a>

                    <a href="#" class="notify-icon" >
                    	<li>
                    		<span>	{{ Auth::user()->name }} </span>
                    	</li>
                    </a>
                    
                    <a class="notify-icon" href="{{ url('/auth/logout') }}">
                        <li class="noty">
                            <span>Logout</span>
                        </li>
                    </a>

<!--                    
                	<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
					</li> -->
                    
                </ul>
                <div class="clear"></div>
            </div> <!--end nevigation-->

        </div> <!--End header top-line-->


        <div class="main-page">
            <div class="page-header medium-marg">
                <div class="left">
                    <div class="profile-pic medium-marg-bottom">
                        <a class="track-pic" href="#">
                            <img height="160" width="160" src="{{ asset('login/images/Chess-King-Mirror-Wallpaper.jpg')  }}">

                        </a>
                    </div>
                </div> <!-- end left div -->

                <div class="right">
                    <div class="profile-info">
                        <!--<h1>Abdur Razzak </h1>-->
                        <ul>
                            <li><h1>Abdur Razzak </h1></li>
                            <li><h3>Student at Daffodil International University </h3></li>
                            <li><h3>Lives in Middle Badda </h3></li>
                            <li><h3>Love Programming & want to be a Software Engineer </h3></li>

                        </ul>

                    </div> <!--end profile-info-->
                </div> <!--End right div-->

            </div> <!--End page-header-->


            <div class="page-body">
                <div class="body-left">
                    <div class="link-section link-marge">
                        <div>
                            <span class="track-followers">
                                <a href="#" class="link dark regular float-left">Followers</a>
                            </span>

                            <span class="track-followers-num">
                                <a href="#" class="follow-cnt float-right">0</a>
                            </span>
                            <div class="clear"></div>
                        </div>

                        <hr class="hr-deshed">


                        <div>
                            <span class="track-followers">
                                <a href="#" class="link dark regular float-left">Following</a>
                            </span>

                            <span class="track-followers-num">
                                <a href="#" class="follow-cnt float-right">0</a>
                            </span>
                            <div class="clear"></div>
                        </div>

                        <hr class="hr-deshed">


                    </div> <!--end link section-->
                </div> <!--end body-left-->
            </div> <!--end page-body-->


        </div> <!--End main-page-->


        {!! Html::script("login/js/bootstrap.min.js") !!} 

    </body>
</html>




