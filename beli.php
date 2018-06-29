<link href="cssku.css" rel="stylesheet" id="bootstrap-css">
<script src="javascript.js"></script>

<!------ Include the above in your HEAD tag ---------->

<html>
    <head>
        <title>Derwiki's Stripe Payment form + checkout'</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    </head>
    <body style="font-family: 'Open Sans', sans-serif;">
        <div class="container">
        <div class="centered title"><h1>Silahkan isi list dibawah ini</h1></div>
     </div>
     <hr class="featurette-divider"></hr>
         <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <div class="tab-content">
  <div id="stripe" class="tab-pane fade in active">
                       <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
            <br>
          <div class='form-row'>
              <div class='form-group required'>
                <div class='error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
              
              </div>
            </div>
                <label class='control-label'>Nama Anda</label>
                <input class='form-control' size='4' type='text'>
              </div>
                    
            </div>
            <div class='form-row'>
              <div class='form-group card required'>
                  <label class='control-label'>Ukuran</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
             <div class='form-row'>
              <div class='form-group card required'>
                <label class='control-label'>Alamat Anda</label>
                <input autocomplete='off' class='form-control' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group cvc required'>
                <label class='control-label'>Kode Pos</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='form-group expiration required'>
                <label class='control-label'>Kode Sepatu</label>
                <input class='form-control card-expiry-month' placeholder='00' size='2' type='text'>
              </div>
              <div class='form-group expiration required'>
                <label class='control-label'>Ukuran Sepatu</label>
                <input class='form-control card-expiry-year' placeholder='xxl' size='4' type='text'>
              </div>
            </div>
    
           
            <div class='form-row'>
              <div class='form-group'>
                         <label class='control-label'></label>
                      
                <a href="proses.php"> <button class='form-control btn btn-primary' type='button'> OK</button></a>
          
              </form>    
                
              </div>
            </div>    
            
              </div>
              
                <div id="paypal" class="tab-pane fade">
                <form action="?" id="paypalForm" method="POST">
                <div class="paypalResult"><!-- content will load here --></div>
               <br>
                <input type="hidden" id="action" value="paypal"></input>
                <input type="hidden" id="token" value="token-supersecuretoken123123123"></input>
               <a href="#paypal"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="paypal" width="100%"></a>
               <br><br><br>
                  <a href="proses.php"><button class='form-control btn btn-primary submit-button' type='submit'> Continue →</button></a>
              </div>
            </div>
            
            
          
        </div>   
     
        <div class="col-sm-6">
           <label class='control-label'></label><!-- spacing -->
        
          
       <br>
         
          
          <br><br><br>
         
         <div class="jumbotron jumbotron-flat">
    <div class="center"><h2><i>Sepatu akan dikirim jika anda sudah menyelesaikan administrasi pembayaran</i></h2></div>
           <div class="paymentAmt">Kontak Person: 081225240403</div>
            <div class="paymentAmt">No rekening: 1700827364748</div>
           
                 
          
        </div>
        
     
          
            <br><br><br>
        </div>
                    
                    
                    
                </div>
                
                
                
            </div>
        </div>
        
        
        </form>
        
    </body>
</html>