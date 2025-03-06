
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="login-pf">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="noindex, nofollow">

            <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>Sign in to hris</title>
    <link rel="icon" href="/auth/resources/yj3cj/login/keycloak/img/favicon.ico" />
            <link href="1.css" rel="stylesheet" /> 
            <link href="2.css" rel="stylesheet" /> 
            <link href="3.css" rel="stylesheet" /> 
            <link href="4.css" rel="stylesheet" /> 
            <link href="5.css" rel="stylesheet" /> 
            <link href="6.css" rel="stylesheet" /> 
            <link href="7.css" rel="stylesheet" /> 
</head>

<body class="">
<div class="login-pf-page">
    <div id="kc-header" class="login-pf-page-header">
        <div id="kc-header-wrapper"
             class="">hris</div>
    </div>
    <div class="card-pf">
        <header class="login-pf-header">
                <h1 id="kc-page-title"> Sign in to your account

</h1>
      </header>
      <div id="kc-content">
        <div id="kc-content-wrapper">


    <div id="kc-form">
      <div id="kc-form-wrapper">

            <!-- original form perimiters 
            
            <form id="kc-form-login" onsubmit="login.disabled = true; return true;" action="https://keycloak.catsecurity.com.ph/auth/realms/hris/login-actions/authenticate?session_code=SMfpcfOOzQVuquvUXVKlJDe_NblBY07z7Yi_8lFLkLw&amp;execution=96b461dd-1f69-4c7c-ae4f-a5cae4b4179e&amp;client_id=web&amp;tab_id=T-q-9BIlHlc" method="post"> 

            -->

            <!-- replaced action="#" to disable form submission; modify to suit Your needs -->

            <form id="kc-form-login" onsubmit="login.disabled = true; return true;" action="#" method="post">
                <div class="form-group">
                    <label for="username" class="pf-c-form__label pf-c-form__label-text">Username</label>

                        <input tabindex="1" id="username" class="pf-c-form-control" name="username" value=""  type="text" autofocus autocomplete="off"
                               aria-invalid=""
                        />

                </div>

                <div class="form-group">
                    <label for="password" class="pf-c-form__label pf-c-form__label-text">Password</label>

                    <input tabindex="2" id="password" class="pf-c-form-control" name="password" type="password" autocomplete="off"
                           aria-invalid=""
                    />
                </div>

                <div class="form-group login-pf-settings">
                    <div id="kc-form-options">
                        </div>
                        <div class="">


                                <!-- original href perimiter 

                                <span><a tabindex="5" href="/auth/realms/hris/login-actions/reset-credentials?client_id=web&amp;tab_id=T-q-9BIlHlc">Forgot Password?</a></span> 

                                --> 

                                <!-- replaced action="#" to disable form submission -->
                                <span><a tabindex="5" href="#">Forgot Password?</a></span>
                        </div>

                  </div>

                  <div id="kc-form-buttons" class="form-group">
                      <input type="hidden" id="id-hidden-input" name="credentialId" />
                      <input tabindex="4" class="pf-c-button pf-m-primary pf-m-block btn-lg" name="login" id="kc-login" type="submit" value="Sign In"/>
                  </div>
            </form>
        </div>


    </div>



        </div>
      </div>

    </div>
  </div>
</body>
</html>
