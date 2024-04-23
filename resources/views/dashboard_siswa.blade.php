@section('title', 'ProSkill Akademia | Dashboard User')
<?php $page = 'login_user'; ?>
@if (session('success'))
    <div id="success-message" class="alert alert-success" style="position: fixed; top: 70px; right: 20px; z-index: 1000;">
        {{ session('success') }}
    </div>
@endif
@extends('layout.mainlayout')
@section('content')


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar-two">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title">Dashboard</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">

                <!-- Profile Sidebar -->
                <div class="col-md-5 col-lg-4 col-xl-3">
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3>Richard Wilson</h3>
                                    <div class="patient-details">
                                        <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li class="active">
                                        <a href="patient-dashboard.html">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favourites.html">
                                            <i class="fas fa-bookmark"></i>
                                            <span>Favourites</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dependent.html">
                                            <i class="fas fa-users"></i>
                                            <span>Dependent</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat.html">
                                            <i class="fas fa-comments"></i>
                                            <span>Message</span>
                                            <small class="unread-msg">23</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="patient-accounts.html">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                            <span>Accounts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="orders-list.html">
                                            <i class="fas fa-list-alt"></i>
                                            <span>Orders</span>
                                            <small class="unread-msg">7</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="medical-records.html">
                                            <i class="fas fa-clipboard"></i>
                                            <span>Add Medical Records</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="medical-details.html">
                                            <i class="fas fa-file-medical-alt"></i>
                                            <span>Medical Details</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile-settings.html">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.html">
                                            <i class="fas fa-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <!-- Tautan logout -->
                                    {{-- <li>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form> --}}
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- / Profile Sidebar -->

                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="mb-3">
                                        <img src="assets/img/specialities/pt-dashboard-01.png" alt="heart-image"
                                            width="55">
                                    </div>
                                    <h5>Heart Rate</h5>
                                    <h6>12 <sub>bpm</sub></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="mb-3">
                                        <img src="assets/img/specialities/pt-dashboard-02.png" alt="thermometer-image"
                                            width="55">
                                    </div>
                                    <h5>Body Temperature</h5>
                                    <h6>18 <sub>C</sub></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="mb-3">
                                        <img src="assets/img/specialities/pt-dashboard-03.png" alt="hospital-equipment"
                                            width="55">
                                    </div>
                                    <h5>Glucose Level</h5>
                                    <h6>70 - 90</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="mb-3">
                                        <img src="assets/img/specialities/pt-dashboard-04.png" alt="hospital-equipment"
                                            width="55">
                                    </div>
                                    <h5>Blood Pressure</h5>
                                    <h6>202/90 <sub>mg/dl</sub></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row patient-graph-col">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Graph Status</h4>
                                </div>
                                <div class="card-body pt-2 pb-2 mt-1 mb-1">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                            <a href="#" class="graph-box" data-bs-toggle="modal"
                                                data-bs-target="#graph1">
                                                <div>
                                                    <h4>BMI Status</h4>
                                                </div>
                                                <div class="graph-img">
                                                    <img src="assets/img/shapes/graph-01.png" alt="shapes-icon">
                                                </div>
                                                <div class="graph-status-result mt-3">
                                                    <span class="graph-update-date">Last Update 6d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                            <a href="#" class="graph-box pink-graph" data-bs-toggle="modal"
                                                data-bs-target="#graph2">
                                                <div>
                                                    <h4>Heart Rate Status</h4>
                                                </div>
                                                <div class="graph-img">
                                                    <img src="assets/img/shapes/graph-02.png" alt="graph-icon">
                                                </div>
                                                <div class="graph-status-result mt-3">
                                                    <span class="graph-update-date">Last Update 2d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                            <a href="#" class="graph-box sky-blue-graph" data-bs-toggle="modal"
                                                data-bs-target="#graph3">
                                                <div>
                                                    <h4>FBC Status</h4>
                                                </div>
                                                <div class="graph-img">
                                                    <img src="assets/img/shapes/graph-03.png" alt="chart-icon">
                                                </div>
                                                <div class="graph-status-result mt-3">
                                                    <span class="graph-update-date">Last Update 5d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                            <a href="#" class="graph-box orange-graph" data-bs-toggle="modal"
                                                data-bs-target="#graph4">
                                                <div>
                                                    <h4>Weight Status</h4>
                                                </div>
                                                <div class="graph-img">
                                                    <img src="assets/img/shapes/graph-04.png" alt="chart-icon">
                                                </div>
                                                <div class="graph-status-result mt-3">
                                                    <span class="graph-update-date">Last Update 3d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pt-0">

                            <!-- Tab Menu -->
                            <nav class="user-tabs mb-4">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#pat_appointments"
                                            data-bs-toggle="tab">Appointments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_prescriptions"
                                            data-bs-toggle="tab">Prescriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_medical_records" data-bs-toggle="tab"><span
                                                class="med-records">Medical Records</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_billing" data-bs-toggle="tab">Billing</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /Tab Menu -->

                            <!-- Tab Content -->
                            <div class="tab-content pt-0">

                                <!-- Appointment Tab -->
                                <div id="pat_appointments" class="tab-pane fade show active">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Doctor</th>
                                                            <th>Appt Date</th>
                                                            <th>Booking Date</th>
                                                            <th>Amount</th>
                                                            <th>Follow Up</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-01.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Ruby Perrin
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2023 <span class="d-block text-info">10.00 AM</span>
                                                            </td>
                                                            <td>12 Nov 2023</td>
                                                            <td>$160</td>
                                                            <td>16 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-success-light">Confirm</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-02.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Darren Elder
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>12 Nov 2023 <span class="d-block text-info">8.00 PM</span>
                                                            </td>
                                                            <td>12 Nov 2023</td>
                                                            <td>$250</td>
                                                            <td>14 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-success-light">Confirm</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-03.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Deborah Angel
                                                                        <span>Cardiology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>11 Nov 2023 <span class="d-block text-info">11.00 AM</span>
                                                            </td>
                                                            <td>10 Nov 2023</td>
                                                            <td>$400</td>
                                                            <td>13 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-danger-light">Cancelled</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-04.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Sofia Brient
                                                                        <span>Urology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>10 Nov 2023 <span class="d-block text-info">3.00 PM</span>
                                                            </td>
                                                            <td>10 Nov 2023</td>
                                                            <td>$350</td>
                                                            <td>12 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-warning-light">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-05.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Marvin Campbell
                                                                        <span>Ophthalmology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>9 Nov 2023 <span class="d-block text-info">7.00 PM</span>
                                                            </td>
                                                            <td>8 Nov 2023</td>
                                                            <td>$75</td>
                                                            <td>11 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-success-light">Confirm</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-06.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Katharine Berthold
                                                                        <span>Orthopaedics</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>8 Nov 2023 <span class="d-block text-info">9.00 AM</span>
                                                            </td>
                                                            <td>6 Nov 2023</td>
                                                            <td>$175</td>
                                                            <td>10 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-danger-light">Cancelled</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-07.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Linda Tobin
                                                                        <span>Neurology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>8 Nov 2023 <span class="d-block text-info">6.00 PM</span>
                                                            </td>
                                                            <td>6 Nov 2023</td>
                                                            <td>$450</td>
                                                            <td>10 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-success-light">Confirm</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-08.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Paul Richard
                                                                        <span>Dermatology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>7 Nov 2023 <span class="d-block text-info">9.00 PM</span>
                                                            </td>
                                                            <td>7 Nov 2023</td>
                                                            <td>$275</td>
                                                            <td>9 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-success-light">Confirm</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-09.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. John Gibbs
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>6 Nov 2023 <span class="d-block text-info">8.00 PM</span>
                                                            </td>
                                                            <td>4 Nov 2023</td>
                                                            <td>$600</td>
                                                            <td>8 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-success-light">Confirm</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-10.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Olga Barlow
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>5 Nov 2023 <span class="d-block text-info">5.00 PM</span>
                                                            </td>
                                                            <td>1 Nov 2023</td>
                                                            <td>$100</td>
                                                            <td>7 Nov 2023</td>
                                                            <td><span
                                                                    class="badge rounded-pill bg-success-light">Confirm</span>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Appointment Tab -->

                                <!-- Prescription Tab -->
                                <div class="tab-pane fade" id="pat_prescriptions">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Date </th>
                                                            <th>Name</th>
                                                            <th>Created by </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>14 Nov 2023</td>
                                                            <td>Prescription 1</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-01.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Ruby Perrin
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>13 Nov 2023</td>
                                                            <td>Prescription 2</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-02.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Darren Elder
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>12 Nov 2023</td>
                                                            <td>Prescription 3</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-03.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Deborah Angel
                                                                        <span>Cardiology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>11 Nov 2023</td>
                                                            <td>Prescription 4</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-04.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Sofia Brient
                                                                        <span>Urology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10 Nov 2023</td>
                                                            <td>Prescription 5</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-05.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Marvin Campbell
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>9 Nov 2023</td>
                                                            <td>Prescription 6</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-06.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Katharine Berthold
                                                                        <span>Orthopaedics</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>8 Nov 2023</td>
                                                            <td>Prescription 7</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-07.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Linda Tobin
                                                                        <span>Neurology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>7 Nov 2023</td>
                                                            <td>Prescription 8</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-08.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Paul Richard
                                                                        <span>Dermatology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6 Nov 2023</td>
                                                            <td>Prescription 9</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-09.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. John Gibbs
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5 Nov 2023</td>
                                                            <td>Prescription 10</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-10.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Olga Barlow
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Prescription Tab -->

                                <!-- Medical Records Tab -->
                                <div id="pat_medical_records" class="tab-pane fade">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Date </th>
                                                            <th>Description</th>
                                                            <th>Attachment</th>
                                                            <th>Created</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0010</a></td>
                                                            <td>14 Nov 2023</td>
                                                            <td>Dental Filling</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-01.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Ruby Perrin
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0009</a></td>
                                                            <td>13 Nov 2023</td>
                                                            <td>Teeth Cleaning</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-02.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Darren Elder
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0008</a></td>
                                                            <td>12 Nov 2023</td>
                                                            <td>General Checkup</td>
                                                            <td><a href="#">cardio-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-03.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Deborah Angel
                                                                        <span>Cardiology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0007</a></td>
                                                            <td>11 Nov 2023</td>
                                                            <td>General Test</td>
                                                            <td><a href="#">general-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-04.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Sofia Brient
                                                                        <span>Urology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0006</a></td>
                                                            <td>10 Nov 2023</td>
                                                            <td>Eye Test</td>
                                                            <td><a href="#">eye-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-05.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Marvin Campbell
                                                                        <span>Ophthalmology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0005</a></td>
                                                            <td>9 Nov 2023</td>
                                                            <td>Leg Pain</td>
                                                            <td><a href="#">ortho-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-06.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Katharine Berthold
                                                                        <span>Orthopaedics</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0004</a></td>
                                                            <td>8 Nov 2023</td>
                                                            <td>Head pain</td>
                                                            <td><a href="#">neuro-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-07.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Linda Tobin
                                                                        <span>Neurology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0003</a></td>
                                                            <td>7 Nov 2023</td>
                                                            <td>Skin Alergy</td>
                                                            <td><a href="#">alergy-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-08.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Paul Richard
                                                                        <span>Dermatology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0002</a></td>
                                                            <td>6 Nov 2023</td>
                                                            <td>Dental Removing</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-09.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. John Gibbs
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0001</a></td>
                                                            <td>5 Nov 2023</td>
                                                            <td>Dental Filling</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-10.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Olga Barlow
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Medical Records Tab -->

                                <!-- Billing Tab -->
                                <div id="pat_billing" class="tab-pane fade">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice No</th>
                                                            <th>Doctor</th>
                                                            <th>Amount</th>
                                                            <th>Paid On</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0010</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-01.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Ruby Perrin
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$450</td>
                                                            <td>14 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0009</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-02.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Darren Elder
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$300</td>
                                                            <td>13 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0008</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-03.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Deborah Angel
                                                                        <span>Cardiology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$150</td>
                                                            <td>12 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0007</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-04.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Sofia Brient
                                                                        <span>Urology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$50</td>
                                                            <td>11 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0006</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-05.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Marvin Campbell
                                                                        <span>Ophthalmology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$600</td>
                                                            <td>10 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0005</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-06.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Katharine Berthold
                                                                        <span>Orthopaedics</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$200</td>
                                                            <td>9 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0004</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-07.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Linda Tobin
                                                                        <span>Neurology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$100</td>
                                                            <td>8 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0003</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-08.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Paul Richard
                                                                        <span>Dermatology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$250</td>
                                                            <td>7 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0002</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-09.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. John Gibbs
                                                                        <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$175</td>
                                                            <td>6 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="invoice-view.html">#INV-0001</a>
                                                            </td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html"
                                                                        class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/img/doctors/doctor-thumb-10.jpg"
                                                                            alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Olga Barlow
                                                                        <span>#0010</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>$550</td>
                                                            <td>5 Nov 2023</td>
                                                            <td>
                                                                <div class="table-action">
                                                                    <a href="invoice-view.html"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Billing Tab -->

                            </div>
                            <!-- Tab Content -->

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

    <!-- Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /Cursor -->
    <!-- Whatsapp popup -->
    <div id="whatsapp-popup"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
        ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)">
        <a href="https://wa.me/6281266187125?" target="_blank">
            <img src="assets/img/whatsapp.png" alt="WhatsApp Icon" style="width: 50px; height: auto;">
        </a>
        <div id="popup-message"
            style="display: none; position: absolute; top: -40px; left: -160px; background-color: #fff; padding: 10px; border: 1px solid #ccc;">
            hubungi Whatsapp kami
        </div>
    </div>

    <script>
        var initialX, initialY;
        var popup = document.getElementById('whatsapp-popup');
        var messagePopup = document.getElementById('popup-message');
        var isDragging = false;

        function showMessage() {
            messagePopup.style.display = 'block';
            setTimeout(function() {
                messagePopup.style.display = 'none';
            }, 2000);
        }

        function handleTouchStart(event) {
            isDragging = false;
            var touch = event.targetTouches[0];
            initialX = touch.clientX - parseInt(window.getComputedStyle(popup).getPropertyValue('left'));
            initialY = touch.clientY - parseInt(window.getComputedStyle(popup).getPropertyValue('top'));
        }

        function handleTouchMove(event) {
            if (!isDragging) return;
            var touch = event.targetTouches[0];
            var newX = touch.clientX - initialX;
            var newY = touch.clientY - initialY;
            popup.style.left = newX + 'px';
            popup.style.top = newY + 'px';
        }

        document.addEventListener('touchend', function() {
            isDragging = false;
        });

        setTimeout(function() {
            popup.style.display = 'block';
            showMessage();
        }, 300);
    </script>
    @component('components.scrolltotop')

        <script>
            var initialX, initialY;
            var popup = document.getElementById('whatsapp-popup');
            var messagePopup = document.getElementById('popup-message');
            var isDragging = false;

            function showMessage() {
                messagePopup.style.display = 'block';
                setTimeout(function() {
                    messagePopup.style.display = 'none';
                }, 2000);
            }

            function handleTouchStart(event) {
                isDragging = false;
                var touch = event.targetTouches[0];
                initialX = touch.clientX - parseInt(window.getComputedStyle(popup).getPropertyValue('left'));
                initialY = touch.clientY - parseInt(window.getComputedStyle(popup).getPropertyValue('top'));
            }

            function handleTouchMove(event) {
                if (!isDragging) return;
                var touch = event.targetTouches[0];
                var newX = touch.clientX - initialX;
                var newY = touch.clientY - initialY;
                popup.style.left = newX + 'px';
                popup.style.top = newY + 'px';
            }

            document.addEventListener('touchend', function() {
                isDragging = false;
            });

            setTimeout(function() {
                popup.style.display = 'block';
                showMessage();
            }, 300);
        </script>

        @component('components.scrolltotop')
        @endcomponent

    @endcomponent
    <script>
        // Ambil elemen pesan keberhasilan
        var successMessage = document.getElementById('success-message');

        // Tampilkan pesan keberhasilan
        if (successMessage) {
            // Tunggu 3 detik kemudian hilangkan pesan
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 3000);
        }
    </script>

@endsection
