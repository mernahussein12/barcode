<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        .card {
            text-align: center;
        }

        .card-img-top {
            max-width: 150px;
            margin: 0 auto;
            display: block;
            height: auto;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">

        <div class="row">
            @foreach($students as $student)
                <div class="col-md-4 mb-4">

                    <div class="card">

                        <h5 class="card-title">{{ $student->name }}</h5>

                        <img src="data:image/png;base64,{{ base64_encode((new Picqer\Barcode\BarcodeGeneratorPNG())->getBarcode($student->national_id, Picqer\Barcode\BarcodeGeneratorPNG::TYPE_CODE_128)) }}" class="card-img-top" alt="Barcode">

                        <div class="card-body">

                            <p class="card-text">{{ $student->national_id }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $students->links('pagination::bootstrap-4') }}
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
