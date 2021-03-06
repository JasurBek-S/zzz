<x-app title="">
    <!-- Page Title (Shop Alt)-->
    <!-- used for shop templates with filters on top-->
    <div class="bg-dark pt-4 pb-5">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
            <div class="d-lg-flex justify-content-between pb-3">
                <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                    <nav aria-label="breadcrumb">
                        <ol
                            class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                        class="czi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                            </li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">List filters on top</li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                    <h1 class="h3 text-light mb-0">Shop list filters on top</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
        <!-- Toolbar-->
        <div class="bg-light box-shadow-lg rounded-lg p-4 mt-n5 mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="dropdown mr-2"><a class="btn btn-outline-secondary dropdown-toggle" href="#shop-filters"
                        data-toggle="collapse"><i class="czi-filter mr-2"></i>Filters</a></div>
                <div class="d-flex"><a class="nav-link-style mr-3" href="#"><i class="czi-arrow-left"></i></a><span
                        class="font-size-md">1 / 5</span><a class="nav-link-style ml-3" href="#"><i
                            class="czi-arrow-right"></i></a></div>
                <div class="d-none d-sm-flex"><a class="btn btn-icon nav-link-style mr-2" href="{{ url('shop') }}"><i
                            class="czi-view-grid"></i></a><a
                        class="btn btn-icon nav-link-style bg-primary text-light disabled opacity-100" href="{{ url('shop?list') }}"><i
                            class="czi-view-list"></i></a></div>
            </div>
            <!-- Toolbar with expandable filters-->
            <div class="collapse" id="shop-filters">
                <div class="row pt-4">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Categories-->
                        <div class="card mb-grid-gutter">
                            <div class="card-body px-4">
                                <div class="widget widget-categories">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="accordion mt-n1" id="shop-categories">
                                        <!-- Shoes-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="accordion-heading"><a class="collapsed" href="#shoes"
                                                        role="button" data-toggle="collapse" aria-expanded="false"
                                                        aria-controls="shoes">Shoes<span
                                                            class="accordion-indicator"></span></a></h3>
                                            </div>
                                            <div class="collapse" id="shoes" data-parent="#shop-categories">
                                                <div class="card-body">
                                                    <div class="widget widget-links cz-filter">
                                                        <div class="input-group-overlay input-group-sm mb-2">
                                                            <input
                                                                class="cz-filter-search form-control form-control-sm appended-form-control"
                                                                type="text" placeholder="Search">
                                                            <div class="input-group-append-overlay"><span
                                                                    class="input-group-text"><i
                                                                        class="czi-search"></i></span></div>
                                                        </div>
                                                        <ul class="widget-list cz-filter-list pt-1"
                                                            style="height: 12rem;" data-simplebar
                                                            data-simplebar-auto-hide="false">
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">View
                                                                        all</span><span
                                                                        class="font-size-xs text-muted ml-3">1,953</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Pumps
                                                                        &amp; High Heels</span><span
                                                                        class="font-size-xs text-muted ml-3">247</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Ballerinas &amp;
                                                                        Flats</span><span
                                                                        class="font-size-xs text-muted ml-3">156</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Sandals</span><span
                                                                        class="font-size-xs text-muted ml-3">310</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Sneakers</span><span
                                                                        class="font-size-xs text-muted ml-3">402</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Boots</span><span
                                                                        class="font-size-xs text-muted ml-3">393</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Ankle
                                                                        Boots</span><span
                                                                        class="font-size-xs text-muted ml-3">50</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Loafers</span><span
                                                                        class="font-size-xs text-muted ml-3">93</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Slip-on</span><span
                                                                        class="font-size-xs text-muted ml-3">122</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Flip
                                                                        Flops</span><span
                                                                        class="font-size-xs text-muted ml-3">116</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Clogs
                                                                        &amp; Mules</span><span
                                                                        class="font-size-xs text-muted ml-3">24</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Athletic
                                                                        Shoes</span><span
                                                                        class="font-size-xs text-muted ml-3">31</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Oxfords</span><span
                                                                        class="font-size-xs text-muted ml-3">9</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Smart
                                                                        Shoes</span><span
                                                                        class="font-size-xs text-muted ml-3">18</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Clothing-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="accordion-heading"><a href="#clothing" role="button"
                                                        data-toggle="collapse" aria-expanded="true"
                                                        aria-controls="clothing">Clothing<span
                                                            class="accordion-indicator"></span></a></h3>
                                            </div>
                                            <div class="collapse show" id="clothing" data-parent="#shop-categories">
                                                <div class="card-body">
                                                    <div class="widget widget-links cz-filter">
                                                        <div class="input-group-overlay input-group-sm mb-2">
                                                            <input
                                                                class="cz-filter-search form-control form-control-sm appended-form-control"
                                                                type="text" placeholder="Search">
                                                            <div class="input-group-append-overlay"><span
                                                                    class="input-group-text"><i
                                                                        class="czi-search"></i></span></div>
                                                        </div>
                                                        <ul class="widget-list cz-filter-list pt-1"
                                                            style="height: 12rem;" data-simplebar
                                                            data-simplebar-auto-hide="false">
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">View
                                                                        all</span><span
                                                                        class="font-size-xs text-muted ml-3">2,548</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Blazers
                                                                        &amp; Suits</span><span
                                                                        class="font-size-xs text-muted ml-3">235</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Blouses</span><span
                                                                        class="font-size-xs text-muted ml-3">410</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Cardigans
                                                                        &amp; Jumpers</span><span
                                                                        class="font-size-xs text-muted ml-3">107</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Dresses</span><span
                                                                        class="font-size-xs text-muted ml-3">93</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Hoodie
                                                                        &amp; Sweatshirts</span><span
                                                                        class="font-size-xs text-muted ml-3">122</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Jackets
                                                                        &amp; Coats</span><span
                                                                        class="font-size-xs text-muted ml-3">116</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Jeans</span><span
                                                                        class="font-size-xs text-muted ml-3">215</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Lingerie</span><span
                                                                        class="font-size-xs text-muted ml-3">150</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Maternity
                                                                        Wear</span><span
                                                                        class="font-size-xs text-muted ml-3">8</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Nightwear</span><span
                                                                        class="font-size-xs text-muted ml-3">26</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Shirts</span><span
                                                                        class="font-size-xs text-muted ml-3">164</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Shorts</span><span
                                                                        class="font-size-xs text-muted ml-3">147</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Socks
                                                                        &amp; Tights</span><span
                                                                        class="font-size-xs text-muted ml-3">139</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Sportswear</span><span
                                                                        class="font-size-xs text-muted ml-3">65</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Swimwear</span><span
                                                                        class="font-size-xs text-muted ml-3">18</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">T-shirts
                                                                        &amp; Vests</span><span
                                                                        class="font-size-xs text-muted ml-3">209</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Tops</span><span
                                                                        class="font-size-xs text-muted ml-3">132</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Trousers</span><span
                                                                        class="font-size-xs text-muted ml-3">105</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Underwear</span><span
                                                                        class="font-size-xs text-muted ml-3">87</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bags-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="accordion-heading"><a class="collapsed" href="#bags"
                                                        role="button" data-toggle="collapse" aria-expanded="false"
                                                        aria-controls="bags">Bags<span
                                                            class="accordion-indicator"></span></a></h3>
                                            </div>
                                            <div class="collapse" id="bags" data-parent="#shop-categories">
                                                <div class="card-body">
                                                    <div class="widget widget-links cz-filter">
                                                        <div class="input-group-overlay input-group-sm mb-2">
                                                            <input
                                                                class="cz-filter-search form-control form-control-sm appended-form-control"
                                                                type="text" placeholder="Search">
                                                            <div class="input-group-append-overlay"><span
                                                                    class="input-group-text"><i
                                                                        class="czi-search"></i></span></div>
                                                        </div>
                                                        <ul class="widget-list cz-filter-list pt-1"
                                                            style="height: 12rem;" data-simplebar
                                                            data-simplebar-auto-hide="false">
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">View
                                                                        all</span><span
                                                                        class="font-size-xs text-muted ml-3">801</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Handbags</span><span
                                                                        class="font-size-xs text-muted ml-3">238</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Backpacks</span><span
                                                                        class="font-size-xs text-muted ml-3">116</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Wallets</span><span
                                                                        class="font-size-xs text-muted ml-3">104</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Luggage</span><span
                                                                        class="font-size-xs text-muted ml-3">115</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Lumbar
                                                                        Packs</span><span
                                                                        class="font-size-xs text-muted ml-3">17</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Duffle
                                                                        Bags</span><span
                                                                        class="font-size-xs text-muted ml-3">9</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Bag /
                                                                        Travel Accessories</span><span
                                                                        class="font-size-xs text-muted ml-3">93</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Diaper
                                                                        Bags</span><span
                                                                        class="font-size-xs text-muted ml-3">5</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Lunch
                                                                        Bags</span><span
                                                                        class="font-size-xs text-muted ml-3">8</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Messenger
                                                                        Bags</span><span
                                                                        class="font-size-xs text-muted ml-3">2</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Laptop
                                                                        Bags</span><span
                                                                        class="font-size-xs text-muted ml-3">31</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span
                                                                        class="cz-filter-item-text">Briefcases</span><span
                                                                        class="font-size-xs text-muted ml-3">45</span></a>
                                                            </li>
                                                            <li class="widget-list-item cz-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span class="cz-filter-item-text">Sport
                                                                        Bags</span><span
                                                                        class="font-size-xs text-muted ml-3">18</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sunglasses-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="accordion-heading"><a class="collapsed" href="#sunglasses"
                                                        role="button" data-toggle="collapse" aria-expanded="false"
                                                        aria-controls="sunglasses">Sunglasses<span
                                                            class="accordion-indicator"></span></a></h3>
                                            </div>
                                            <div class="collapse" id="sunglasses" data-parent="#shop-categories">
                                                <div class="card-body">
                                                    <div class="widget widget-links">
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>View all</span><span
                                                                        class="font-size-xs text-muted ml-3">1,842</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Fashion Sunglasses</span><span
                                                                        class="font-size-xs text-muted ml-3">953</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Sport Sunglasses</span><span
                                                                        class="font-size-xs text-muted ml-3">589</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Classic Sunglasses</span><span
                                                                        class="font-size-xs text-muted ml-3">300</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Watches-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="accordion-heading"><a class="collapsed" href="#watches"
                                                        role="button" data-toggle="collapse" aria-expanded="false"
                                                        aria-controls="watches">Watches<span
                                                            class="accordion-indicator"></span></a></h3>
                                            </div>
                                            <div class="collapse" id="watches" data-parent="#shop-categories">
                                                <div class="card-body">
                                                    <div class="widget widget-links">
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>View all</span><span
                                                                        class="font-size-xs text-muted ml-3">734</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Fashion Watches</span><span
                                                                        class="font-size-xs text-muted ml-3">572</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Casual Watches</span><span
                                                                        class="font-size-xs text-muted ml-3">110</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Luxury Watches</span><span
                                                                        class="font-size-xs text-muted ml-3">34</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Sport Watches</span><span
                                                                        class="font-size-xs text-muted ml-3">18</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accessories-->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="accordion-heading"><a class="collapsed" href="#accessories"
                                                        role="button" data-toggle="collapse" aria-expanded="false"
                                                        aria-controls="accessories">Accessories<span
                                                            class="accordion-indicator"></span></a></h3>
                                            </div>
                                            <div class="collapse" id="accessories" data-parent="#shop-categories">
                                                <div class="card-body">
                                                    <div class="widget widget-links">
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>View all</span><span
                                                                        class="font-size-xs text-muted ml-3">920</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Belts</span><span
                                                                        class="font-size-xs text-muted ml-3">364</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Hats</span><span
                                                                        class="font-size-xs text-muted ml-3">405</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Jewelry</span><span
                                                                        class="font-size-xs text-muted ml-3">131</span></a>
                                                            </li>
                                                            <li class="widget-list-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="#"><span>Cosmetics</span><span
                                                                        class="font-size-xs text-muted ml-3">20</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Price range-->
                        <div class="card mb-grid-gutter">
                            <div class="card-body px-4">
                                <div class="widget">
                                    <h3 class="widget-title">Price range</h3>
                                    <div class="cz-range-slider" data-start-min="250" data-start-max="680" data-min="0"
                                        data-max="1000" data-step="1">
                                        <div class="cz-range-slider-ui"></div>
                                        <div class="d-flex pb-1">
                                            <div class="w-50 pr-2 mr-2">
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">$</span></div>
                                                    <input class="form-control cz-range-slider-value-min" type="text">
                                                </div>
                                            </div>
                                            <div class="w-50 pl-2">
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">$</span></div>
                                                    <input class="form-control cz-range-slider-value-max" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Filter by Brand-->
                        <div class="card mb-grid-gutter">
                            <div class="card-body px-4">
                                <div class="widget cz-filter">
                                    <h3 class="widget-title">Brand</h3>
                                    <div class="input-group-overlay input-group-sm mb-2">
                                        <input
                                            class="cz-filter-search form-control form-control-sm appended-form-control"
                                            type="text" placeholder="Search">
                                        <div class="input-group-append-overlay"><span class="input-group-text"><i
                                                    class="czi-search"></i></span></div>
                                    </div>
                                    <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;"
                                        data-simplebar data-simplebar-auto-hide="false">
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="adidas">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="adidas">Adidas</label>
                                            </div><span class="font-size-xs text-muted">425</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="ataylor">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="ataylor">Ann Taylor</label>
                                            </div><span class="font-size-xs text-muted">15</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="armani">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="armani">Armani</label>
                                            </div><span class="font-size-xs text-muted">18</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="banana">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="banana">Banana Republic</label>
                                            </div><span class="font-size-xs text-muted">103</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="bilabong">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="bilabong">Bilabong</label>
                                            </div><span class="font-size-xs text-muted">27</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="birkenstock">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="birkenstock">Birkenstock</label>
                                            </div><span class="font-size-xs text-muted">10</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="klein">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="klein">Calvin Klein</label>
                                            </div><span class="font-size-xs text-muted">365</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="columbia">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="columbia">Columbia</label>
                                            </div><span class="font-size-xs text-muted">508</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="converse">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="converse">Converse</label>
                                            </div><span class="font-size-xs text-muted">176</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="dockers">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="dockers">Dockers</label>
                                            </div><span class="font-size-xs text-muted">54</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="fruit">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="fruit">Fruit of the Loom</label>
                                            </div><span class="font-size-xs text-muted">739</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="hanes">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="hanes">Hanes</label>
                                            </div><span class="font-size-xs text-muted">92</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="choo">
                                                <label class="custom-control-label cz-filter-item-text" for="choo">Jimmy
                                                    Choo</label>
                                            </div><span class="font-size-xs text-muted">17</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="levis">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="levis">Levi's</label>
                                            </div><span class="font-size-xs text-muted">361</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="lee">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="lee">Lee</label>
                                            </div><span class="font-size-xs text-muted">264</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="wearhouse">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="wearhouse">Men's Wearhouse</label>
                                            </div><span class="font-size-xs text-muted">75</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="newbalance">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="newbalance">New Balance</label>
                                            </div><span class="font-size-xs text-muted">218</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="nike">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="nike">Nike</label>
                                            </div><span class="font-size-xs text-muted">810</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="navy">
                                                <label class="custom-control-label cz-filter-item-text" for="navy">Old
                                                    Navy</label>
                                            </div><span class="font-size-xs text-muted">147</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="polo">
                                                <label class="custom-control-label cz-filter-item-text" for="polo">Polo
                                                    Ralph Lauren</label>
                                            </div><span class="font-size-xs text-muted">64</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="puma">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="puma">Puma</label>
                                            </div><span class="font-size-xs text-muted">370</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="reebok">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="reebok">Reebok</label>
                                            </div><span class="font-size-xs text-muted">506</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="skechers">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="skechers">Skechers</label>
                                            </div><span class="font-size-xs text-muted">209</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="hilfiger">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="hilfiger">Tommy Hilfiger</label>
                                            </div><span class="font-size-xs text-muted">487</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="armour">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="armour">Under Armour</label>
                                            </div><span class="font-size-xs text-muted">90</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="urban">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="urban">Urban Outfitters</label>
                                            </div><span class="font-size-xs text-muted">152</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="vsecret">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="vsecret">Victoria's Secret</label>
                                            </div><span class="font-size-xs text-muted">238</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="wolverine">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="wolverine">Wolverine</label>
                                            </div><span class="font-size-xs text-muted">29</span>
                                        </li>
                                        <li class="cz-filter-item d-flex justify-content-between align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="wrangler">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="wrangler">Wrangler</label>
                                            </div><span class="font-size-xs text-muted">115</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Filter by Size-->
                        <div class="card mb-grid-gutter">
                            <div class="card-body px-4">
                                <div class="widget cz-filter">
                                    <h3 class="widget-title">Size</h3>
                                    <div class="input-group-overlay input-group-sm mb-2">
                                        <input
                                            class="cz-filter-search form-control form-control-sm appended-form-control"
                                            type="text" placeholder="Search">
                                        <div class="input-group-append-overlay"><span class="input-group-text"><i
                                                    class="czi-search"></i></span></div>
                                    </div>
                                    <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;"
                                        data-simplebar data-simplebar-auto-hide="false">
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-xs">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-xs">XS</label>
                                            </div><span class="font-size-xs text-muted">34</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-s">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-s">S</label>
                                            </div><span class="font-size-xs text-muted">57</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-m">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-m">M</label>
                                            </div><span class="font-size-xs text-muted">198</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-l">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-l">L</label>
                                            </div><span class="font-size-xs text-muted">72</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-xl">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-xl">XL</label>
                                            </div><span class="font-size-xs text-muted">46</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-39">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-39">39</label>
                                            </div><span class="font-size-xs text-muted">112</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-40">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-40">40</label>
                                            </div><span class="font-size-xs text-muted">85</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-41">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-40">41</label>
                                            </div><span class="font-size-xs text-muted">210</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-42">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-42">42</label>
                                            </div><span class="font-size-xs text-muted">57</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-43">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-43">43</label>
                                            </div><span class="font-size-xs text-muted">30</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-44">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-44">44</label>
                                            </div><span class="font-size-xs text-muted">61</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-45">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-45">45</label>
                                            </div><span class="font-size-xs text-muted">23</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-46">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-46">46</label>
                                            </div><span class="font-size-xs text-muted">19</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-47">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-47">47</label>
                                            </div><span class="font-size-xs text-muted">15</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-48">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-48">48</label>
                                            </div><span class="font-size-xs text-muted">12</span>
                                        </li>
                                        <li
                                            class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-49">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-49">49</label>
                                            </div><span class="font-size-xs text-muted">8</span>
                                        </li>
                                        <li class="cz-filter-item d-flex justify-content-between align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="size-50">
                                                <label class="custom-control-label cz-filter-item-text"
                                                    for="size-50">50</label>
                                            </div><span class="font-size-xs text-muted">6</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Filter by Color-->
                        <div class="card mb-grid-gutter">
                            <div class="card-body px-4">
                                <div class="widget">
                                    <h3 class="widget-title">Color</h3>
                                    <div class="d-flex flex-wrap">
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-blue-gray">
                                            <label class="custom-option-label rounded-circle"
                                                for="color-blue-gray"><span class="custom-option-color rounded-circle"
                                                    style="background-color: #b3c8db;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-blue-gray">Blue-gray</label>
                                        </div>
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-burgundy">
                                            <label class="custom-option-label rounded-circle" for="color-burgundy"><span
                                                    class="custom-option-color rounded-circle"
                                                    style="background-color: #ca7295;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-burgundy">Burgundy</label>
                                        </div>
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-teal">
                                            <label class="custom-option-label rounded-circle" for="color-teal"><span
                                                    class="custom-option-color rounded-circle"
                                                    style="background-color: #91c2c3;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-teal">Teal</label>
                                        </div>
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-brown">
                                            <label class="custom-option-label rounded-circle" for="color-brown"><span
                                                    class="custom-option-color rounded-circle"
                                                    style="background-color: #9a8480;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-brown">Brown</label>
                                        </div>
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-coral-red">
                                            <label class="custom-option-label rounded-circle"
                                                for="color-coral-red"><span class="custom-option-color rounded-circle"
                                                    style="background-color: #ff7072;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-coral-red">Coral red</label>
                                        </div>
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-navy">
                                            <label class="custom-option-label rounded-circle" for="color-navy"><span
                                                    class="custom-option-color rounded-circle"
                                                    style="background-color: #696dc8;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-navy">Navy</label>
                                        </div>
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-charcoal">
                                            <label class="custom-option-label rounded-circle" for="color-charcoal"><span
                                                    class="custom-option-color rounded-circle"
                                                    style="background-color: #4e4d4d;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-charcoal">Charcoal</label>
                                        </div>
                                        <div class="custom-control custom-option text-center mb-2 mx-1"
                                            style="width: 4rem;">
                                            <input class="custom-control-input" type="checkbox" id="color-sky-blue">
                                            <label class="custom-option-label rounded-circle" for="color-sky-blue"><span
                                                    class="custom-option-color rounded-circle"
                                                    style="background-color: #8bcdf5;"></span></label>
                                            <label class="d-block font-size-xs text-muted mt-n1"
                                                for="color-sky-blue">Sky blue</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Products list-->
            <section class="col-lg-8 pt-2">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/01.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sneakers
                                &amp; Keds</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Women Colorblock
                                    Sneakers</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size1" id="s-75">
                                        <label class="custom-option-label" for="s-75">7.5</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size1" id="s-80" checked>
                                        <label class="custom-option-label" for="s-80">8</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size1" id="s-85">
                                        <label class="custom-option-label" for="s-85">8.5</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size1" id="s-90">
                                        <label class="custom-option-label" for="s-90">9</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women???s
                                T-shirt</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Cotton Lace
                                    Blouse</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                                    <del class="font-size-sm text-muted">38.<small>50</small></del>
                                </div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i
                                        class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color1" id="white"
                                            checked>
                                        <label class="custom-option-label rounded-circle" for="white"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #eaeaeb;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color1" id="blue">
                                        <label class="custom-option-label rounded-circle" for="blue"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #d1dceb;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color1" id="yellow">
                                        <label class="custom-option-label rounded-circle" for="yellow"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #f4e6a2;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color1" id="pink">
                                        <label class="custom-option-label rounded-circle" for="pink"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #f3dcff;"></span></label>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <select class="custom-select custom-select-sm mr-2" style="max-width: 6rem;">
                                        <option>XS</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                    <button class="btn btn-primary btn-sm" type="button" data-toggle="toast"
                                        data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                        Cart</button>
                                </div>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/03.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women???s
                                Shorts</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Mom High Waist
                                    Shorts</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size2" id="xs">
                                        <label class="custom-option-label" for="xs">XS</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size2" id="s" checked>
                                        <label class="custom-option-label" for="s">S</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size2" id="m">
                                        <label class="custom-option-label" for="m">M</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size2" id="l">
                                        <label class="custom-option-label" for="l">L</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/04.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                href="#">Sportswear</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Women Sports
                                    Jacket</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size3" id="xs2" checked>
                                        <label class="custom-option-label" for="xs2">XS</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size3" id="s2">
                                        <label class="custom-option-label" for="s2">S</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size3" id="m2">
                                        <label class="custom-option-label" for="m2">M</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size3" id="l2">
                                        <label class="custom-option-label" for="l2">L</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"> <a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/05.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men???s
                                Sunglasses</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Polarized
                                    Sunglasses</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-muted font-size-sm">Out of stock</span>
                                </div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm mb-2"
                                    href="shop-single-v1.html">View details</a>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/06.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                href="#">Backpacks</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">TH Jeans City
                                    Backpack</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i
                                        class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color2" id="khaki"
                                            checked>
                                        <label class="custom-option-label rounded-circle" for="khaki"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #97947c;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color2" id="jeans">
                                        <label class="custom-option-label rounded-circle" for="jeans"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #99a8be;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color2" id="white2">
                                        <label class="custom-option-label rounded-circle" for="white2"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #eaeaeb;"></span></label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/07.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women's
                                Swimwear</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Two-Piece Bikini in
                                    Print</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size4" id="xs3" checked>
                                        <label class="custom-option-label" for="xs3">XS</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size4" id="s3">
                                        <label class="custom-option-label" for="s3">S</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size4" id="m3">
                                        <label class="custom-option-label" for="m3">M</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/08.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Kid's
                                Toys</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Soft Panda Teddy
                                    Bear</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$14.<small>99</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/09.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                href="#">Cosmetics</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Metallic Lipstick
                                    (Crimson)</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color2" id="crimson"
                                            checked>
                                        <label class="custom-option-label rounded-circle" for="crimson"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #bd3c82;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color2" id="creamy">
                                        <label class="custom-option-label rounded-circle" for="creamy"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #ebae81;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color2" id="palm">
                                        <label class="custom-option-label rounded-circle" for="palm"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #ca8799;"></span></label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/10.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men???s
                                Accessories</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">5-Pack Multicolor
                                    Bracelets</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/11.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men???s
                                Sandals</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">Soft Footbed
                                    Sandals</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color1" id="blue2"
                                            checked>
                                        <label class="custom-option-label rounded-circle" for="blue2"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #879fb3;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color1" id="brown">
                                        <label class="custom-option-label rounded-circle" for="brown"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #9c6d4a;"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color1" id="black">
                                        <label class="custom-option-label rounded-circle" for="black"><span
                                                class="custom-option-color rounded-circle"
                                                style="background-color: #333333;"></span></label>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <select class="custom-select custom-select-sm mr-2" style="max-width: 6rem;">
                                        <option>9.5</option>
                                        <option>10</option>
                                        <option>10.5</option>
                                        <option>11</option>
                                        <option>11.5</option>
                                    </select>
                                    <button class="btn btn-primary btn-sm" type="button" data-toggle="toast"
                                        data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                        Cart</button>
                                </div>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Product-->
                <div class="card product-card product-list">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="czi-heart"></i></button>
                    <div class="d-sm-flex align-items-center"><a class="product-list-thumb"
                            href="shop-single-v1.html"><img src="img/shop/catalog/12.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men???s
                                Hats</a>
                            <h3 class="product-title font-size-base"><a href="shop-single-v1.html">3-Color Sun Stash
                                    Hat</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="pb-2">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size5" id="s4" checked>
                                        <label class="custom-option-label" for="s4">S</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size5" id="m4">
                                        <label class="custom-option-label" for="m4">M</label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="size5" id="l4">
                                        <label class="custom-option-label" for="l4">L</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm mb-2" type="button" data-toggle="toast"
                                    data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to
                                    Cart</button>
                                <div class="text-left"><a class="nav-link-style font-size-ms" href="#quick-view"
                                        data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-3 mt-3">
                <!-- Pagination-->
                <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a>
                        </li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                        <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                class="page-link">1<span class="sr-only">(current)</span></span></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i
                                    class="czi-arrow-right ml-2"></i></a></li>
                    </ul>
                </nav>
            </section>
            <!-- Sidebar with banners-->
            <aside class="col-lg-4">
                <div class="cz-sidebar-static pt-4 ml-auto">
                    <div class="widget mb-4">
                        <h3 class="widget-title">Popular products</h3>
                        <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/widget/02.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Cap with Appliqu??</a>
                                </h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$15.<small>99</small></span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/widget/01.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Girl's T-shirt with
                                        Motif</a></h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$14.<small>50</small></span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/widget/03.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Leather Platform
                                        Sandals</a></h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$78.<small>00</small></span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/widget/04.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Regular Fit Cotton
                                        Shirt</a></h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$17.<small>99</small></span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/widget/05.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Boy's Shorts with
                                        Print</a></h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$12.<small>40</small></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-size-cover bg-position-center rounded-lg py-5 mb-grid-gutter"
                        style="background-image: url(img/blog/banner-bg.jpg);">
                        <div class="py-5 px-4 text-center">
                            <h5 class="mb-2">Your Add Banner Here</h5>
                            <p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a
                                class="btn btn-info btn-shadow btn-sm" href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="bg-faded-primary rounded-lg overflow-hidden pt-4">
                        <div class="py-4 px-4 text-center">
                            <p class="font-size-sm text-muted mb-2">Converse All Star</p>
                            <h5 class="mb-3">Make Your Day Comfortable</h5><a class="btn btn-primary btn-shadow btn-sm"
                                href="#">Shop Now</a>
                        </div><img src="img/shop/catalog/banner2.jpg" alt="Banner">
                    </div>
                </div>
            </aside>
        </div>
    </div>
</x-app>