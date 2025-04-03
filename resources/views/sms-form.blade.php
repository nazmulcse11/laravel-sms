<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>How to send SMS to a real Phone number!<</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h2>How to send SMS to a real phone number!</h2>
                <form class="mt-5" action="{{ route('sms.send')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="phone" class="form-label">Enter Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Send Sms</button>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

  </body>
</html>