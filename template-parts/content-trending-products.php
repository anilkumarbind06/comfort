<!-- Start Trending Product Area -->
<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Product</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                // var_dump(wc_get_product( 14 )); 
                // var_dump(get_categories( 15 ));
                // var_dump($args); 
            ?>
            <?php if($args): foreach ($args as $key => $value): ?>
            <?php 
                $product = wc_get_product($value->ID);
                $product_category = get_categories($product->get_category_ids()[0]);
                $product_image = wp_get_attachment_url($product->get_image_id());
            ?>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img height="243" width="243" src="<?php echo ($product_image) ? $product_image : 'https://via.placeholder.com/335x335' ?>" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category"><?php echo $product_category[0]->name ?></span>
                        <h4 class="title">
                            <a href="product-grids.html"><?php echo $product->get_name() ?></a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$<?php echo $product->get_price() ?></span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>
<!-- End Trending Product Area -->