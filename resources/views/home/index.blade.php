<!DOCTYPE html>
<html>
<head>
    <title> Online Technical Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>[AMARTEK] Online Technical Test - PHP Developer</h2>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-3 margin-tb">
            <p><b>1. Sum of Even Number</b></p>
            <form action="{{ route('home.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <input type="number" class="form-control my-2" name="number[]" value="{{ old('number.0') }}">
                  <input type="number" class="form-control my-2" name="number[]" value="{{ old('number.1') }}">
                  <input type="number" class="form-control my-2" name="number[]" value="{{ old('number.2') }}">
                  <input type="number" class="form-control my-2" name="number[]" value="{{ old('number.3') }}">
                  <input type="number" class="form-control my-2" name="number[]" value="{{ old('number.4') }}">
                  <hr>
                  <input type="number" class="form-control my-2" value="{{ Session::get('result') }}" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Sum</button>
              </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-3 margin-tb">
            <p><b>2. Send Email</b></p>
            <form action="{{ route('home.mail') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Sender</label>
                    <input type="text" class="form-control my-2" name="sender">
                    <label>Recipient</label>
                    <input type="email" class="form-control my-2" name="recipient">
                    <label>Subject</label>
                    <input type="text" class="form-control my-2" name="subject">
                    <label>Body</label>
                    <textarea name="body" class="form-control my-2"></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-3 margin-tb">
            <p><b>3. Customer Table</b></p>
            <a href="{{ URL::to('/home/customer') }}">Show Customer Table</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-3 margin-tb">
            <p><b>4. Vowel Remover</b></p>
            <form action="{{ route('home.string') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Input Text</label>
                    <input type="text" class="form-control my-2" name="text" value="{{ old('text') }}">
                    <label>Result</label>
                    <input type="text" class="form-control my-2" value="{{ Session::get('string') }}" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-3 margin-tb">
            <p><b>5. Import CSV</b></p>
            <form action="{{ route('home.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Input CSV</label>
                    <input type="file" class="form-control my-2" name="file" accept=".csv">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

</body>
</html>
