@extends('layouts.app')

@section('content')

<div class="wthree_agile_admin_info">
          <!-- /w3_agileits_top_nav-->
          <!-- /nav-->
          <div class="w3_agileits_top_nav">
            <ul id="gn-menu" class="gn-menu-main">
                     <!-- /nav_agile_w3l -->
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller scrollbar1">
                            <ul class="gn-menu agile_menu_drop">

                                <li><a href=""> <i class="fa fa-tachometer"></i> Dashboard</a></li>
                                <li>
                                    
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out">Logout</i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </a>

                                 </li>
                                
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Admin Panel </a></h1></li>
                    <li class="second admin-pic">
                       <ul class="top_dp_agile">
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">   
                                                <span class="prfil-img"><img src="images/admin.jpg" alt=""> </span> 
                                            </div>  
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                            <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
                                            <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out">Logout</i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </a> </li>
                                        </ul>
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Your Notifications</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="user_img"><img src="images/a3.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                 <h6>John Smith</h6>
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                             </a></li>
                                             <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/a1.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                 <h6>Jasmin Leo</h6>
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>3 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li><a href="#">
                                                <div class="user_img"><img src="images/a2.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                 <h6>James Smith</h6>
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>2 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                              <li><a href="#">
                                                <div class="user_img"><img src="images/a4.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                 <h6>James Smith</h6>
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all Notifications</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Your Messages</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="user_img"><img src="images/a3.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                 <h6>John Smith</h6>
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>3 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                             </a></li>
                                             <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/a1.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                 <h6>Jasmin Leo</h6>
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>2 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li><a href="#">
                                                <div class="user_img"><img src="images/a2.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                 <h6>James Smith</h6>
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all Messages</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                       <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 4 Pending tasks</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                    <div class="clearfix"></div>    
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar yellow" style="width:40%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                   <div class="clearfix"></div> 
                                                </div>
                                                <div class="progress progress-striped active">
                                                     <div class="bar green" style="width:90%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                    <div class="clearfix"></div>    
                                                </div>
                                               <div class="progress progress-striped active">
                                                     <div class="bar red" style="width: 33%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                   <div class="clearfix"></div> 
                                                </div>
                                                <div class="progress progress-striped active">
                                                     <div class="bar  blue" style="width: 80%;"></div>
                                                </div>
                                            </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all pending tasks</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>   
                                </ul>
                </li>

                <li class="second w3l_search">
                 
                        <form action="#" method="post">
                            <input type="search" name="search" placeholder="Search here..." required="">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    
                </li>
                <li class="second full-screen">
                    <section class="full-top">
                        <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>    
                    </section>
                </li>

            </ul>
            <!-- //nav -->
            
        </div>
        <div class="clearfix"></div>
        <!-- //w3_agileits_top_nav-->
        <!-- /inner_content-->
                <div class="inner_content">
                    <!-- /inner_content_w3_agile_info-->
                    <div class="inner_content_w3_agile_info">
                    <!-- /agile_top_w3_grids-->
                       <div class="agile_top_w3_grids">
                              <ul class="ca-menu">
                                    <li>
                                        <a href="#">
                                            
                                            <i class="fa fa-building-o" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main">16,808</h4>
                                                <h3 class="ca-sub">New Companies</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          <i class="fa fa-user" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main one">26,808</h4>
                                                <h3 class="ca-sub one">New Clients</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-database" aria-hidden="true"></i>
                                            <div class="ca-content">
                                            <h4 class="ca-main two">29,008</h4>
                                                <h3 class="ca-sub two">New Projects</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-tasks" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main three">49,436</h4>
                                                <h3 class="ca-sub three">Old Projects</h3>
                                            </div>
                                        </a>
                                    </li>
                                        <li>
                                        <a href="#">
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main four">30,808</h4>
                                                <h3 class="ca-sub four">New Orders</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                       </div>
                                   
                        
                         
                          
                        </div>
                        <!-- /w3ls_agile_circle_progress-->
                         <!--/prograc-blocks_agileits-->
                            <div class="prograc-blocks_agileits">
                                
                                
                                 <div class="col-md-6 bars_agileits agile_info_shadow">
                                   <h3 class="w3_inner_tittle two">Daily Sales</h3>
                                        <div class='bar_group'>
                                                <div class='bar_group__bar thin' label='Rating' show_values='true' tooltip='true' value='343'></div>
                                                <div class='bar_group__bar thin' label='Quality' show_values='true' tooltip='true' value='235'></div>
                                                <div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true' value='550'></div>
                                                <div class='bar_group__bar thin' label='Farming' show_values='true' tooltip='true' value='456'></div>
                                        </div>
                                </div>
                                <div class="col-md-6 fallowers_agile agile_info_shadow">
                                    <h3 class="w3_inner_tittle two">Recent Followers</h3>
                                                <div class="work-progres">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                          <thead>
                                                            <tr>
                                                              <th>#</th>
                                                              <th>Project</th>
                                                              <th>Manager</th>                                   
                                                                                                
                                                              <th>Status</th>
                                                              <th>Progress</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>1</td>
                                                          <td>Face book</td>
                                                          <td>Malorum</td>                                 
                                                                                     
                                                          <td><span class="label label-danger">in progress</span></td>
                                                          <td><span class="badge badge-info">50%</span></td>
                                                      </tr>
                                                      <tr>
                                                          <td>2</td>
                                                          <td>Twitter</td>
                                                          <td>Evan</td>                               
                                                                                          
                                                          <td><span class="label label-success">completed</span></td>
                                                          <td><span class="badge badge-success">100%</span></td>
                                                      </tr>
                                                      <tr>
                                                          <td>3</td>
                                                          <td>Google</td>
                                                          <td>John</td>                                
                                                          
                                                          <td><span class="label label-warning">in progress</span></td>
                                                          <td><span class="badge badge-warning">75%</span></td>
                                                      </tr>
                                                      <tr>
                                                          <td>4</td>
                                                          <td>LinkedIn</td>
                                                          <td>Danial</td>                                 
                                                                                     
                                                          <td><span class="label label-info">in progress</span></td>
                                                          <td><span class="badge badge-info">65%</span></td>
                                                      </tr>
                                                      <tr>
                                                          <td>5</td>
                                                          <td>Tumblr</td>
                                                          <td>David</td>                                
                                                                                         
                                                          <td><span class="label label-warning">in progress</span></td>
                                                          <td><span class="badge badge-danger">95%</span></td>
                                                      </tr>
                                                      <tr>
                                                          <td>6</td>
                                                          <td>Tesla</td>
                                                          <td>Mickey</td>                                  
                                                                                     
                                                          <td><span class="label label-info">in progress</span></td>
                                                          <td><span class="badge badge-success">95%</span></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                            </div>
                                        </div>                                          
                                </div>
                                     <div class="clearfix"></div>
                            </div>

                              <!--//prograc-blocks_agileits-->
                        <!-- /bottom_agileits_grids-->
                        <div class="bottom_agileits_grids">
                        <div class="col-md-12 profile-main">
                            <div class="profile_bg_agile">
                                <div class="profile-pic wthree">
                                    <h2>Arman H Sagar</h2>
                                    <img src="images/profile.jpg" alt="Image">
                                    <p>Web Designer</p>
                                </div>
                                <div class="profile-ser">
                                        <div class="follow-grids-agileits-w3layouts">
                                            <div class="profile-ser-grids">
                                                <h3>Followers</h3>
                                                <h4>2486</h4>
                                            </div>
                                            <div class="profile-ser-grids agileinfo">
                                                <h3>Following</h3>
                                                <h4>1582</h4>
                                            </div>
                                            <div class="profile-ser-grids no-border">
                                                <h3>Tweets</h3>
                                                <h4>1468</h4>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="w3l_social_icons w3l_social_icons1">
                                            <ul>
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>

                                </div>
                                </div>
                            </div>    
                        
                             <div class="clearfix"></div>
                        </div>
                        <!-- //bottom_agileits_grids-->
                                                <!-- /weather_w3_agile_info-->
                        <div class="weather_w3_agile_info agile_info_shadow">
                          <div class="weather_w3_inner_info">
                              
                                 <div class="over_lay_agile">
                                  <h3 class="w3_inner_tittle">Weather Report</h3>
                                  <ul>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="partly-cloudy-day" width="60" height="60"></canvas>
                                        </figure>
                                        <h3>25 °C</h3>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="clear-day" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>WED</h4>
                                            <h5>27 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="snow" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>THU</h4>
                                            <h5>13 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="partly-cloudy-night" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>FRI</h4>
                                            <h5>18 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="cloudy" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>SAT</h4>
                                            <h5>15 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="fog" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>SUN</h4>
                                            <h5>11 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                                </div>
                            </div>  
                        </div>
                        <!-- //weather_w3_agile_info-->
                        <!-- /social_media-->
                          <div class="social_media_w3ls">
                         
                              <div class="col-md-3 socail_grid_agile facebook">
                                     <ul class="icon_w3_info">
                                       <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li>Facebook</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="images/admin.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>Hurisa Joe</h4>
                                        <p>Lorem ipsum dolor sit amet</p>
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>
                              </div>
                              <div class="col-md-3 socail_grid_agile twitter">
                                         <ul class="icon_w3_info">
                                       <li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li>Twitter</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="images/a1.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>Jasmin Joe</h4>
                                        <p>Lorem ipsum dolor sit amet</p>
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>
                              </div>
                              <div class="col-md-3 socail_grid_agile gmail">
                                     <ul class="icon_w3_info">
                                       <li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       <li>Google+</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="images/a2.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>John Pal</h4>
                                        <p>Lorem ipsum dolor sit amet</p>
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>
                              </div>
                              <div class="col-md-3 socail_grid_agile dribble">
                              
                                 <ul class="icon_w3_info">
                                      <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                       <li>Dribbble</li>
                                     </ul>
                                      <ul class="icon_w3_social">
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
                                     <div class="clearfix"></div>
                                      <div class="bottom_info_social">
                                     <div class="col-md-4 agile_w3l_social_media_text_img">
                                        <img src="images/a4.jpg" alt="">
                                     </div>
                                      <div class="col-md-8 agile_w3l_social_media_text">
                                        <h4>Honey Pal</h4>
                                        <p>Lorem ipsum dolor sit amet</p>
                                     </div>
                                    
                                     <div class="clearfix"></div>
                                     </div>

                              </div>
                              <div class="clearfix"></div>
                                                    
                        </div>
                        <!-- //social_media-->
                    </div>
                    <!-- //inner_content_w3_agile_info-->
                </div>
        <!-- //inner_content-->
    </div>


@endsection
