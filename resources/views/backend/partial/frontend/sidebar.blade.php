use App\Models\leave;
<nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li>
                <!-- User Profile-->
                <div class="user-profile d-flex no-block dropdown m-t-20">
                  <div class="user-pic">
                    <img
                      src="{{url('/images/admin profile.png')}}"
                      alt="users"
                      class="rounded-circle"
                      width="40"
                    />
                  </div>
                  <div class="user-content hide-menu m-l-10">
                    @if(auth()->user())
                    <a
                      href="#"
                      class=""
                      id="Userdd"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <h5 class="m-b-0 user-name font-medium">
                         <i class="fa fa-angle-down"></i>
                      </h5>
                      <span class="op-5 user-email">{{auth()->user()->email}}</span>
                    </a>
                    @endif
                    <div
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="Userdd"
                    >
                      <a class="dropdown-item" href="#"
                        ><i class="ti-user m-r-5 m-l-5"></i> Home</a
                      >
                      <!-- <!-- <a class="dropdown-item" href="javascript:void(0)"
                        ><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a
                      >
                      <a class="dropdown-item" href="javascript:void(0)"
                        ><i class="ti-email m-r-5 m-l-5"></i> Inbox</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void(0)"
                        ><i class="ti-settings m-r-5 m-l-5"></i> Account -->
                        <!-- Setting</a -->
                      <!-- >  -->
                      <div class="dropdown-divider"></div>
                      @if(auth()->user())

                      <a class="dropdown-item" href="javascript:void(0)"
                        ><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a
                      >
                      @endif
                    </div>
                  </div>
                </div>
                <!-- End User Profile-->
              </li>
              <!-- <li class="p-15 m-t-10">
                <a
                  href="javascript:void(0)"
                  class="
                    btn
                    d-block
                    w-100
                    create-btn
                    text-white
                    no-block
                    d-flex
                    align-items-center
                  "
                  ><i class="fa fa-plus-square"></i>
                  <span class="hide-menu m-l-5">Department</span>
                </a>
              </li> -->
              <!-- User Profile-->
              @if(auth()->user()->role=='admin')
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('home')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
 <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('exam.list')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Exam</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href=""
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Exam Result</span></a
                >
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('department')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Department</span></a
                >
              </li>
              @endif
              @if(auth()->user()->role=='admin')
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('designation')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Designation</span></a
                >
              </li>
              @endif

              <li class="sidebar-item">
                <a
                  class="sidebar-link weaves-effect waves-dark sidebar-link"
                        href="{{route('notice')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-network"></i
                  ><span class="hide-menu">Notice</span></a
                >
              </li>
              @if(auth()->user()->role=='admin')

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('list.salary')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-all"></i
                  ><span class="hide-menu">Salary Structure</span></a
                >
              </li>
              @endif

@php

use App\Models\leave;

if(auth()->user()->role=='admin')
        {
            $leaveNotification=leave::where('status','pending')->get();
        }else

        {
            $leaveNotification=leave::where('user_id',auth()->user()->id)->where('status','pending')->get();
        }


@endphp





              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('leave')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-face"></i
                  ><span class="hide-menu">Leave ({{$leaveNotification->count()}})</span></a
                >
              </li>


              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('attendance')}}"

                  aria-expanded="false"
                  ><i class="mdi mdi-alert-outline"></i>
                  <span class="hide-menu">Attendance</span>

                  </a>
              </li>
              @if(auth()->user()->role=='admin')
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('employee')}}"

                  aria-expanded="false"
                  ><i class="mdi mdi-alert-outline"></i>
                  <span class="hide-menu">Employee</span>

                  </a>
              </li>
              @endif
              @if(auth()->user()->role=='admin')
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('payroll')}}"

                  aria-expanded="false"
                  ><i class="mdi mdi-alert-outline"></i>
                  <span class="hide-menu">Payroll</span>

                  </a>
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('circular')}}"

                  aria-expanded="false"
                  ><i class="mdi mdi-alert-outline"></i>
                  <span class="hide-menu">Circular</span>

                  </a>
              </li>
              @endif
              <li class="text-center p-40 upgrade-btn">

              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
