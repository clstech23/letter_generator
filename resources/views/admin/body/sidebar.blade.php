@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp


<aside class="main-sidebar">
   <!-- sidebar-->
   <section class="sidebar">	
   
       <div class="user-profile">
     <div class="ulogo" style="background-color:#a90d0d">
        <a href="index.html">
         <!-- logo for regular state and mobile devices -->
          <div class="d-flex align-items-center justify-content-center">					 	
          </div>
       </a>
     </div>
       </div>
     <!-- sidebar menu-->
     <ul class="sidebar-menu" data-widget="tree">  
     
   <li class="{{ ($route == 'dashboard')?'active':'' }}" >
         <a href="{{ route('dashboard') }}">
    <i data-feather="pie-chart"></i>
     <span>Dashboard</span>
         </a>
       </li>  

       
   
   @if(Auth::user()->role == 'Admin')
       <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
         <a href="#">
           <i data-feather="message-circle"></i>
           <span>Manage User</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-right pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
           <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
         </ul>
       </li> 
       @endif
     
       <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
         <a href="#">
           <i data-feather="grid"></i> <span>Manage Profile</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-right pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
       <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
       <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
           
         </ul>
       </li>

       <li class="treeview menu-open {{ ($prefix == '/customer')?'active':'' }}">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> <span>Letter Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: block;">
        <li><a href="{{ route('customer.view') }}"><i class="ti-more"></i>Letter Details</a></li> 
       <li><a href="{{ route('add.customer') }}"><i class="ti-more"></i>Generate Letter</a></li>
        </ul>
      </li>
       
       <li class="treeview {{ ($prefix == '/learning')?'active':'' }}">
         <a href="#">
            <i data-feather="hard-drive"></i></i> <span>Learning Portal</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-right pull-right"></i>
           </span>
         </a>

         <ul class="treeview-menu">
           <li><a href="{{ route('learning.view') }}"><i class="ti-more"></i>My Portal </a></li> 
           </ul>
       </li>	 
       
     </ul>
   </section>
 
 <div class="sidebar-footer">
   <!-- item-->
   <!--a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
   <-- item-->
   <!--a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a-->
   <!-- item-->
   <a href="{{ route('admin.logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
 </div>
 </aside>