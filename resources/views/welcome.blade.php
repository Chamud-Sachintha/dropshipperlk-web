<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropship.lk</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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


    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            @forEach ($data as $index => $each_category)
                                <li><a href="/category/{{ $data[$index]['id'] }}">{{ $data[$index]['categoryName'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-11">
                <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+94 718858925</h5>
                                <span>support 24/7 time</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ $banner }}">
                       {{-- <div class="hero__text">
                            <span>BEST OFFER</span>
                            <h2>ITEM NAME <br>Precntage%</h2>
                            <p>Additionl</p>
                            <a href="#" class="primary-btn">BUY NOW</a> --}}
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>


     <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @forEach ($top_category_list as $index => $category)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                                <h5><a href="#">{{ $top_category_list[$index]['categoryName'] }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> 


    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @forEach ($data as $index => $each_category)
                            <li><a href="/category/{{ $data[$index]['id'] }}">{{ $data[$index]['categoryName'] }}</a></li>
                            @endforeach
                        </ul>
                    </div> 
                </div>
            </div>
            <div class="row featured__filter">
            @foreach ($featured_list as $index => $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ $product['images'] }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a  onclick="addToCart('{{ $product['id'] }}', '{{ $product['productName'] }}', '{{ $product['productPrice'] }}', {{ $product['productweigth'] }} )"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                        <h6><a href="#">{{ $product['productName'] }}</a></h6>
                            <h5>Rs.{{ $product['productPrice'] }}.00</h5>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>


   <!--  <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="images/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="images/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="images/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 


     <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="images/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="images/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="images/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
   
    function addToCart(id, productName, productPrice, productweigth) {
        
        let cart = JSON.parse(localStorage.getItem('tempCart')) || [];

       
        cart.push({
            productId: id,
            productName: productName,
            productPrice: productPrice,
            productweigth: productweigth
        });

       
        localStorage.setItem('tempCart', JSON.stringify(cart));

       
        let cartCount = cart.length;
        updateCartCount();

       
    }

    
    window.addEventListener('beforeunload', function () {
       
       localStorage.removeItem('tempCart');
    });

    
    function getCartCount() {
        let cart = JSON.parse(localStorage.getItem('tempCart')) || [];
        return cart.length;
    }

    

    function calculateTotalPrice() {
    let cart = JSON.parse(localStorage.getItem('tempCart')) || [];
    let totalPrice = 0;
    let totalWeigth = 0;
    
    for (let item of cart) {
        totalPrice += parseFloat(item.productPrice);
        totalWeigth += parseFloat(item.productweigth);
        console.log('Updating totalWeigth: ' + totalWeigth);
    }

    return { totalPrice: totalPrice, totalWeight: totalWeigth };
}
    
    let totalCount = getCartCount();
    console.log('Total items in cart: ' + totalCount);

    function updateCartCount() {
        let cartCountElement = document.getElementById('cartCount');
        let totalPriceElement = document.getElementById('totalPrice');
        let carttotalPrice = document.getElementById('carttotalPrice');
        let carttotalweigth = document.getElementById('carttotalweigth');


    if (cartCountElement) {
        let totalCount = getCartCount();
        let totalProductPrice = calculateTotalPrice();
        console.log('Updating cart count. New count: ' + totalCount); 
        cartCountElement.textContent = totalCount;
        totalPriceElement.textContent = 'Rs.' + totalProductPrice.totalPrice.toFixed(2); 
        carttotalPrice.value = totalProductPrice.totalPrice.toFixed(2);
        carttotalweigth.value = totalProductPrice.totalWeight.toFixed(2);

    }

   

    
}


</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let viewCartLink = document.getElementById('viewCartLink');
        if (viewCartLink) {
            viewCartLink.addEventListener('click', function (event) {
                event.preventDefault();

                let cart = JSON.parse(localStorage.getItem('tempCart')) || [];
                document.getElementById('cartDataInput').value = JSON.stringify(cart);

               // document.getElementById('cartForm').submit();
            });
        }
    });
</script>
<script>
    document.getElementById('viewCartLink').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('modal')) {
        document.getElementById('modal').style.display = 'none';
    }
});

</script>
<script>
    $(document).ready(function () {
        // Initially, show only the login form
        $('#loginForm').show();
        $('#signupForm').hide();

        // Toggle between login and signup forms on link click
        $('#toggleForms a').on('click', function (e) {
            e.preventDefault();
            console.log("jnj");
            // Toggle visibility of forms
            $('#loginForm, #signupForm').toggle();
        });
    });
</script>

<script>
   $(document).ready(function() {
    $('#signupButton').on('click', function() {
        var formData = {
            Cname: $('#Cname').val(),
            Cemail: $('#Cemail').val(),
            Cpassword: $('#Cpassword').val()
        };
        
        $.ajax({
            type: 'POST',
            url: '{{ route('RejisterCustomer') }}',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                var registrationId = response.registrationId;
                console.log('Registration ID:', registrationId);
                $('#customerId').val(registrationId);
                $('#cartForm').submit();
            },
            error: function(error) {
                // Handle the error
                console.error('AJAX Error:', error);
            }
        });
    });
});


function validateForm() {
    var email = $('#email').val();
    var password = $('#password').val();

    if (email.trim() === '' || password.trim() === '') {
        alert('Please enter both email and password.');
        return;
    }

    $.ajax({
        url: '/Authlogin',
        type: 'POST',
        data: {
            email: email,
            password: password,
            _token: $('input[name="_token"]').val()
        },
        success: function(response) {
            console.log('sad',response);
            if(response == 12){
                $('#customerId').val(response);
                $('#cartForm').submit();
            }
            else{
                alert('Validation failed. Please check your credentials.');
            }
        },
        error: function(error) {
            console.error('Error occurred:', error);
        }
    });
}
</script>

</html>
