<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.admin-layout')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Registered Beneficiaries -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Registered Beneficiaries</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalBeneficiaries }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Registered Beneficiaries Card -->

                    <!-- Total Transactions Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Transactions</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cash"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalTransactions }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Total Transactions Card -->

                    <!-- Total Funds Transferred Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Funds Transferred</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-wallet"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>${{ number_format($totalFundsTransferred, 2) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Total Funds Transferred Card -->

                </div><!-- End Right side columns -->

            </div>
        </div>
    </section>

</main><!-- End #main -->
