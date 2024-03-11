<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
      {{--   <a href="/"><img src="../images/DROPSHIPPER.png" alt=""></a> --}}
        <p>Dropshipper LK</p>
    </div>
    {{-- <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div> --}}
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="images/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./">Homfe</a></li>
            <li><a href="./shop-grid.html">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                    >dropshipperik@gmail.com</a></li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>


<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> <a href="/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    >dropshipperik@gmail.com</a>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="images/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                     <a href="/"><img src="images/DROPSHIPPER.png" alt=""></a> 
                    {{--<h3>Dropshipper.LK</h3>--}}
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/AboutUs">About Us</a></li>
                    {{--    <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Contact</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="./blog.html">Blog</a></li> --}}
                        {{-- <li><a href="./contact.html">Contact</a></li> --}}
                    </ul>
                </nav>
            </div>
             <div class="col-lg-3">
            <form id="cartForm" action="{{ route('view_cart') }}" method="post">
                            @csrf
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        
                            <input type="hidden" name="cartData" id="cartDataInput">
                            <input type="hidden" name="carttotalPrice" id="carttotalPrice">
                            <input type="hidden" name="carttotalweigth" id="carttotalweigth">
                            <input type="hidden" name="customerId" id="customerId">
                            <button type="submit" id="viewCartLink">
                                <i class="fa fa-shopping-bag"></i> <span id="cartCount">0</span>
                            </button>
                       


                    </ul>
                    <div class="header__cart__price">item:<span id="totalPrice">Rs.0.00</span></div>
                </div>
                </form>
            </div> 
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="loginForm" class="hidden">

        <form id="loginForm">
            @csrf
            <div class="checkout__form">
                <h4>Login / Sign Up</h4>
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__input">
                            <p>Email<span>*</span></p>
                            <input type="text" id="email"> <!-- Add ID for email -->
                        </div>
                        <div class="checkout__input">
                            <p>Password<span>*</span></p>
                            <input type="text" id="password"> <!-- Add ID for password -->
                        </div>
                    </div>
                </div>
                <button type="button" onclick="validateForm()" class="site-btn">PLACE ORDER</button>
            </div>
        </form>
        <p id="toggleForms">Don't have an account? <a href="#" id="toggleForms">Sign up now</a></p>
        </div>
        <div id="signupForm" class="hidden">
        <form >
            @csrf
            <div class="checkout__form">
                <h4>Sign Up</h4>  
                    <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                        <p>Name<span>*</span></p>
                                        <input type="text" name="Cname" id="Cname">
                                    </div>
                                </div>

                            </div>
                            <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="Cemail" id="Cemail" >
                                </div>
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="password" class="checkout__input__add" name="Cpassword" id="Cpassword">
                            </div>
                            <button type="button"  class="site-btn" id="signupButton">SIGN UP</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
</div>