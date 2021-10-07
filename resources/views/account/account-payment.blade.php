<x-app title="Account Orders">
    <!-- Add Payment Method-->
    <form class="needs-validation modal fade" method="post" id="add-payment" tabindex="-1" novalidate>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add a payment method</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="custom-control custom-radio mb-4">
                        <input class="custom-control-input" type="radio" id="paypal" name="payment-method">
                        <label class="custom-control-label" for="paypal">PayPal<img
                                class="d-inline-block align-middle ml-2" src="img/card-paypal.png" width="39"
                                alt="PayPal"></label>
                    </div>
                    <div class="custom-control custom-radio mb-4">
                        <input class="custom-control-input" type="radio" id="card" name="payment-method" checked>
                        <label class="custom-control-label" for="card">Credit / Debit card<img
                                class="d-inline-block align-middle ml-2" src="img/cards.png" width="187"
                                alt="Credit card"></label>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                            <div class="invalid-feedback">Please fill in the card number!</div>
                        </div>
                        <div class="form-group col-sm-6">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <div class="invalid-feedback">Please provide name on the card!</div>
                        </div>
                        <div class="form-group col-sm-3">
                            <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                            <div class="invalid-feedback">Please provide card expiration date!</div>
                        </div>
                        <div class="form-group col-sm-3">
                            <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                            <div class="invalid-feedback">Please provide card CVC code!</div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary btn-block mt-0" type="submit">Register this card</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Order Details Modal-->
    <div class="modal fade" id="order-details">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Order No - 34VB5540K83</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body pb-0">
                    <!-- Item-->
                    <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
                        <div class="media d-block d-sm-flex text-center text-sm-left"><a
                                class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html"
                                style="width: 10rem;"><img src="img/shop/cart/01.jpg" alt="Product"></a>
                            <div class="media-body pt-2">
                                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">Women
                                        Colorblock Sneakers</a></h3>
                                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>8.5</div>
                                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>White &amp; Blue
                                </div>
                                <div class="font-size-lg text-accent pt-2">$154.<small>00</small></div>
                            </div>
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Quantity:</div>1
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Subtotal</div>$154.<small>00</small>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="d-sm-flex justify-content-between my-4 pb-3 pb-sm-2 border-bottom">
                        <div class="media d-block d-sm-flex text-center text-sm-left"><a
                                class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html"
                                style="width: 10rem;"><img src="img/shop/cart/02.jpg" alt="Product"></a>
                            <div class="media-body pt-2">
                                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">TH Jeans
                                        City Backpack</a></h3>
                                <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>Tommy Hilfiger
                                </div>
                                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Khaki</div>
                                <div class="font-size-lg text-accent pt-2">$79.<small>50</small></div>
                            </div>
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Quantity:</div>1
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Subtotal</div>$79.<small>50</small>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="d-sm-flex justify-content-between my-4 pb-3 pb-sm-2 border-bottom">
                        <div class="media d-block d-sm-flex text-center text-sm-left"><a
                                class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html"
                                style="width: 10rem;"><img src="img/shop/cart/03.jpg" alt="Product"></a>
                            <div class="media-body pt-2">
                                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">3-Color Sun
                                        Stash Hat</a></h3>
                                <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>The North Face
                                </div>
                                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Pink / Beige / Dark
                                    blue</div>
                                <div class="font-size-lg text-accent pt-2">$22.<small>50</small></div>
                            </div>
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Quantity:</div>1
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Subtotal</div>$22.<small>50</small>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="d-sm-flex justify-content-between my-4">
                        <div class="media d-block d-sm-flex text-center text-sm-left"><a
                                class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html"
                                style="width: 10rem;"><img src="img/shop/cart/04.jpg" alt="Product"></a>
                            <div class="media-body pt-2">
                                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">Cotton Polo
                                        Regular Fit</a></h3>
                                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>42</div>
                                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Light blue</div>
                                <div class="font-size-lg text-accent pt-2">$9.<small>00</small></div>
                            </div>
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Quantity:</div>1
                        </div>
                        <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                            <div class="text-muted mb-2">Subtotal</div>$9.<small>00</small>
                        </div>
                    </div>
                </div>
                <!-- Footer-->
                <div class="modal-footer flex-wrap justify-content-between bg-secondary font-size-md">
                    <div class="px-2 py-1"><span
                            class="text-muted">Subtotal:&nbsp;</span><span>$265.<small>00</small></span></div>
                    <div class="px-2 py-1"><span
                            class="text-muted">Shipping:&nbsp;</span><span>$22.<small>50</small></span></div>
                    <div class="px-2 py-1"><span class="text-muted">Tax:&nbsp;</span><span>$9.<small>50</small></span>
                    </div>
                    <div class="px-2 py-1"><span class="text-muted">Total:&nbsp;</span><span
                            class="font-size-lg">$297.<small>00</small></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title (Shop)-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                    class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Payment methods</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">My payment methods</h1>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-3">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0">
                @include('components.account-sidebar')
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
                    <h6 class="font-size-base text-light mb-0">Primary payment method is used by default</h6><a
                        class="btn btn-primary btn-sm" href="account-signin.html"><i class="czi-sign-out mr-2"></i>Sign
                        out</a>
                </div>
                <!-- Payment methods list-->
                <div class="table-responsive font-size-md">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Your credit / debit cards</th>
                                <th>Name on card</th>
                                <th>Expires on</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 align-middle">
                                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png"
                                            width="39" alt="Visa">
                                        <div class="media-body"><span
                                                class="font-weight-medium text-heading mr-1">Visa</span>ending in
                                            4999<span class="align-middle badge badge-info ml-2">Primary</span></div>
                                    </div>
                                </td>
                                <td class="py-3 align-middle">Susan Gardner</td>
                                <td class="py-3 align-middle">08 / 2019</td>
                                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#"
                                        data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a
                                        class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                        title="Remove">
                                        <div class="czi-trash"></div>
                                    </a></td>
                            </tr>
                            <tr>
                                <td class="py-3 align-middle">
                                    <div class="media align-items-center"><img class="mr-2" src="img/card-master.png"
                                            width="39" alt="MesterCard">
                                        <div class="media-body"><span
                                                class="font-weight-medium text-heading mr-1">MasterCard</span>ending in
                                            0015</div>
                                    </div>
                                </td>
                                <td class="py-3 align-middle">Susan Gardner</td>
                                <td class="py-3 align-middle">11 / 2021</td>
                                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#"
                                        data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a
                                        class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                        title="Remove">
                                        <div class="czi-trash"></div>
                                    </a></td>
                            </tr>
                            <tr>
                                <td class="py-3 align-middle">
                                    <div class="media align-items-center"><img class="mr-2" src="img/card-paypal.png"
                                            width="39" alt="PayPal">
                                        <div class="media-body"><span
                                                class="font-weight-medium text-heading mr-1">PayPal</span>s.gardner@example.com
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 align-middle">&mdash;</td>
                                <td class="py-3 align-middle">&mdash;</td>
                                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#"
                                        data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a
                                        class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                        title="Remove">
                                        <div class="czi-trash"></div>
                                    </a></td>
                            </tr>
                            <tr>
                                <td class="py-3 align-middle">
                                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png"
                                            width="39" alt="Visa">
                                        <div class="media-body"><span
                                                class="font-weight-medium text-heading mr-1">Visa</span>ending in 6073
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 align-middle">Susan Gardner</td>
                                <td class="py-3 align-middle">09 / 2021</td>
                                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#"
                                        data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a
                                        class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                        title="Remove">
                                        <div class="czi-trash"></div>
                                    </a></td>
                            </tr>
                            <tr>
                                <td class="py-3 align-middle">
                                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png"
                                            width="39" alt="Visa">
                                        <div class="media-body"><span
                                                class="font-weight-medium text-heading mr-1">Visa</span>ending in 9791
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 align-middle">Susan Gardner</td>
                                <td class="py-3 align-middle">05 / 2021</td>
                                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#"
                                        data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a
                                        class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                        title="Remove">
                                        <div class="czi-trash"></div>
                                    </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="pb-4">
                <div class="text-sm-right"><a class="btn btn-primary" href="#add-payment" data-toggle="modal">Add
                        payment method</a></div>
            </section>
        </div>
    </div>
</x-app>