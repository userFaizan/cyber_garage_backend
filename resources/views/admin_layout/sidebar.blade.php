<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside indigo-900 dk" layout="column">
    <div class="navbar navbar-md no-radius">
      <!-- brand -->
      <a class="navbar-brand">
          <div ui-include="'../assets/images/logo.svg'"></div>
          <img src="../assets/images/logo.png" alt="." class="hide">
          <span class="hidden-folded inline">Sinopec</span>
      </a>
      <!-- / brand -->
    </div>
    <div flex class="hide-scroll">
      <nav class="scroll nav-active-primary">

          <ul class="nav" ui-nav>
            <li class="nav-header hidden-folded">
              <small class="text-muted"></small>
            </li>

            <li>
              <a href="#" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe3fc;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Dashboard</span>
              </a>
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
                <span class="nav-text">Users</span>
              </a>
              <ul class="nav-sub">
                <li>
                    <a href="{{route('user.create')}}" >
                      <span class="nav-text">Add User</span>
                    </a>
                  </li>
                <li>
                  <a href="{{route('user.userlist')}}" >
                    <span class="nav-text">User Lists</span>
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <a>
                <span class="nav-caret">
                  <i class="fa fa-caret-down"></i>
                </span>
                <span class="nav-icon">
                  <i class="material-icons">&#xe8f0;
                    <span ui-include="'../assets/images/i_2.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Folder</span>
              </a>
              <ul class="nav-sub">
                <li>
                  <a href="{{route('folder.create')}}" >
                    <span class="nav-text">Add Folder</span>
                  </a>
                </li>
                <li>
                    <a href="{{route('folder.folderlist')}}" >
                      <span class="nav-text">Folder List</span>
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
                  <span class="nav-text">Certificate</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{route('certificates.create')}}" >
                      <span class="nav-text">Add Certificate</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('certificates.certificateslist')}}" >
                      <span class="nav-text">Certificate Lists</span>
                    </a>
                  </li>
                  {{-- <li>
                    <a href="grid.html" >
                      <span class="nav-text">Grid</span>
                    </a>
                  </li> --}}
                  {{-- <li>
                    <a href="icon.html" >
                      <span class="nav-text">Icon</span>
                    </a>
                  </li> --}}
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
                  <span class="nav-text">Password</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{route('index.password')}}" >
                      <span class="nav-text">Change Password</span>
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
