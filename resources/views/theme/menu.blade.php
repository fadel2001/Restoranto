@extends('theme.master')
@section('title', 'Menu')
@section('menu-active', 'active')

@section('content')

    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                            href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets') }}/img/menu-1.jpg"
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classic Margherita Pizza</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">A crispy thin crust topped with fresh mozzarella,
                                            tomatoes, and basil for a simple yet delicious flavor.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets') }}/img/menu-2.jpg"
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Grilled Ribeye Steak</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Juicy ribeye steak cooked to perfection, served with
                                            creamy mashed potatoes and roasted vegetables.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets') }}/img/menu-3.jpg"
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Creamy Truffle Pasta</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Linguine in a rich truffle cream sauce, topped with
                                            parmesan and fresh parsley for a decadent bite.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets') }}/img/menu-4.jpg"
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Mediterranean Grilled Chicken Salad</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Grilled chicken, crisp greens, olives, and feta, drizzled
                                            with a tangy lemon vinaigrette.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets') }}/img/menu-5.jpg"
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>BBQ Pulled Pork Sandwich</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Slow-cooked pulled pork in smoky BBQ sauce, served on a
                                            toasted brioche bun with coleslaw.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets') }}/img/menu-6.jpg"
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Spicy Tuna Sushi Roll</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Fresh tuna with avocado and cucumber, topped with spicy
                                            mayo and sesame seeds.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets') }}/img/menu-7.jpg"
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Seafood Paella</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Spanish-style rice with mussels, shrimp, and calamari,
                                            cooked with saffron and spices.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-8.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Vegetarian Buddha Bowl </span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">A wholesome mix of quinoa, roasted veggies, chickpeas,
                                            and avocado with tahini dressing.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-1.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Beef Tenderloin</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Succulent beef tenderloin, grilled to your liking and
                                            served with roasted potatoes and seasonal vegetables.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-2.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span> Penne Arrabbiata</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Penne pasta in a spicy tomato sauce, garnished with fresh
                                            basil and parmesan for a fiery kick.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-3.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classic Cheeseburger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Juicy beef patty with melted cheese, lettuce, tomatoes,
                                            and pickles on a toasted bun.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-4.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Shawarma Wrap</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Marinated grilled chicken wrapped with lettuce, tomatoes,
                                            pickles, and garlic sauce in pita bread.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-5.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Shrimp Scampi</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Succulent shrimp sautéed in garlic butter and white wine,
                                            served over a bed of linguine.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-6.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Vegan Power Bowl</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">A hearty bowl of quinoa, kale, roasted sweet potatoes,
                                            and chickpeas with a lemon-tahini dressing.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-7.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Buffalo Wings</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Spicy, tangy chicken wings served with celery sticks and
                                            blue cheese dressing.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-8.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fettuccine Alfredo</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Rich and creamy Alfredo sauce tossed with fettuccine,
                                            topped with parmesan and parsley.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-1.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Greek Salad</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">A refreshing mix of cucumbers, tomatoes, olives, and
                                            feta, drizzled with olive oil and oregano.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-2.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Bacon Cheeseburger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Grilled beef patty topped with crispy bacon, cheddar
                                            cheese, and BBQ sauce on a brioche bun.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-3.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>California Roll</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">A sushi roll with crab, avocado, and cucumber, topped
                                            with sesame seeds.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-4.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span> Chicken Tikka Wrap</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Grilled chicken tikka wrapped with lettuce, onions, and a
                                            mint yogurt sauce in naan bread.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-5.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Lobster Ravioli</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ravioli filled with lobster, tossed in a creamy tomato
                                            sauce with a hint of garlic.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-6.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Avocado Toast</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Fresh avocado spread on toasted sourdough, topped with
                                            cherry tomatoes and a drizzle of olive oil.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-7.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Lamb Chops</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Juicy, grilled lamb chops seasoned with herbs and served
                                            with roasted vegetables and mint sauce.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="{{ asset('assets') }}/img/menu-8.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Double Cheeseburger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Two beef patties stacked with melted cheese, lettuce,
                                            tomatoes, and pickles on a toasted sesame bun.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

@endsection
