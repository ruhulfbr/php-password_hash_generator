<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta name="description" content="PHP password_hash web tool to generate encrypted password hashes online from your browser. password_hash() creates a new password hash using a strong one-way hashing algorithm. The following algorithms are currently supported: PASSWORD_DEFAULT - Use the bcrypt algorithm (default as of PHP 5.5.0). Note that this constant is designed to change over time as new and stronger algorithms are added to PHP.">

        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, password_hash, web, tool, to, generate, encrypted, password, hashes, online, from, your, browser, password_hash(), creates, new password, hash, using, strong, one-way, hashing, algorithm, PASSWORD_DEFAULT - Use the bcrypt, algorithm, (default as of PHP 5.5.0). Note, that, this, constant, is, designed, change, over, time, new, stronger, algorithms">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online PHP password_hash generate & verify</title>

        <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style type="text/css">
            .spinner-border{
              font-size: 14px; height: 20px; width: 20px;
            }
        </style>

  </head>
  <body>

      <div class="container-md">
          <div class="row">
              <h1 class="mt-5 text-center">Online PHP password_hash generate & verify <i class="bi bi-key"></i></h1>
              <p class="lead mt-3">                  
                  password_hash() creates a new password hash using a strong one-way hashing algorithm. The following algorithms are currently supported: PASSWORD_DEFAULT - Use the bcrypt algorithm (default as of PHP 5.5.0). Note that this constant is designed to change over time as new and stronger algorithms are added to PHP.
              </p>

              <div class="mt-5">
                  <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link h2 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Generate Hash</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link h2" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Verify Password</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="row p-3 pt-5 d-flex justify-content-start align-items-center">
                              <div class="col-md-1 me-3">
                                  <label class="control-label h4 pb-0 mb-0">Password</label>
                              </div>
                              <div class="col">
                                  <input id="string" class="form-control" type="text" onkeyup="inputString()" placeholder="Password">
                              </div>

                              <div class="col">
                                  <select id="algorithm" class="form-select" onchange="getResult()">
                                      <option value="PASSWORD_DEFAULT">PASSWORD_DEFAULT</option>
                                      <option value="PASSWORD_BCRYPT">PASSWORD_BCRYPT</option>
                                  </select>
                              </div>
                              
                              
                          </div>
                          <div class="row p-3">
                              <h3 class="d-flex justify-content-start align-items-center">Hash = <code id="hash_result" class="code ms-2 mt-1"> 
                                 null</code> 
                                <button type="button" id="clipboard" onclick="copyToClipboard()" class="btn btn-sm btn-outline-primary ms-2 d-none" title="" data-bs-original-title="Copy to clipboard">Copy</button>
                              </h3>                              
                          </div>
                      </div>

                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">                          
                          <div class="row p-3 pt-5  d-flex justify-content-start align-items-center">
                              <div class="col-md-1 me-3">
                                  <label class="control-label h4 pb-0 mb-0">Password</label>
                              </div>
                              <div class="col-md-4">
                                  <input id="password" class="form-control" type="text" onkeyup="verifyPass()" placeholder="Password">
                              </div>

                              <div class="col-md-1 text-end pe-0" style="margin-left: -40px;">
                                  <label class="control-label h4 pb-0 mb-0" style="text-align: end !important;">Hash</label>
                              </div>

                              <div class="col">
                                  <input id="hash" class="form-control" type="text" onkeyup="verifyPass()" placeholder="Hash">
                              </div>
                              
                              
                          </div>
                          <div class="row p-3">
                              <h3 class="d-flex justify-content-start align-items-center">Result = <code id="verify_result" class="code ms-2 mt-1">null</code> 
                              </h3>                              
                          </div>
                      </div>

                    </div>
              </div>

          </div>

          <div class="row mt-5 pt-5">
              <div class="col-12">
                  <p style="font-size:0.89rem;color:#555;padding-top:50px;">Copyright © <a href="https://codemuseum.net" target="_blank">CodeMuseum</a>. All Rights Reserved. <span>❤️</span> Want to be loving <a href="mailto:ruhul11bd@gmail.cim">sponsor</a>?</p>
              </div>
          </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <script>
        var resultTimeout = null;
        var spinner = '<span class="spinner-border"></span>';
        function inputString() {
            $('#clipboard').addClass('d-none');
            $('#hash_result').html(spinner);

            if (resultTimeout) {
                clearTimeout(resultTimeout);
            }

            resultTimeout = setTimeout(getResult, 300);
        }

        function getResult(){            
            var string    = $('#string').val()
            var algorithm = $('#algorithm').val()
            var generate  = 'generate';

            if( string.length == 0 ){
                $('#hash_result').html('null');
                return;
            }



            $.get('hash.php',{string,algorithm,generate}, function(hash){
                $('#hash_result').html(hash);
                $('#clipboard').removeClass('d-none');
            })
        }

        function copyToClipboard(){
            navigator.clipboard.writeText($('#hash_result').html());
            $('#clipboard').html('📋 Copied!');
            $('#clipboard').addClass('btn-success');
            $('#clipboard').removeClass('btn-outline-primary');

            setTimeout(function() {
                $('#clipboard').focusout();
                $('#clipboard').html('📋 Copy');
                $('#clipboard').removeClass('btn-success');
                $('#clipboard').addClass('btn-outline-primary');
            }, 2000);
        }

        function verifyPass() {
            $('#verify_result').html(spinner);
            var password = $('#password').val()
            var hash     = $('#hash').val()
            var verify   = 'verify';

            if( password.length == 0 || hash.length == 0){
                $('#verify_result').html('null');
                return;
            }

            if (resultTimeout) {
                clearTimeout(resultTimeout);
            }
            resultTimeout = setTimeout(function(){
                $.get('hash.php',{password,hash,verify}, function(hash){
                    $('#verify_result').html(hash);
                })
            }, 300);

        }
      </script>

  </body>
</html>