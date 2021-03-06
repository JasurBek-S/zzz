<x-app title="Checkout">
    <!-- Page Title (Shop)-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                    class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">Checkout</h1>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-8">
                <!-- Steps-->
                <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
                        <div class="step-progress"><span class="step-count">1</span></div>
                        <div class="step-label"><i class="czi-cart"></i>Cart</div>
                    </a><a class="step-item active current" href="checkout-details.html">
                        <div class="step-progress"><span class="step-count">2</span></div>
                        <div class="step-label"><i class="czi-user-circle"></i>Your details</div>
                    </a><a class="step-item" href="checkout-shipping.html">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="czi-package"></i>Shipping</div>
                    </a><a class="step-item" href="checkout-payment.html">
                        <div class="step-progress"><span class="step-count">4</span></div>
                        <div class="step-label"><i class="czi-card"></i>Payment</div>
                    </a><a class="step-item" href="checkout-review.html">
                        <div class="step-progress"><span class="step-count">5</span></div>
                        <div class="step-label"><i class="czi-check-circle"></i>Review</div>
                    </a></div>
                <!-- Autor info-->
                <div
                    class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-lg mb-grid-gutter">
                    <div class="media align-items-center">
                        <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><span
                                class="badge badge-warning" data-toggle="tooltip" title="Reward points">384</span><img
                                class="rounded-circle" src="img/shop/account/avatar.jpg" alt="Susan Gardner"></div>
                        <div class="media-body pl-3">
                            <h3 class="font-size-base mb-0">Susan Gardner</h3><span
                                class="text-accent font-size-sm">s.gardner@example.com</span>
                        </div>
                    </div><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="account-profile.html"><i
                            class="czi-edit mr-2"></i>Edit profile</a>
                </div>
                <!-- Shipping address-->
                <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-fn">First Name</label>
                            <input class="form-control" type="text" id="checkout-fn">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-ln">Last Name</label>
                            <input class="form-control" type="text" id="checkout-ln">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-email">E-mail Address</label>
                            <input class="form-control" type="email" id="checkout-email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-phone">Phone Number</label>
                            <input class="form-control" type="text" id="checkout-phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-company">Company</label>
                            <input class="form-control" type="text" id="checkout-company">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-country">Country</label>
                            <select class="form-control custom-select" id="checkout-country">
                                <option>Choose country</option>
                                <option>Australia</option>
                                <option>Canada</option>
                                <option>France</option>
                                <option>Germany</option>
                                <option>Switzerland</option>
                                <option>USA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-city">Country</label>
                            <select class="form-control custom-select" id="checkout-city">
                                <option>Choose city</option>
                                <option>Amsterdam</option>
                                <option>Berlin</option>
                                <option>Geneve</option>
                                <option>New York</option>
                                <option>Paris</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-zip">ZIP Code</label>
                            <input class="form-control" type="text" id="checkout-zip">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-address-1">Address 1</label>
                            <input class="form-control" type="text" id="checkout-address-1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-address-2">Address 2</label>
                            <input class="form-control" type="text" id="checkout-address-2">
                        </div>
                    </div>
                </div>
                <h6 class="mb-3 py-3 border-bottom">Billing address</h6>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" checked id="same-address">
                    <label class="custom-control-label" for="same-address">Same as shipping address</label>
                </div>
                <!-- Navigation (desktop)-->
                <div class="d-none d-lg-flex pt-4 mt-3">
                    <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="shop-cart.html"><i
                                class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to
                                Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
                    <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-shipping.html"><span
                                class="d-none d-sm-inline">Proceed to Shipping</span><span
                                class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a>
                    </div>
                </div>
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0">
                <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
                    <div class="widget mb-3">
                        <h2 class="widget-title text-center">Order summary</h2>
                        <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/01.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock
                                        Sneakers</a></h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x
                                        1</span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/02.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City
                                        Backpack</a></h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x
                                        1</span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/03.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a>
                                </h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x
                                        1</span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2"
                                href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/04.jpg"
                                    alt="Product" /></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular
                                        Fit</a></h6>
                                <div class="widget-product-meta"><span
                                        class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x
                                        1</span></div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled font-size-sm pb-2 border-bottom">
                        <li class="d-flex justify-content-between align-items-center"><span
                                class="mr-2">Subtotal:</span><span class="text-right">$265.<small>00</small></span></li>
                        <li class="d-flex justify-content-between align-items-center"><span
                                class="mr-2">Shipping:</span><span class="text-right">???</span></li>
                        <li class="d-flex justify-content-between align-items-center"><span
                                class="mr-2">Taxes:</span><span class="text-right">$9.<small>50</small></span></li>
                        <li class="d-flex justify-content-between align-items-center"><span
                                class="mr-2">Discount:</span><span class="text-right">???</span></li>
                    </ul>
                    <h3 class="font-weight-normal text-center my-4">$274.<small>50</small></h3>
                    <form class="needs-validation" method="post" novalidate>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Promo code" required>
                            <div class="invalid-feedback">Please provide promo code.</div>
                        </div>
                        <button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
                    </form>
                </div>
            </aside>
        </div>
        <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
            <div class="col-lg-8">
                <div class="d-flex pt-4 mt-3">
                    <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="shop-cart.html"><i
                                class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to
                                Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
                    <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-shipping.html"><span
                                class="d-none d-sm-inline">Proceed to Shipping</span><span
                                class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>