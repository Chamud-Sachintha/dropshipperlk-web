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
    <section class="breadcrumb-section set-bg" style="background-color: #a3c9d7; color: #040404;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="/">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

     <!-- Shoping Cart Section Begin -->
     <section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <form action="/checkout" method="POST" id="checkoutForm">
                        @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $item)
                                <tr>
                                    <td>
                                        <input type="hidden" name="productId[]" value="{{ $item['productId'] }}" />
                                        {{ $item['productName'] }}
                                    </td>
                                    <td>{{ $item['productPrice'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>{{ $item['quantity'] * $item['productPrice'] }}</td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close" id="remove-{{ $item['productId'] }}"></span>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>
                                        <input type="hidden" name="totalWeight" value="{{ $totalWeight }}" />
                                        <input type="hidden" name="totaldata" value="{{ json_encode($data) }}" />
                                        <input type="hidden" name="totalprice" value="{{ $carttotal }}" />
                                        <input type="hidden" name="cartCustomerId" value="{{ $cartCustomerId }}" />
                                        <input type="hidden" name="cartId" id="cartId" value="{{ $cartId }}" />
                                       
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-lg-4">
                    
                </div>
                      
                    </form>
                    <div class="shoping__checkout text-right">
                        <h5>Cart Total</h5>
                        <ul>
                           
                            <li>Total <span>Rs:{{$carttotal}}</span></li>
                        </ul>
                       {{-- <button class="site-btn"  id="proceedToCheckoutBtn" onclick="proceedToCheckout()">PROCEED TO CHECKOUT</button>--}}
                        <button class="site-btn"  id="proceedToCheckoutBtn" onclick="proceed()">PROCEED</button>
                        <div class="container">
 
                        </div>

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

</body>
<script>
    $(document).ready(function() {
        $('.icon_close').click(function() {
            var productId = this.id.split('-')[1];
            var url = '{{ route("remove-from-cart") }}';
            var data = { productId: productId };

            $.ajax({
                url: url,
                type: 'post',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                   
                    location.reload();
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
<script>
    
    function proceed() {
       
        $.ajax({
        type: "POST",
        url: "/proceed",
        data: $('#checkoutForm').serialize(),
        success: function (response) {
            console.log('cart id',response);
            $('#cartId').val(response);
           // proceedToCheckout();
            $('#checkoutForm').submit();
         //   window.location.href = "/checkout";
        },
        error: function (error) {
            console.error(error);
        }
    });
   }
   function proceedToCheckout() {
       
       $.ajax({
           type: "POST",
           url: "/checkout",
           data: $('#checkoutForm').serialize(), 
           success: function (response) {
             
               console.log(response);
             
               window.location.href = "/checkout";
           },
           error: function (error) {
               console.error(error);
           }
       });
   }
</script>

</html>