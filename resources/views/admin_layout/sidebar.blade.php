<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside indigo-900 dk" layout="column">
    <div class="navbar navbar-md no-radius">
      <!-- brand -->
      <a class="navbar-brand">
          <div ui-include="'../assets/images/logo.svg'"></div>
          <img src="../assets/images/logo.png" alt="." class="hide">
          <span class="hidden-folded inline">Cyber Garage</span>
      </a>
      <!-- / brand -->
    </div>
    <div flex class="hide-scroll">
      <nav class="scroll nav-active-primary">

          <ul class="nav" ui-nav>
            <li class="nav-header hidden-folded">
              <small class="text-muted"></small>
            </li>

            {{-- <li>
              <a href="#" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe3fc;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Dashboard</span>
              </a>
            </li> --}}

            <li>
              <a>
                <span class="nav-caret">
                  <i class="fa fa-caret-down"></i>
                </span>
                <span class="nav-label">
                  <!--<b class="label rounded label-sm primary"></b>-->
                </span>
                <span class="nav-icon">
                  <i class="material-icons">&#xe5c3;
                    <span ui-include="'../assets/images/i_1.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Blog</span>
              </a>
              <ul class="nav-sub">
                <li>
                    <a href="{{ route('dashboard') }}" >
                      <span class="nav-text">Add Blog</span>
                    </a>
                  </li>
                <li>
                  <a href="{{ route('admin.user') }}">
                    <span class="nav-text">Blog List</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label label-sm accent"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe429;
                      <span ui-include="'../assets/images/i_4.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Users</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{ route('show.subcription') }}" >
                      <span class="nav-text">Users List</span>
                    </a>
                  </li>
                  <li>
                  </li>
             
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Home</span>
                </a>
                <ul class="nav-sub">
                  <li>
                      <a href="{{ route('home.index') }}" >
                        <span class="nav-text">Section # 1</span>
                      </a>
                    </li>
                  <li>
                    <a href="{{ route('home.index.2') }}">
                      <span class="nav-text">Section # 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.index.3') }}">
                      <span class="nav-text">Section # 3</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.index.4') }}">
                      <span class="nav-text">Section # 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.index.5') }}">
                      <span class="nav-text">Section # 5</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.index.6') }}">
                      <span class="nav-text">Section # 6</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.index.7') }}">
                      <span class="nav-text">Section # 7</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.index.8') }}">
                      <span class="nav-text">Section # 8</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.home.list.2') }}">
                      <span class="nav-text">Add Section # 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.list.2') }}">
                      <span class="nav-text">List Section # 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.home.list.5') }}">
                      <span class="nav-text">Add Section # 5</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.list.5') }}">
                      <span class="nav-text">List Section # 5</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.home.list.8') }}">
                      <span class="nav-text">Add Section # 8</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('home.list.8') }}">
                      <span class="nav-text">List Section # 8</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label label-sm accent"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe429;
                      <span ui-include="'../assets/images/i_4.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Videos</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{ route('video.index') }}" >
                      <span class="nav-text">Section # 1</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('video.index.2') }}" >
                      <span class="nav-text">Add Videos</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('videolist') }}" >
                      <span class="nav-text">Video List</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">About Us</span>
                </a>
                <ul class="nav-sub">
                  <li>
                      <a href="{{ route('about.index.1') }}" >
                        <span class="nav-text">Section # 1</span>
                      </a>
                    </li>
                  <li>
                    <a href="{{ route('about.index.2') }}">
                      <span class="nav-text">Section # 2</span>
                    </a>
                  </li>      
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label label-sm accent"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe429;
                      <span ui-include="'../assets/images/i_4.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Management</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{ route('management.index.1') }}" >
                      <span class="nav-text">Section # 1</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('management.index.2') }}" >
                      <span class="nav-text">Section # 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('management.index.3') }}" >
                      <span class="nav-text">Section # 3</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('add.management.list.1') }}">
                      <span class="nav-text">Add Management Items</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.management.list.1') }}">
                      <span class="nav-text"> Management Items List</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Subscriptions</span>
                </a>
                <ul class="nav-sub">
                  <li>
                      <a href="{{ route('subscriton.index') }}" >
                        <span class="nav-text">Section # 1</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('add.subscriton.list.1') }}" >
                        <span class="nav-text">Add Subscription Items</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('index.subscriton.list.1') }}" >
                        <span class="nav-text">Subscription Items List</span>
                      </a>
                    </li>
                
                  <li>
                    {{-- <a href="{{ route('about.index.2') }}">
                      <span class="nav-text">Section # 2</span>
                    </a>
                  </li>       --}}
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label label-sm accent"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe429;
                      <span ui-include="'../assets/images/i_4.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Apps</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{ route('app.index.1') }}" >
                      <span class="nav-text">Section # 1</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('app.index.2') }}" >
                      <span class="nav-text">Section # 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('app.index.3') }}" >
                      <span class="nav-text">Section # 3</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('app.index.4') }}" >
                      <span class="nav-text">Section # 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('add.app.list.1') }}">
                      <span class="nav-text">Add App Items</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.app.list.1') }}">
                      <span class="nav-text"> App Items List</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('add.app.list.2') }}">
                      <span class="nav-text">Add App Items # 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.app.list.2') }}">
                      <span class="nav-text"> App Items List # 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('add.app.list.3') }}">
                      <span class="nav-text">Add App Items # 3</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.app.list.3') }}">
                      <span class="nav-text"> App Items List # 3</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('add.app.list.4') }}">
                      <span class="nav-text">Add App Items # 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index.app.list.4') }}">
                      <span class="nav-text"> App Items List # 4</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label label-sm accent"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe429;
                      <span ui-include="'../assets/images/i_4.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Terms</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                 
                  <li>
                    <a href="{{ route('terms.index.1') }}">
                      <span class="nav-text"> Update_term</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Privacy</span>
                </a>
                <ul class="nav-sub">
                  <li>
                      <a href="{{ route('privacy.index.1') }}" >
                        <span class="nav-text">Update Sections</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('add.privacy.list.1') }}" >
                        <span class="nav-text">Add Privacy Items # 1</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('index.privacy.list.1') }}" >
                        <span class="nav-text">Privacy Items List # 1</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('add.privacy.list.2') }}" >
                        <span class="nav-text">Add Privacy Items # 2</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('index.privacy.list.2') }}" >
                        <span class="nav-text">Privacy Items List # 2</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('add.privacy.list.3') }}" >
                        <span class="nav-text">Add Privacy Items # 3</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('index.privacy.list.3') }}" >
                        <span class="nav-text">Privacy Items List # 3</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('add.privacy.list.4') }}" >
                        <span class="nav-text">Add Privacy Items # 4</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('index.privacy.list.4') }}" >
                        <span class="nav-text">Privacy Items List # 4</span>
                      </a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="{{route('logout')}}">
                  <span class="nav-caret">
                    <i class="fa-solid fa-toggle-off"></i>                 
                 </span>
                  <span class="nav-label">
                    <!--<b class="label label-sm accent"></b>-->
                  </span>
                  <span class="nav-icon">
                     <i class="fa-solid fa-toggle-off"></i> 
                  </span>
                  <span class="nav-text">Logout</span>
                </a>
              </li>
            <!-- <li class="hidden-folded" >
              <a href="{{route('logout')}}" >
                <span class="nav-text">Logout</span>
              </a>
            </li> -->

          </ul>
      </nav>
    </div>
    <div flex-no-shrink>
      <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
    </div>
  </div>
</div>


<!-- content -->
<div id="content" class="app-content box-shadow-z0" role="main">
<div class="app-header white box-shadow navbar-md">
    <div class="navbar navbar-toggleable-sm flex-row align-items-center">
        <!-- Open side - Naviation on mobile -->
        <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
          <i class="material-icons">&#xe5d2;</i>
        </a>
        <!-- / -->

        <!-- Page title - Bind to $state's title -->
        <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

        <!-- navbar collapse -->
        <div class="collapse navbar-collapse" id="collapse">
          <!-- link and dropdown -->
          <ul class="nav navbar-nav mr-auto">
            <li class="nav-item dropdown">
              {{-- <a class="nav-link" href data-toggle="dropdown">
                <i class="fa fa-fw fa-plus text-muted"></i>
                <span>New</span>
              </a> --}}
              <div ui-include="'../views/blocks/dropdown.new.html'"></div>
            </li>
          </ul>

          <div ui-include="'../views/blocks/navbar.form.html'"></div>
          <!-- / -->
        </div>
        <!-- / navbar collapse -->

        <!-- navbar right -->
        {{-- <ul class="nav navbar-nav ml-auto flex-row">
          <li class="nav-item dropdown pos-stc-xs">
            <a class="nav-link mr-2" href data-toggle="dropdown">
              <i class="material-icons">&#xe7f5;</i>
              <span class="label label-sm up warn">3</span>
            </a>
            <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
              <span class="avatar w-32">
                <img src="../assets/images/a0.jpg" alt="...">
                <i class="on b-white bottom"></i>
              </span>
            </a>
            <div ui-include="'../views/blocks/dropdown.user.html'"></div>
          </li>
          <li class="nav-item hidden-md-up">
            <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
              <i class="material-icons">&#xe5d4;</i>
            </a>
          </li>
        </ul> --}}
        <!-- / navbar right -->
    </div>
</div>
<div class="app-footer">
  <div class="p-2 text-xs">
    <div class="pull-right text-muted py-1">
      &copy; Copyright <strong>Designed and Developed by OranjeTech</strong> <span class="hidden-xs-down"></span>
      <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
    </div>
    <div class="nav">
      <a class="nav-link" href="#"></a>
      <a class="nav-link" href="#"></a>
    </div>
  </div>
</div>

<!-- ############ LAYOUT START-->
