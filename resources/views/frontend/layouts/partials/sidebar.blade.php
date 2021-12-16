<div id="sidebar" class="span3">
    <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="{{asset('front/themes/images/ico-cart.png')}}" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
    <ul id="sideManu" class="nav nav-tabs nav-stacked">

        <li class="subMenu open"><a> ELECTRONICS [230]</a>

            <ul>
                <li><a class="active" href="{{route('category',['slug'=>'cameras','id'=>2])}}"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
                <li><a href="{{route('category',['slug'=>'computer-tablets-laptop','id'=>3])}}"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
                <li><a href="{{route('category',['slug'=>'mobile_phone','id'=>4])}}"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
                <li><a href="{{route('category',['slug'=>'sound-vision','id'=>5])}}"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
            </ul>
        </li>
        <li class="subMenu"><a> CLOTHES [840] </a>
            <ul style="display:block;">
                <li><a href="{{route('category',['slug'=>'womens_clothing','id'=>7])}}"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                <li><a href="{{route('category',['slug'=>'womens_shoes','id'=>8])}}"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
                <li><a href="{{route('category',['slug'=>'womens_hangs_bags','id'=>9])}}"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
                <li><a href="{{route('category',['slug'=>'mens_clothing','id'=>10])}}"><i class="icon-chevron-right"></i>Men's Clothings (45)</a></li>
                <li><a href="{{route('category',['slug'=>'mens_shoes','id'=>11])}}"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
                <li><a href="{{route('category',['slug'=>'kids_clothing','id'=>12])}}"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
                <li><a href="{{route('category',['slug'=>'kids_shoes','id'=>13])}}"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
            </ul>
        </li>
        <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
            <ul style="display:block;">
                <li><a href="{{route('category',['slug'=>'angoves','id'=>15])}}"><i class="icon-chevron-right"></i>Angoves (35)</a></li>
                <li><a href="{{route('category',['slug'=>'bouchard_aine_fils','id'=>16])}}"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
                <li><a href="{{route('category',['slug'=>'french_rabbit','id'=>17])}}"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
                <li><a href="{{route('category',['slug'=>'louis_bernard','id'=>18])}}"><i class="icon-chevron-right"></i>Louis Bernard (45)</a></li>
                <li><a href="{{route('category',['slug'=>'bib_wine','id'=>19])}}"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
                <li><a href="{{route('category',['slug'=>'other_liquors_wine','id'=>20])}}"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
                <li><a href="{{route('category',['slug'=>'garden','id'=>21])}}"><i class="icon-chevron-right"></i>Garden (3)</a></li>
                <li><a href="{{route('category',['slug'=>'khao_shong','id'=>22])}}"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
            </ul>
        </li>
        <li><a href="{{route('products')}}">HEALTH & BEAUTY [18]</a></li>
        <li><a href="{{route('products')}}">SPORTS & LEISURE [58]</a></li>
        <li><a href="{{route('products')}}">BOOKS & ENTERTAINMENTS [14]</a></li>

    </ul>
    <br />
    <div class="thumbnail">
        <img src="{{asset('front/themes/images/products/panasonic.jpg')}}" alt="Bootshop panasonoc New camera" />
        <div class="caption">
            <h5>Panasonic</h5>
            <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
        </div>
    </div><br />
    <div class="thumbnail">
        <img src="{{asset('front/themes/images/products/kindle.png')}}" title="Bootshop New Kindel" alt="Bootshop Kindel">
        <div class="caption">
            <h5>Kindle</h5>
            <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
        </div>
    </div><br />
    <div class="thumbnail">
        <img src="{{asset('front/themes/images/payment_methods.png')}}" title="Bootshop Payment Methods" alt="Payments Methods">
        <div class="caption">
            <h5>Payment Methods</h5>
        </div>
    </div>
</div>