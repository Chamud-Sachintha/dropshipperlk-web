<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Ogani Template">
	<meta name="keywords" content="Ogani, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ogani | Template</title>

	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="{{asset('inside/css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('inside/css/font-awesome.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('inside/css/elegant-icons.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('inside/css/nice-select.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('inside/css/jquery-ui.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('inside/css/owl.carousel.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('inside/css/slicknav.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('inside/css/style.css')}}" type="text/css">
	<script defer="" referrerpolicy="origin" src="{{asset('inside/js/s.js')}}"></script>
	<script
		nonce="9f4da1ce-4764-47e4-8c06-04834827231b">try { (function (w, d) { !function (bu, bv, bw, bx) { bu[bw] = bu[bw] || {}; bu[bw].executed = []; bu.zaraz = { deferred: [], listeners: [] }; bu.zaraz.q = []; bu.zaraz._f = function (by) { return async function () { var bz = Array.prototype.slice.call(arguments); bu.zaraz.q.push({ m: by, a: bz }) } }; for (const bA of ["track", "set", "debug"]) bu.zaraz[bA] = bu.zaraz._f(bA); bu.zaraz.init = () => { var bB = bv.getElementsByTagName(bx)[0], bC = bv.createElement(bx), bD = bv.getElementsByTagName("title")[0]; bD && (bu[bw].t = bv.getElementsByTagName("title")[0].text); bu[bw].x = Math.random(); bu[bw].w = bu.screen.width; bu[bw].h = bu.screen.height; bu[bw].j = bu.innerHeight; bu[bw].e = bu.innerWidth; bu[bw].l = bu.location.href; bu[bw].r = bv.referrer; bu[bw].k = bu.screen.colorDepth; bu[bw].n = bv.characterSet; bu[bw].o = (new Date).getTimezoneOffset(); if (bu.dataLayer) for (const bH of Object.entries(Object.entries(dataLayer).reduce(((bI, bJ) => ({ ...bI[1], ...bJ[1] })), {}))) zaraz.set(bH[0], bH[1], { scope: "page" }); bu[bw].q = []; for (; bu.zaraz.q.length;) { const bK = bu.zaraz.q.shift(); bu[bw].q.push(bK) } bC.defer = !0; for (const bL of [localStorage, sessionStorage]) Object.keys(bL || {}).filter((bN => bN.startsWith("_zaraz_"))).forEach((bM => { try { bu[bw]["z_" + bM.slice(7)] = JSON.parse(bL.getItem(bM)) } catch { bu[bw]["z_" + bM.slice(7)] = bL.getItem(bM) } })); bC.referrerPolicy = "origin"; bC.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bu[bw]))); bB.parentNode.insertBefore(bC, bB) };["complete", "interactive"].includes(bv.readyState) ? zaraz.init() : bu.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document) } catch (e) { throw fetch("/cdn-cgi/zaraz/t"), e; };</script>
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
                            @forEach ($category_list as $index => $each_category)
                                <li><a href="/category/{{ $category_list[$index]['id'] }}">{{ $category_list[$index]['categoryName'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
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
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	{{-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcrumb__text">
						<h2>Vegetable’s Package</h2>
						<div class="breadcrumb__option">
							<a href="./index.html">Home</a>
							<a href="./index.html">Vegetables</a>
							<span>Vegetable’s Package</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}


	{{-- <section class="product-details spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="product__details__pic">
						<div class="product__details__pic__item">
							<img class="product__details__pic__item--large" src="images/product-details-1.jpg" alt="">
						</div>
						<div class="product__details__pic__slider owl-carousel">
							<img data-imgbigurl="img/product/details/product-details-2.jpg" src="images/thumb-1.jpg"
								alt="">
							<img data-imgbigurl="img/product/details/product-details-3.jpg" src="images/thumb-2.jpg"
								alt="">
							<img data-imgbigurl="img/product/details/product-details-5.jpg" src="images/thumb-3.jpg"
								alt="">
							<img data-imgbigurl="img/product/details/product-details-4.jpg" src="images/thumb-4.jpg"
								alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="product__details__text">
						<h3>Vetgetable’s Package</h3>
						<div class="product__details__rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<span>(18 reviews)</span>
						</div>
						<div class="product__details__price">$50.00</div>
						<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
							vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
							quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
						<div class="product__details__quantity">
							<div class="quantity">
								<div class="pro-qty">
									<input type="text" value="1">
								</div>
							</div>
						</div>
						<a href="#" class="primary-btn">ADD TO CARD</a>
						<a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
						<ul>
							<li><b>Availability</b> <span>In Stock</span></li>
							<li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
							<li><b>Weight</b> <span>0.5 kg</span></li>
							<li><b>Share on</b>
								<div class="share">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="product__details__tab">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
									aria-selected="true">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
									aria-selected="false">Information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
									aria-selected="false">Reviews
									<span>(1)</span></a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tabs-1" role="tabpanel">
								<div class="product__details__tab__desc">
									<h6>Products Infomation</h6>
									<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
										Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
										suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
										vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
										Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
										accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
										pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
										elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
										et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
										vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
									<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
										ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
										elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
										porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
										nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
										Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
										porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
										sed sit amet dui. Proin eget tortor risus.</p>
								</div>
							</div>
							<div class="tab-pane" id="tabs-2" role="tabpanel">
								<div class="product__details__tab__desc">
									<h6>Products Infomation</h6>
									<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
										Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
										Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
										sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
										eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
										Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
										sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
										diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
										ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
										Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
										Proin eget tortor risus.</p>
									<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
										ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
										elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
										porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
										nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
								</div>
							</div>
							<div class="tab-pane" id="tabs-3" role="tabpanel">
								<div class="product__details__tab__desc">
									<h6>Products Infomation</h6>
									<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
										Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
										Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
										sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
										eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
										Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
										sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
										diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
										ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
										Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
										Proin eget tortor risus.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}


	<section class="related-product mt-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title related__product__title">
						<h2>Related Product</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@forEach($data as $index => $product)
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="product__item">
							<div class="product__item__pic set-bg" data-setbg="{{ $data[$index]['images'] }}">
								{{-- <ul class="product__item__pic__hover">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-retweet"></i></a></li>
									<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
								</ul> --}}
							</div>
							<div class="product__item__text">
								<h6><a href="#">{{ $data[$index]['productName'] }}</a></h6>
								<h5>$30.00</h5>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>


	<footer class="footer spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer__about">
						<div class="footer__about__logo">
							<a href="./index.html"><img src="images/logo.png" alt=""></a>
						</div>
						<ul>
							<li>Address: 60-49 Road 11378 New York</li>
							<li>Phone: +65 11.188.888</li>
							<li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
									data-cfemail="3058555c5c5f70535f5c5f425c59521e535f5d">[email�&nbsp;protected]</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
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
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer__copyright">
						<div class="footer__copyright__text">
							<p>
								Copyright ©
								<script data-cfasync="false" src="js/email-decode.min.js"></script>
								<script>document.write(new Date().getFullYear());</script>2024 All rights reserved |
								This template is
								made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
									href="https://colorlib.com" target="_blank">Colorlib</a>
							</p>
						</div>
						<div class="footer__copyright__payment"><img src="images/payment-item.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="{{asset('inside/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('inside/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('inside/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('inside/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('inside/js/jquery.slicknav.js')}}"></script>
	<script src="{{asset('inside/js/mixitup.min.js')}}"></script>
	<script src="{{asset('inside/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('inside/js/main.js')}}"></script>

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
		rayid":"851424ec6f7d0a79","version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}"=""
		crossorigin="anonymous"></script>

</body>

</html>