     <!-- Profile Sidebar -->
     <div class="profile-sidebar">
         <div class="widget-profile pro-widget-content">
             <div class="profile-info-widget">
                 <a href="javascript:;" class="booking-doc-img">
                     <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}" alt="User Image">
                 </a>
                 <div class="profile-det-info">
                     <h3>Dr. Darren Elder</h3>
                     <div class="patient-details">
                         <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                     </div>
                 </div>
             </div>
         </div>
         <div class="dashboard-widget">
             <nav class="dashboard-menu">
                 <ul>
                     <li class="{{ Request::is('doctor-dashboard') ? 'active' : '' }}">
                         <a href="{{ url('doctor-dashboard') }}">
                             <i class="fas fa-columns"></i>
                             <span>Dashboard</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('appointments') ? 'active' : '' }}">
                         <a href="{{ url('appointments') }}">
                             <i class="fas fa-calendar-check"></i>
                             <span>Appointments</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('my-patients') ? 'active' : '' }}">
                         <a href="{{ url('my-patients') }}">
                             <i class="fas fa-user-injured"></i>
                             <span>My Patients</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('schedule-timings') ? 'active' : '' }}">
                         <a href="{{ url('schedule-timings') }}">
                             <i class="fas fa-hourglass-start"></i>
                             <span>Schedule Timings</span>
                         </a>
                     </li>
                     @if(!Route::is(['doctor-add-blog','doctor-blog','doctor-pending-blog','edit-blog']))
                     <li class="{{ Request::is('available-timings') ? 'active' : '' }}">
                         <a href="{{ url('available-timings') }}">
                             <i class="fas fa-clock"></i>
                             <span>Available Timings</span>
                         </a>
                     </li>
                     @endif
                     <li class="{{ Request::is('invoices') ? 'active' : '' }}">
                         <a href="{{ url('invoices') }}">
                             <i class="fas fa-file-invoice"></i>
                             <span>Invoices</span>
                         </a>
                     </li>
                     @if(!Route::is(['doctor-add-blog','doctor-blog','doctor-pending-blog','edit-blog']))
                     <li class="{{ Request::is('accounts') ? 'active' : '' }}">
                         <a href="{{ url('accounts') }}">
                             <i class="fas fa-file-invoice-dollar"></i>
                             <span>Accounts</span>
                         </a>
                     </li>
                     @endif
                     <li class="{{ Request::is('reviews') ? 'active' : '' }}">
                         <a href="{{ url('reviews') }}">
                             <i class="fas fa-star"></i>
                             <span>Reviews</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('chat-doctor') ? 'active' : '' }}">
                         <a href="{{ url('chat-doctor') }}">
                             <i class="fas fa-comments"></i>
                             <span>Message</span>
                             <small class="unread-msg">23</small>
                         </a>
                     </li>
                     <li class="{{ Request::is('doctor-profile-settings') ? 'active' : '' }}">
                         <a href="{{ url('doctor-profile-settings') }}">
                             <i class="fas fa-user-cog"></i>
                             <span>Profile Settings</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('social-media') ? 'active' : '' }}">
                         <a href="{{ url('social-media') }}">
                             <i class="fas fa-share-alt"></i>
                             <span>Social Media</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('doctor-change-password') ? 'active' : '' }}">
                         <a href="{{ url('doctor-change-password') }}">
                             <i class="fas fa-lock"></i>
                             <span>Change Password</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('login') }}">
                             <i class="fas fa-sign-out-alt"></i>
                             <span>Logout</span>
                         </a>
                     </li>
                 </ul>
             </nav>
         </div>
     </div>
     <!-- /Profile Sidebar -->
