@extends('frontend.layout.main')
@section('main-container')


<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6 col-md-8">
        <div class="inner">
        <ul class="axil-breadcrumb">
        <li class="axil-breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="separator"></li>
        <li class="axil-breadcrumb-item"><a href="{{route('front.shop')}}">Shop</a></li>
        <li class="separator"></li>
        <li class="axil-breadcrumb-item active" aria-current="page">{{$product->title}}</li>
        </ul>
        <h1 class="title">{{$product->title}}</h1>
        </div>
        </div>
        <div class="col-lg-6 col-md-4">
        <div class="inner">
        <div class="bradcrumb-thumb">
        <img src="{{asset('public/frontend/assets/images/product/product-45.png')}}" alt="Image">
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- End Breadcrumb Area  -->
        
    <!-- Start Shop Area  -->
    <div class="axil-single-product-area bg-color-white">
    <div class="single-product-thumb axil-section-gap pb--30 pb_sm--20">
    <div class="container">
    <div class="row row--50">
    <div class="col-lg-6 mb--40">
    <div class="row">
    <div class="col-lg-12">

    <div class="product-large-thumbnail-2 single-product-thumbnail axil-product slick-layout-wrapper--15 axil-slick-arrow arrow-both-side-3">

        @if($product->images)
            @foreach($product->images as $key=> $productImages)

    <div class="thumbnail {{($key == 0) ? 'active' : ''}}" style="height: 700px;">
    {{-- <img src="{{ asset('public/'. $product->images->first()->image_path) }}" alt="Product Images"> --}}
    <img src="{{ asset('public/'. $productImages->image_path) }}" alt="Product Image" >
    </div>

@endforeach
@endif

    </div>

    </div>


    <div class="col-lg-12">

    <div class="small-thumb-wrapper product-small-thumb-2 small-thumb-style-two small-thumb-style-three">
        @if($product->images)
        @foreach($product->images as $key=> $productImages)
    <div class="small-thumb-img {{($key == 0) ? 'active' : ''}} rounded" >
    <img src="{{ asset('public/'. $productImages->image_path) }}" alt="samll-thumb">
    </div>
    @endforeach
    @endif
    
    

    </div>
    </div>


    </div>
    </div>
    <div class="col-lg-6 mb--40">
    <div class="single-product-content">
    <div class="inner">
    <h2 class="product-title">{{$product->title}}</h2>
    <div class="price-amount price-offer-amount">

    <span class="price current-price">${{$product->price}}</span>
    @if ($product->compare_price >0)
    <span class="price old-price">${{$product->compare_price}}</span>
    @endif
    <span class="offer-badge">20% OFF</span>
    </div>
    <div class="product-rating">
    <div class="star-rating">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
    </div>
    <div class="review-link">
    <a href="#">(<span>2</span> customer reviews)</a>
    </div>
    </div>

    <ul class="product-meta">
    <li><i class="fal fa-check"></i>In stock</li>
    <li><i class="fal fa-check"></i>Free delivery available</li>
    <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
    </ul>

    <p class="description mb--40">{!! $product->description !!}</p>
    
    <!-- Start Product Action Wrapper  -->
    <div class="product-action-wrapper d-flex-center">
    
    <!-- Start Product Action  -->
    <ul class="product-action action-style-two d-flex-center mb--0">

    <li class="add-to-cart"><a href="javascript:void(0);" onclick="addToCart({{$product->id}});" class="axil-btn btn-bg-primary">Add to Cart</a></li>

    <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
    </ul>
    <!-- End Product Action  -->
    
    </div>
    <!-- End Product Action Wrapper  -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End .single-product-thumb -->
    
    <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white">
    <div class="container">
    <div class="product-desc-wrapper mb--30 mb_sm--10">
    <h4 class="mb--60 desc-heading">Description</h4>
    <div class="row mb--15">
    <div class="col-lg-6 mb--30">
    <div class="single-desc">
    <h5 class="title">Specifications:</h5>
    <p>{!! htmlspecialchars_decode($product->description) !!}</p>
    </div>
    </div>
    <!-- End .col-lg-6 -->
    <div class="col-lg-6 mb--30">
    <div class="single-desc">
    <h5 class="title">Care & Maintenance:</h5>
    <p>Use warm water to describe us as a product team that creates amazing UI/UX experiences, by crafting top-notch user experience.</p>
    </div>
    </div>
    <!-- End .col-lg-6 -->
    </div>
    <!-- End .row -->
    <div class="row">
    <div class="col-lg-12">
    <ul class="pro-des-features">
    <li class="single-features">
    <div class="icon">
    <img src="{{asset('public/frontend/assets/images/product/product-thumb/icon-3.png')}}" alt="icon">
    </div>
    Easy Returns
    </li>
    <li class="single-features">
    <div class="icon">
    <img src="{{asset('public/frontend/assets/images/product/product-thumb/icon-2.png')}}" alt="icon">
    </div>
    Quality Service
    </li>
    <li class="single-features">
    <div class="icon">
    <img src="{{asset('public/frontend/assets/images/product/product-thumb/icon-1.png')}}" alt="icon">
    </div>
    Original Product
    </li>
    </ul>
    <!-- End .pro-des-features -->
    </div>
    </div>
    <!-- End .row -->
    </div>
    <!-- End .product-desc-wrapper -->
    <div class="additional-info pb--40 pb_sm--20">
    <h4 class="mb--60">Additional Information</h4>
    <div class="product-additional-info">
    <div class="table-responsive">
    <table>
    <tbody>
    <tr>
    <th>Stand Up</th>
    <td>35″L x 24″W x 37-45″H(front to back wheel)</td>
    </tr>
    <tr>
    <th>Folded (w/o wheels) </th>
    <td>32.5″L x 18.5″W x 16.5″H</td>
    </tr>
    <tr>
    <th>Folded (w/ wheels) </th>
    <td>32.5″L x 24″W x 18.5″H</td>
    </tr>
    <tr>
    <th>Door Pass Through </th>
    <td>24</td>
    </tr>
    <tr>
    <th>Frame </th>
    <td>Aluminum</td>
    </tr>
    <tr>
    <th>Weight (w/o wheels) </th>
    <td>20 LBS</td>
    </tr>
    <tr>
    <th>Weight Capacity </th>
    <td>60 LBS</td>
    </tr>
    <tr>
    <th>Width</th>
    <td>24″</td>
    </tr>
    <tr>
    <th>Handle height (ground to handle) </th>
    <td>37-45″</td>
    </tr>
    <tr>
    <th>Wheels</th>
    <td>Aluminum</td>
    </tr>
    <tr>
    <th>Size</th>
    <td>S, M, X, XL</td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    <!-- End .product-additional-info -->
    </div>
    
    <div class="reviews-wrapper">
    <h4 class="mb--60">Reviews</h4>
    <div class="row">
    <div class="col-lg-6 mb--40">
    <div class="axil-comment-area pro-desc-commnet-area">
    <h5 class="title">01 Review for this product</h5>
    <ul class="comment-list">
    <!-- Start Single Comment  -->
    <li class="comment">
    <div class="comment-body">
    <div class="single-comment">
    <div class="comment-img">
    <img src="{{asset('public/frontend/assets/images/blog/author-image-4.png')}}" alt="Author Images">
    </div>
    <div class="comment-inner">
    <h6 class="commenter">
    <a class="hover-flip-item-wrapper" href="#">
    <span class="hover-flip-item">
    <span data-text="Cameron Williamson">Eleanor Pena</span>
    </span>
    </a>
    <span class="commenter-rating ratiing-four-star">
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star empty-rating"></i></a>
    </span>
    </h6>
    <div class="comment-text">
    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ” </p>
    </div>
    </div>
    </div>
    </div>
    </li>
    <!-- End Single Comment  -->
    
    <!-- Start Single Comment  -->
    <li class="comment">
    <div class="comment-body">
    <div class="single-comment">
    <div class="comment-img">
    <img src="{{asset('public/frontend/assets/images/blog/author-image-4.png')}}" alt="Author Images">
    </div>
    <div class="comment-inner">
    <h6 class="commenter">
    <a class="hover-flip-item-wrapper" href="#">
    <span class="hover-flip-item">
    <span data-text="Rahabi Khan">Courtney Henry</span>
    </span>
    </a>
    <span class="commenter-rating ratiing-four-star">
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    </span>
    </h6>
    <div class="comment-text">
    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ”</p>
    </div>
    </div>
    </div>
    </div>
    </li>
    <!-- End Single Comment  -->
    
    <!-- Start Single Comment  -->
    <li class="comment">
    <div class="comment-body">
    <div class="single-comment">
    <div class="comment-img">
    <img src="{{asset('public/frontend/assets/images/blog/author-image-5.png')}}" alt="Author Images">
    </div>
    <div class="comment-inner">
    <h6 class="commenter">
    <a class="hover-flip-item-wrapper" href="#">
    <span class="hover-flip-item">
    <span data-text="Rahabi Khan">Devon Lane</span>
    </span>
    </a>
    <span class="commenter-rating ratiing-four-star">
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    <a href="#"><i class="fas fa-star"></i></a>
    </span>
    </h6>
    <div class="comment-text">
    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ” </p>
    </div>
    </div>
    </div>
    </div>
    </li>
    <!-- End Single Comment  -->
    </ul>
    </div>
    <!-- End .axil-commnet-area -->
    </div>
    <!-- End .col -->
    <div class="col-lg-6 mb--40">
    <!-- Start Comment Respond  -->
    <div class="comment-respond pro-des-commend-respond mt--0">
    <h5 class="title mb--30">Add a Review</h5>
    <p>Your email address will not be published. Required fields are marked *</p>
    <div class="rating-wrapper d-flex-center mb--40">
    Your Rating <span class="require">*</span>
    <div class="reating-inner ml--20">
    <a href="#"><i class="fal fa-star"></i></a>
    <a href="#"><i class="fal fa-star"></i></a>
    <a href="#"><i class="fal fa-star"></i></a>
    <a href="#"><i class="fal fa-star"></i></a>
    <a href="#"><i class="fal fa-star"></i></a>
    </div>
    </div>
    
    <form action="#">
    <div class="row">
    <div class="col-12">
    <div class="form-group">
    <label>Other Notes (optional)</label>
    <textarea name="message" placeholder="Your Comment"></textarea>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    <div class="form-group">
    <label>Name <span class="require">*</span></label>
    <input id="name" type="text">
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    <div class="form-group">
    <label>Email <span class="require">*</span> </label>
    <input id="email" type="email">
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-submit">
    <button type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Send Message</button>
    </div>
    </div>
    </div>
    </form>
    </div>
    <!-- End Comment Respond  -->
    </div>
    <!-- End .col -->
    </div>
    </div>
    <!-- End .reviews-wrapper -->
    </div>
    </div>
    <!-- woocommerce-tabs -->
    
    </div>
    <!-- End Shop Area  -->
    
    <!-- Start Recently Viewed Product Area  -->
    @if(!empty($relatedProducts))
    <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
    <div class="container">
    <div class="section-title-wrapper">
    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Your Recently</span>
    <h2 class="title">Viewed Items</h2>
    </div>
    <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">


        
        {{-- @if(!empty($relatedProducts)) --}}
            @foreach ($relatedProducts as $relProduct )
    <div class="slick-single-layout">
    <div class="axil-product">
    <div class="thumbnail">

        @if($relProduct->images->isNotEmpty())
    <a href="#">

    <img src="{{ asset('public/'. $relProduct->images->first()->image_path) }}" alt="Product Images">
    </a>
    @endif


    <div class="label-block label-right">
    <div class="product-badget">20% OFF</div>
    </div>
    <div class="product-hover-action">
    <ul class="cart-action">
    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
    <li class="select-option"><a href="javascript:void(0);" onclick="addToCart({{$product->id}});">Add to Cart</a></li>
    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="product-content">
    <div class="inner">
    <h5 class="title"><a href="#">{{$relProduct->title}}</a></h5>
    <div class="product-price-variant">
        @if ($relProduct->compare_price >0)
        <span class="price old-price">${{$relProduct->compare_price}}</span>
        @endif

    <span class="price current-price">{{$relProduct->price}}</span>

    </div>
    <div class="color-variant-wrapper">
    <ul class="color-variant">
    <li class="color-extra-01 active"><span><span class="color"></span></span>
    </li>
    <li class="color-extra-02"><span><span class="color"></span></span>
    </li>
    <li class="color-extra-03"><span><span class="color"></span></span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>

    @endforeach
    {{-- @endif   --}}


    <!-- End .slick-single-layout -->
    <!-- End .slick-single-layout -->
    
    </div>
    </div>
    </div>
    @endif 
    <!-- End Recently Viewed Product Area  -->
    <!-- Start Axil Newsletter Area  -->
    <div class="axil-newsletter-area axil-section-gap pt--0">
    <div class="container">
    <div class="etrade-newsletter-wrapper bg_image bg_image--5">
    <div class="newsletter-content">
    <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
    <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
    <div class="input-group newsletter-form">
    <div class="position-relative newsletter-inner mb--15">
    <input placeholder="example@gmail.com" type="text">
    </div>
    <button type="submit" class="axil-btn mb--15">Subscribe</button>
    </div>
    </div>
    </div>
    </div>
    <!-- End .container -->
    </div>
    <!-- End Axil Newsletter Area  -->
    </main>
    {{-- <script>
        function addToCart(id){
            // alert(id);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '{{route("front.addToCart")}}',
                type: 'post',
                data: {id:id,  // Include the CSRF token in the data
                _token: csrfToken},

                dataType: 'json',
                success: function(response){
                        if(response.status == true){
                            window.location.href="{{route('front.cart')}}";
                        }else{
                            alert(response.message);
                        }
                }
            });
        }

    </script> --}}

@endsection

{{-- <script>
    $.ajaxSetup({
headers: {
   'X-CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
</script> --}}