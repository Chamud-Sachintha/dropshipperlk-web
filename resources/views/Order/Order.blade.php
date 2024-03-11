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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="/PlaceOrder" method="POST" id="placeorderForm">
                @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="FristName" id="FristName" require>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="LastName" id="" require>
                                    </div>
                                </div>
                            </div>
                           
                           
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" name="Address" id="Address" require>
                            </div>
                            <div class="checkout__input">
                                <p>City<span>*</span></p>
                                <select class="form-control" id="location" name="City" id="City" onchange="enableDisableCityInput()" require>
                                <option value="">Select City</option>
                                    <option value="Colombo-01">Colombo 01 - Colombo Fort</option>
                                    <option value="Colombo-02">Colombo 02 - Slave Island</option>
                                    <option value="Colombo-03">Colombo 03 - Kollupitiya</option>
                                    <option value="Colombo-04">Colombo 04 - Bambalapitiya</option>
                                    <option value="Colombo-05">Colombo 05 - Narahenpita</option>
                                    <option value="Colombo-06">Colombo 06 - Wellawatta</option>
                                    <option value="Colombo-07">Colombo 07 - Kurunduwatta</option>
                                    <option value="Colombo-08">Colombo 08 - Borella</option>
                                    <option value="Colombo-09">Colombo 09 - Dematagoda</option>
                                    <option value="Colombo-10">Colombo 10 - Maradana</option>
                                    <option value="Colombo-11">Colombo 11 - Pettah</option>
                                    <option value="Colombo-12">Colombo 12 - Aluthkade</option>
                                    <option value="Colombo-13">Colombo 13 - Kotahena</option>
                                    <option value="Colombo-14">Colombo 14 - Grandpass</option>
                                    <option value="Colombo-15">Colombo 15 - Mattakkuliya</option>
                                    <option value="outOfColombo">Out of Colombo</option>
                                </select>
                            </div>
                            <div class="checkout__input">
                            </div>
                            <br><br>
                            <div class="checkout__input">
                                <p>City<span></span></p>
                                <input type="text" id="cityInput"  name ="cityInput" disabled>
                            </div>
                            <div class="checkout__input">
                                <p>District<span>*</span></p>
                                <input type="text"  name="District" id="District" require>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Contact No 1<span>*</span></p>
                                        <input type="text" maxlength="10"  name="Contact_1" id="Contact_1" require>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Contact No 2<span>*</span></p>
                                        <input type="text"  maxlength="10" name="Contact_2" id="Contact_2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Payment Method<span>*</span></p>
                                        <select class="form-control" id="paymethord" name="paymethord" onchange="enableDisableSlipInput()" require>
                                        <option value="">-- Select Payment Method</option>
                                        <option value="1">Bank Deposit</option>
                                        <option value="2">Cash On Delivery</option>
                                        <option value="3">KOKO Payment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Bank Slip<span></span></p>
                                        <input type="file" class="form-control" id="Banlslipp"  name="Banlslipp"  disabled >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                               
                                <input  type="hidden" name="total_price" id="total_price" value="{{$TotalPrice}}" />
                                <input  type="hidden" name="total_weigth" id="total_weigth" value="{{$Totalweigth}}" />
                                <input  type="hidden" name="FullAmount" id="FullAmount"  />
                                <input type="hidden" name="totaldatas" value="{{ json_encode($data) }}" />
                                <input type="hidden" name="CartId" value="{{ $CartId }}" />
                                
                                
                                <div class="checkout__order__subtotal">Product total <span>RS.{{$TotalPrice}}</span></div>
                                <div class="checkout__order__subtotal">Delivery Charges <span id="deliverC">RS.00.00</span></div>
                                <div class="checkout__order__total">Total <span id="FullTotal">Rs.00.00</span></div>
                                
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
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
                        <a href="/"><img src="images/DROPSHIPPER.png" alt=""></a>
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
                                <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                    href="www.builtonus.lk" target="_blank">builtonus.lk</a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="images/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

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
    function enableDisableCityInput() {
        var locationSelect = document.getElementById('location');
        var cityInput = document.getElementById('cityInput');
        var totalp = document.getElementById('total_price').value;
        if (locationSelect.value === 'outOfColombo') {
            
            cityInput.removeAttribute('disabled');
            deliverdata();
        }
         else if(locationSelect.value === '') {
           console.log('old price',totalp);
            document.getElementById('deliverC').textContent = 'Rs.00.00';
            document.getElementById('FullTotal').textContent ='Rs.' + totalp;
        }
        else{
            cityInput.setAttribute('disabled', 'disabled');
            cityInput.value = '';
            deliverdata();
        }
    }

    function deliverdata()
    {
        var locationSelect = document.getElementById('location');
    var totalwe = document.getElementById('total_weigth').value;
    var totalp = document.getElementById('total_price').value;

    
    var totalWeigth = totalwe.replace(/\.00$/, '');
    var totalPrice = totalp.replace(/\.00$/, '');

    let default_charge = 300;
    let weight_in_kg = parseFloat(totalWeigth) / 1000; 

    if (weight_in_kg > 1) {
        let remaining = weight_in_kg - 1;
        let round_remaining = Math.ceil(remaining); 

        if (round_remaining > 0) {
            default_charge += round_remaining * 50;
        }
    }

    if (locationSelect.value === 'outOfColombo') {
        default_charge += 50;
    }

    var fullprice = parseFloat(totalPrice) + default_charge; 
    document.getElementById('FullTotal').textContent = 'Rs.' + fullprice.toFixed(2);
    document.getElementById('deliverC').textContent = 'Rs.' + default_charge.toFixed(2);
    document.getElementById('FullAmount').value = fullprice.toFixed(2);
    console.log("full price", default_charge);


    }
</script>


<script>
     function enableDisableSlipInput() {
        var paymethord = document.getElementById('paymethord');
        var Banlslipp = document.getElementById('Banlslipp');

       
        if (paymethord.value === '1') {
           
            Banlslipp.removeAttribute('disabled');
        } else {
            
            Banlslipp.setAttribute('disabled', 'disabled');
            Banlslipp.value = '';
        }
    }
</script>

</body>


</html>