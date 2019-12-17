<!DOCTYPE html>
<html>
<head>
  <title>The Luggage Storage Network</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/front/payment/style.css') }}">
</head>
<body>
  <div class="container-fluid header">
    <header>
      <div class="row">
        <div class="col-md-12">
          <div class="img-section">
            <img src="img/DropTheBagLang.png" alt="">
          </div>
          
        </div>
      </div>
    </header>
  </div>
  <div class="container info">
    <div class="row">
      <div class="col-md-12">
        <h3 class="info-first-head">Luggage Storage Oslo Station</h3>
        <div class="drop-pick-info">
          @foreach($rows as $row)
          <h3>Drop off:</h3>
          <p>{{ $row->start_date_time }}</p>
        </div>
        <div class="drop-pick-info">
          <h3>Drop off:</h3>
          <p>{{ $row->end_date_time }}</p>
        </div>
        <div class="drop-pick-info">
          <h3>Number:</h3>
          <p>{{ $row->bag }} bags</p>
        </div>
        <div class="total-block">
          <div class="drop-pick-info">
            <h3>Total:</h3>
            <p>€{{ $row->price }}</p>
          </div>
        </div>
        
      </div>
    </div>
      
      <form action="{{ route('paypal', $row->id) }}" method="post">
        <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="control-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="abc@gmail.com" required>
          </div>
        </div>
      </div>
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="skkundu32@gmail.com">
        <input type="hidden" name="undefined_quantity" value="1">
        <input type="hidden" name="item_name" value="bag">
       <input type="text" name="custom" value="{{ $row->id }}">
        <input type="hidden" name="item_number" value="{{ $row->bag }}">
        <input type="hidden" name="amount" value="{{ $row->price }}">
        @endforeach
        <input type="hidden" name="return" value="http://webencoder.space/demo/demo66/paypal_thanks.php">
        <input type="hidden" name="cancel_return" value="http://webencoder.space/demo/demo66/paypal_canceled.php">
        <input type="hidden" name="notify_url" value="http://webencoder.space/demo/demo66/paypal_ipn.php">
        <input type="image" border="0" name="submit" src="http://images.paypal.com/images/x-click-but5.gif" alt="Buy doodads with PayPal">
      </form>
  </div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>