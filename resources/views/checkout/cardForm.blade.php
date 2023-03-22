<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
  crossorigin="anonymous">
<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  <style>
    body {
      background-image: url("/assets/CLSU.png");
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    </style>
</head>

<body style="background-color: #4d0404; color:#ffffff">
  <div class="container">
    <div class='row'>
      <div class='col-md-4'></div>
      <div class='col-md-4'>
        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
        <form accept-charset="UTF-8" action="{{ route('add.check') }}" class="require-validation"
          data-cc-on-file="false"
          data-stripe-publishable-key="pk_test_51MmHJECxddf0HBANNzNVEAbbNuhfPo4ZylVLBbV0OqTJRYbOaahapHOfqzKsZDS0qbbOlyvYD8XaAR8pj7xG646e00BXxc6aVx"
          id="payment-form" method="post">
          @csrf

          @foreach($allData as $key => $value )

          <?php 
            switch ($value->letter) {
              
            case "ARLR1":
              $dscr = "Account Removal Letter R1";
              break;
            case "ARLR2":
              $dscr = "Account Removal Letter R2";
              break;
            case "ITDL":
              $dscr = "Identity Theft Dispute Letter";
              break;
            case "NPRRPC":
              $dscr = "No Parking Rule Refusal to Pay Cease and Desist";
              break;
            case "LPD":
              $dscr = "Late Payment Deletion Letter";
              break;
            case "PIUL":
              $dscr = "Personal Information Update Letter";
              break;
            case "ALDL":
              $dscr = "Auto Loan Deletion Letter";
              break;
            case "MCD":
              $dscr = "Medical Collection Deletion";
              break;

            case "BDL":
              $dscr = "Bankrupcy Deletion Letter";
              break;
            case "MC":
              $dscr = "Medical Collection";
              break;
            case "REL":
              $dscr = "Repossession Letter";
              break;
            case "CDVNL":
              $dscr = "Cease and Desit Volenti Non Injuria";
              break;
            case "MDL":
              $dscr = "Mortgage Deletion Letter";
              break;
            case "SLDL":
              $dscr = "Student Loan Deletion Letter";
              break;
            case "COL":
              $dscr = "Charge Off Letter";
              break;
            case "CSL":
              $dscr = "Child Support Letter";
              break;
            case "DVL":
              $dscr = "Debt Validation Letter";
              break;
            case "IRL":
              $dscr = "Inquiry Removal Letter";
              break;
            
            }

            switch ($value->account_name) {
              
              case "COB":
                $accoutdsc = "Credit One Bank";
                break;
              case "BOA":
                $accoutdsc = "Bank Of America";
                break;
              case "NFD":
                $accoutdsc = "Navy Fed";
                break;
            }

            switch ($value->agency) {
              
              case "EXP":
                $agencydsc = "Experian";
                break;
              case "EQF":
                $agencydsc = "Equifax Information Services LLC";
                break;
              case "TRSU":
                $agencydsc = "TransUnion LLC Consumer Dispute Center";
                break;
            }
            ?>
            <br>
            <br>
            
          <div class='form-row'>
            <div class='col-xs-12 form-group required'>
            <label class='control-label'>Dispute Template</label> 
           <select name="letter" id="letter" required="" class="form-control">
                
            <option value="{{ ($value->letter) }}" {{ ($value->letter ? "selected": "") }} disable="">{{$dscr}}</option>
					</select>           
            </div>
          </div>
          <div class='form-row'>
            <div class='col-xs-12 form-group required'>
             
              <label class='control-label'>Amount</label> <input
                class='form-control' size='4' type='text' name="amount" disabled="" value="{{$value->amount}}">
            </div>
          </div>
          <div class='form-row'>
            <div class='col-xs-12 form-group required'>
             
              <label class='control-label'>Card Holder Name</label> <input
                class='form-control' size='4' type='text' disabled="" value="{{$value->fullname}}" placeholder="Enter Card Holder Name">
            </div>
          </div>
          @endforeach
         
          <div class='form-row'>
            <div class='col-xs-12 form-group card required'>
              <label class='control-label'>Card Number</label> <input
                autocomplete='off' class='form-control card-number' size='20'
                type='text' placeholder="Enter Card number">
            </div>
          </div>
          <div class='form-row'>
            <div class='col-xs-4 form-group cvc required'>
              <label class='control-label'>CVC</label> <input
                autocomplete='off' class='form-control card-cvc'
                placeholder='CVV' size='4' type='text'>
            </div>
            <div class='col-xs-4 form-group expiration required'>
              <label class='control-label'>Expiration</label> <input
                class='form-control card-expiry-month' placeholder='MM' size='2'
                type='text'>
            </div>
            <div class='col-xs-4 form-group expiration required'>
              <label class='control-label'>YEAR</label> <input
                class='form-control card-expiry-year' placeholder='YYYY'
                size='4' type='text'>
            </div>
          </div>
          <!-- <div class='form-row'>
            <div class='col-md-12'>
              <div class='form-control total btn btn-info'>
                Total: <span class='amount'>$300</span>
              </div>
            </div>
          </div> -->
          <div class='form-row'>
            <div class='col-md-12 form-group'>
              <button class='form-control btn btn-primary submit-button'
                type='submit' style="margin-top: 10px;">Pay</button>
            </div>
          </div>

          <div class='form-row'>
            <div class='col-md-12 form-group'> 
            <img src="/assets/logo-stripe.png" alt="CLSU Payment!" width="350"height="80">
            </div>
          </div>

          <div class='form-row'>
            <div class='col-md-12 error form-group hide'>
              <div class='alert-danger alert'>Please correct the errors and try
                again.</div>
            </div>
          </div>
        </form>
        @if ((Session::has('success-message')))
        <div class="alert alert-success col-md-12">{{
          Session::get('success-message') }}</div>
        @endif @if ((Session::has('fail-message')))
        <div class="alert alert-danger col-md-12">{{
          Session::get('fail-message') }}</div>
        @endif
      </div>
      <div class='col-md-4'></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js"
    integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
    crossorigin="anonymous"></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>
  <script>
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
          var $form         = $(e.target).closest('form'),
              inputSelector = ['input[type=email]', 'input[type=password]',
                               'input[type=text]', 'input[type=file]',
                               'textarea'].join(', '),
              $inputs       = $form.find('.required').find(inputSelector),
              $errorMessage = $form.find('div.error'),
              valid         = true;

          $errorMessage.addClass('hide');
          $('.has-error').removeClass('has-error');
          $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
              $input.parent().addClass('has-error');
              $errorMessage.removeClass('hide');
              e.preventDefault(); // cancel on first error
            }
          });
        });
      });

      $(function() {
        var $form = $("#payment-form");

        $form.on('submit', function(e) {
          if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
              number: $('.card-number').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
          }
        });

        function stripeResponseHandler(status, response) {
          if (response.error) {
            $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
          } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            console.log(token);
            $form.get(0).submit();
          }
        }
      })
    </script>
</body>
</html>