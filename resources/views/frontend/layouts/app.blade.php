<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'پلتفرم 360 درجه')">
    <meta name="keywords" content="@yield('keywords', 'پلتفرم 360 درجه')">
    <meta name="author" content="Seyed Hadi Ranjbar">
    <link rel="icon" href="assets/images/favicon/2.ico" type="image/x-icon">
    <title>@yield('title', 'پلتفرم 360 درجه')</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.rtl.css">

    <!-- wow css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulk-style.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font.css">
</head>

<body class="theme-color-1">

<!-- Loader Start -->
<div class="fullpage-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- Loader End -->

<!-- Header Start -->
<header class="pb-md-4 pb-0">
    @include('frontend.layouts.header')
</header>
<!-- Header End -->

<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="index.html">
                <i class="iconly-Home icli"></i>
                <span>خانه</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="javascript:void(0)">
                <i class="iconly-Category icli js-link"></i>
                <span>دسته بندی</span>
            </a>
        </li>

        <li>
            <a href="search.html" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>جستجو</span>
            </a>
        </li>

        <li>
            <a href="wishlist.html" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>علاقه‌مندی</span>
            </a>
        </li>

        <li>
            <a href="cart.html">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>سبد خرید</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->

@yield('content')

<!-- Newsletter Section Start -->
<section class="newsletter-section section-b-space">
    <div class="container-fluid-lg">
        <div class="newsletter-box newsletter-box-2 newsletter-box-3">
            <div class="newsletter-contain py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-sm-8 offset-xl-3">
                            <div class="newsletter-detail">
                                <h2>عضویت در خبرنامه ...</h2>
                                <h5>20 درصد تخفیف ویژه با عضویت در خبرنامه</h5>
                                <div class="input-box">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                           placeholder="ایمیل خود را وارد کنید">
                                    <i class="fa-solid fa-envelope arrow"></i>
                                    <button class="sub-btn  btn-animation">
                                        <span class="d-sm-block d-none">عضویت</span>
                                        <i class="fa-solid fa-arrow-left icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->

<!-- Footer Section Start -->
<footer class="section-t-space">
    @include('frontend.layouts.footer')
</footer>
<!-- Footer Section End -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">آدرس خود را انتخاب کنید</h5>
                <p class="mt-1 text-content">آدرس خود را وارد کنید تا ما پیشنهاد را برای منطقه شما مشخص می کنیم.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="محل خود را جستجو کنید">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>انتخاب مکان شما</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>آلاباما</h6>
                                <span>حداقل: 100 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>آریزوانا</h6>
                                <span>حداقل: 150 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>کالیفرنیا</h6>
                                <span>حداقل: 170 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>ایران</h6>
                                <span>حداقل: 150 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>فلوریدا</h6>
                                <span>حداقل: 160 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>جورجیا</h6>
                                <span>حداقل: 110 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>کانزاس</h6>
                                <span>حداقل: 130 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>مینه سوتا</h6>
                                <span>حداقل: 140 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>نیویورک</h6>
                                <span>حداقل: 120 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>واشنگتن</h6>
                                <span>حداقل: 160 تومان</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->

<!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">کیک خامه ای سفید رنگ با روکش قرم 500 گرمی</h4>
                            <h4 class="price">36.000 تومان</h4>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <span class="ms-2">8 بازخورد</span>
                                <span class="ms-2 text-danger">6 عدد در 16 ساعت گذشته فروخته شد</span>
                            </div>

                            <div class="product-detail">
                                <h4>جزئیات محصول :</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            </div>

                            <ul class="brand-list">
                                <li>
                                    <div class="brand-box">
                                        <h5>نام برند :</h5>
                                        <h6>جنگل سیاه</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>کد محصول :</h5>
                                        <h6>W0690034</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>نوع محصول :</h5>
                                        <h6>کیک خامه ای سفید</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="select-size">
                                <h4>اندازه کیک :</h4>
                                <select class="form-select select-form-size">
                                    <option selected>انتخاب وزن</option>
                                    <option value="1.2">1/2 کیلوگرم</option>
                                    <option value="0">1 کیلوگرم</option>
                                    <option value="1.5">1/5 کیلوگرم</option>
                                    <option value="red">با رز های قرمز</option>
                                    <option value="pink">با رزهای صورتی</option>
                                </select>
                            </div>

                            <div class="modal-button">
                                <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">افزودن به سبد خرید</button>
                                <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                    نمایش جزئیات بیشتر</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick View Modal Box End -->


<!-- Cookie Bar Box Start -->
<div class="cookie-bar-box">
    <div class="cookie-box">
        <div class="cookie-image">
            <img src="assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
            <h2>کوکی !</h2>
        </div>

        <div class="cookie-contain">
            <h5 class="text-content">ما از کوکی ها استفاده می کنیم تا تجربه شما را بهبود ببخشیم.</h5>
        </div>
    </div>

    <div class="button-group">
        <button class="btn privacy-button">حریم خصوصی</button>
        <button class="btn ok-button">پذیرفتن</button>
    </div>
</div>
<!-- Cookie Bar Box End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">پرفروش ترین های امروز</h5>
                    <p class="mt-1 text-content">محصولات پیشنهادی برای شما</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="deal-offer-box">
                    <ul class="deal-offer-list">
                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Box Modal End -->

<!-- Add to cart Modal Start -->
<div class="add-cart-box">
    <div class="add-iamge">
        <img src="assets/images/cake/pro/1.jpg" class="img-fluid blur-up lazyload" alt="">
    </div>

    <div class="add-contain">
        <h6>افزودن به سبد خرید</h6>
    </div>
</div>
<!-- Add to cart Modal End -->

<!-- Tap to top start -->
<div class="theme-option">
    <div class="setting-box">
        <button class="btn setting-button">
            <i class="fa-solid fa-gear"></i>
        </button>

        <div class="theme-setting-2">
            <div class="theme-box">
                <ul>
                    <li>
                        <div class="setting-name">
                            <h4>رنگ</h4>
                        </div>
                        <div class="theme-setting-button color-picker">
                            <form class="form-control">
                                <label for="colorPick" class="form-label mb-0">رنگ قالب</label>
                                <input type="color" class="form-control form-control-color" id="colorPick"
                                       value="#0da487" title="Choose your color">
                            </form>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>حالت</h4>
                        </div>
                        <div class="theme-setting-button">
                            <button class="btn btn-2 outline" id="darkButton">تیره</button>
                            <button class="btn btn-2 unline" id="lightButton">روشن</button>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>نوع</h4>
                        </div>
                        <div class="theme-setting-button rtl">
                            <button class="btn btn-2 rtl-unline">چپ چین</button>
                            <button class="btn btn-2 rtl-outline">راست چین</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- latest jquery-->
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- jquery ui-->
<script src="assets/js/jquery-ui.min.js"></script>

<!-- sidebar open js -->
<script src="assets/js/filter-sidebar.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap/popper.min.js"></script>

<!-- feather icon js-->
<script src="assets/js/feather/feather.min.js"></script>
<script src="assets/js/feather/feather-icon.js"></script>

<!-- Lazyload Js -->
<script src="assets/js/lazysizes.min.js"></script>

<!-- Slick js-->
<script src="assets/js/slick/slick.js"></script>
<script src="assets/js/slick/custom_slick.js"></script>
<script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

<!-- Auto Height Js -->
<script src="assets/js/auto-height.js"></script>

<!-- Timer Js -->
<script src="assets/js/timer.js"></script>

<!-- Fly Cart Js -->
<script src="assets/js/fly-cart.js"></script>

<!-- Quantity js -->
<script src="assets/js/quantity-2.js"></script>

<!-- WOW js -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom-wow.js"></script>

<!-- script js -->
<script src="assets/js/script.js"></script>

<!-- thme setting js -->
<script src="assets/js/theme-setting.js"></script>
</body>

</html>
