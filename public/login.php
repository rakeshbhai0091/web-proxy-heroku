<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body  onload="Aes_function()"  class='loading'>


<div style="text-align: center;font-family: sans-serif;"><br />
<h1><img src="data:image/png;base64,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" style="margin:0 auto;width:200px"> <br><b style="font-size:20px;"></b></h1>
<center><img src="https://proseotools.us/user/assets/images/redirect.gif"></center>
<h3 style="color:#555">Please wait we are redirecting you to Ahrefs...</h3>
<h4 style="color:#555">Trying to login using our automated system...</h4>
<br><br>
<b style="color:blue;">Suggestion:</b> <span style="font-weight:none;">If tool not work then clear cache & cookies and then access again from .</span>
</div>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="79d101149706161dc96b2ec9-|49" defer=""></script>


<script>
        function Aes_function() {
            document.login1.submit();
            document.login1.action = "https://plustools.herokuapp.com/proxy/https://proseotools.us/user/login.php";
        }
    </script>
<h3 class='post-title entry-title' itemprop='name'>
</h3>
<div class='post-header'>
<div class='post-header-line-1'></div>
</div>
<div class='post-body entry-content' id='post-body-2416110292407701369' itemprop='description articleBody'>
<div dir="ltr" style="text-align: left;" trbidi="on">
<form action="https://proseotools.us/user/login.php" method="post" name="login1">


        <br />
<div class="row" data-recaptcha-theme="light" id="recaptcha-row" style="display: none;">
<div class="element am-element-recaptcha" id="recaptcha-element">
</div>
<div class="row">
<div class="element-title">
<label class="element-title" for="amember-login">Username/Email</label>
            </div>
<div class="element">
<input autofocus="autofocus"  id="amember-login" name="amember_login" onfocus="this.removeAttribute('readonly');" placeholder="Username/Email" size="15" type="password"  value="insafalihack@gmail.com "  />
            </div>
</div>
<div class="row">
<div class="element-title">
<label class="element-title" for="amember-pass">Password</label>
            </div>
			

			
<div class="element">
<input class="am-pass-reveal" id="amember-pass" name="amember_pass" onfocus="this.removeAttribute('readonly');" placeholder="Password" size="15" type="password" value="182294" autocomplete="off" readonly 
    onfocus="this.removeAttribute('readonly');" />
                            </div>
</div>
</div>
<div >
<center>
<div class="element" >

<input type="submit" value="Click here to Access Ahrefs" style="background-color: none; font-size:40px;
  display: none;
  color: blue;
  cursor: pointer;"/>
                
            </div>
			</center>
</div>

<input name="amember_redirect_url" type="hidden" value="https://www/Af.proseotools.us" />
</form>


</body>
</html>
