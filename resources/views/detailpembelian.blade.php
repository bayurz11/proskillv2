<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Pembayaran</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($klsoffline)
                    <img src="{{ asset('public/uploads/' . $klsoffline->banner) }}" alt="{{ $klsoffline->kelas }}"
                        class="img-thumbnail rounded-3 aspect-ratio-16/9" style="max-width: 500px;" loading="lazy">
                @else
                    <p>No klsoffline details available.</p>
                @endif
            </div>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Detail</span>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </h4>
                    @if ($klsoffline)
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">{{ $klsoffline->name }}</h6>
                                    <small class="text-body">{{ $klsoffline->description }}</small>
                                </div>
                                <span class="text-muted">{{ $klsoffline->price }}</span>
                            </li>
                        </ul>
                    @else
                        <p>No klsoffline details available.</p>
                    @endif

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing Address</h4>
                    <form class="needs-validation" novalidate action="{{ route('payment') }}" method="POST">
                        @csrf
                        @if ($klsoffline)
                            <input type="hidden" name="id" value="{{ $klsoffline->id }}" required>
                        @else
                            <p>No klsoffline details available.</p>
                        @endif
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your name" required>
                                <div class="invalid-feedback">
                                    Valid name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your email" required>
                                <div class="invalid-feedback">
                                    Valid email is required.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Pembayaran</h4>
                        <div class="my-3">
                            <div class="form-check">
                                <input id="xendit" name="paymentMethod" type="radio" class="form-check-input"
                                    checked required>
                                <label class="form-check-label" for="xendit">Xendit</label>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Bayar Sekarang</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2024 Tes</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
