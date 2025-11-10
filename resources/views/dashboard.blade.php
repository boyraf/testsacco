@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4"><i class="bi bi-speedometer2"></i> Dashboard</h3>

    <!-- Summary Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card text-white bg-primary h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                    <h2 class="fw-bold mb-0">475</h2>
                    <p>Total Members</p>
                </div>
                <div class="card-footer text-center bg-transparent border-0">
                    <a href="#" class="text-white small">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-white bg-success h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                    <h2 class="fw-bold mb-0">12</h2>
                    <p>Daily Deposits</p>
                </div>
                <div class="card-footer text-center bg-transparent border-0">
                    <a href="#" class="text-white small">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-white bg-warning h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                    <h2 class="fw-bold mb-0">24</h2>
                    <p>Share Value</p>
                </div>
                <div class="card-footer text-center bg-transparent border-0">
                    <a href="#" class="text-white small">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-white bg-danger h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                    <h2 class="fw-bold mb-0">13</h2>
                    <p>Bad Loans</p>
                </div>
                <div class="card-footer text-center bg-transparent border-0">
                    <a href="#" class="text-white small">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-3">
        <!-- Loan Performance Chart -->
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header fw-bold">
                    Loan Performance (No. of Loans Per Year)
                </div>
                <div class="card-body">
                    <canvas id="loanChart" height="120"></canvas>
                </div>
            </div>
        </div>

        <!-- Members Per Branch Chart -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header fw-bold">
                    Members Per Branch
                </div>
                <div class="card-body text-center">
                    <canvas id="branchChart" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Loan Performance (Bar Chart)
    const ctxLoan = document.getElementById('loanChart').getContext('2d');
    new Chart(ctxLoan, {
        type: 'bar',
        data: {
            labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                label: 'Number of Loans',
                data: [45, 75, 65, 95, 70, 100],
                backgroundColor: '#00bcd4'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });

    // Members Per Branch (Doughnut Chart)
    const ctxBranch = document.getElementById('branchChart').getContext('2d');
    new Chart(ctxBranch, {
        type: 'doughnut',
        data: {
            labels: ['Naivasha', 'Nakuru', 'Eldoret', 'Kericho'],
            datasets: [{
                data: [50, 30, 20, 15],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffcd56', '#4bc0c0']
            }]
        },
        options: {
            plugins: {
                legend: { position: 'bottom' }
            },
            cutout: '70%'
        }
    });
</script>
@endsection
