<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropship.lk</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script defer="" referrerpolicy="origin" src="js/s.js"></script>
    <script
        nonce="ba09b6d6-b5b9-4c35-a3e4-b885e3f8195f">(function (w, d) { !function (dp, dq, dr, ds) { dp[dr] = dp[dr] || {}; dp[dr].executed = []; dp.zaraz = { deferred: [], listeners: [] }; dp.zaraz.q = []; dp.zaraz._f = function (dt) { return async function () { var du = Array.prototype.slice.call(arguments); dp.zaraz.q.push({ m: dt, a: du }) } }; for (const dv of ["track", "set", "debug"]) dp.zaraz[dv] = dp.zaraz._f(dv); dp.zaraz.init = () => { var dw = dq.getElementsByTagName(ds)[0], dx = dq.createElement(ds), dy = dq.getElementsByTagName("title")[0]; dy && (dp[dr].t = dq.getElementsByTagName("title")[0].text); dp[dr].x = Math.random(); dp[dr].w = dp.screen.width; dp[dr].h = dp.screen.height; dp[dr].j = dp.innerHeight; dp[dr].e = dp.innerWidth; dp[dr].l = dp.location.href; dp[dr].r = dq.referrer; dp[dr].k = dp.screen.colorDepth; dp[dr].n = dq.characterSet; dp[dr].o = (new Date).getTimezoneOffset(); if (dp.dataLayer) for (const dC of Object.entries(Object.entries(dataLayer).reduce(((dD, dE) => ({ ...dD[1], ...dE[1] })), {}))) zaraz.set(dC[0], dC[1], { scope: "page" }); dp[dr].q = []; for (; dp.zaraz.q.length;) { const dF = dp.zaraz.q.shift(); dp[dr].q.push(dF) } dx.defer = !0; for (const dG of [localStorage, sessionStorage]) Object.keys(dG || {}).filter((dI => dI.startsWith("_zaraz_"))).forEach((dH => { try { dp[dr]["z_" + dH.slice(7)] = JSON.parse(dG.getItem(dH)) } catch { dp[dr]["z_" + dH.slice(7)] = dG.getItem(dH) } })); dx.referrerPolicy = "origin"; dx.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dp[dr]))); dw.parentNode.insertBefore(dx, dw) };["complete", "interactive"].includes(dq.readyState) ? zaraz.init() : dp.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="humberger__menu__overlay"></div>
    {{ View::make('header') }}
    <div class="container">
  <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
    Login
  </button>  
</div>
    <!-- Breadcrumb Section End -->
        <section class="login-section">
            <div class="container">
                <div class="global-container">
                    <div class="card login-form">
                    <div class="card-body">
                        <div id="loginForm">
                            <h3 class="card-title text-center">Log in to Dropship.lk</h3>
                                <div class="card-text">
                                    <!--
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                    <form >
                                        <!-- to error: add class "has-danger" -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        
                                        <div class="sign-up">
                                            Don't have an account? <a href="#" onclick="showSignUpForm()">Create One</a>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <div id="signupForm" style="display:none;">
                            <h3 class="card-title text-center">Sign up to Dropship.lk</h3>
                                <div class="card-text">
                                        <!--
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                            <form >
                                                <!-- to error: add class "has-danger" -->
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                
                                                <div class="sign-up">
                                                    Don't have an account? <a href="#" onclick="showSignUpForm()">Create One</a>
                                                </div>
                                            </form>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- Shoping Cart Section End -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: No 291/5 Kuruduwaththa Rd Mampe Piliynadala</li>
                            <li>Phone: +94 718858925</li>
                            <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    >dropshipperik@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright ©
                                <script data-cfasync="false" src="js/email-decode.min.js"></script>
                                <script>document.write(new Date().getFullYear());</script>2024 All rights reserved |
                                This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="images/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
><div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
            <button type="button" class="btn btn-info btn-block btn-round">Login</button>
          </form>
          
          <div class="text-center text-muted delimiter">or use a social network</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        data-cf-beacon="{"
        rayid":"845a9a73e8b2b8a0","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}"=""
        crossorigin="anonymous"></script>
        <script>
        function showSignUpForm() {
            document.getElementById("loginForm").style.display = "none";
            document.getElementById("signupForm").style.display = "block";
        }
    </script>
    <script>
    $(document).ready(function() {$('#loginModal').modal('show');
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    });
    </script>

</body>


</html>