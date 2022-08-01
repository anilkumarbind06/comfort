<?php
if(!is_user_logged_in())
{
    wp_redirect(home_url());
    exit();
}

get_header();

get_template_part( 'template-parts/content', 'slider' );

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12
    );

$loop = new WP_Query( $args );

if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();
        $product_array[] = $loop->post;
    endwhile;
} else {
    echo __( 'No products found' );
}

$response = wp_remote_post( 'http://localhost/wordpress/graphql', array(
    'headers'     => array(
        'Content-Type' => 'application/json',
    ),
    'body' => wp_json_encode([
        'query' => '
            {
              products {
                nodes {
                  image {
                    sourceUrl
                  }
                  name
                  productCategories {
                    nodes {
                      name
                    }
                  }
                  id
                  shortDescription
                  ... on SimpleProduct {
                    name
                    price
                    salePrice
                  }
                  ... on VariableProduct {
                    id
                    name
                    price
                    salePrice
                  }
                }
              }
            }
        '
    ]),
));

 
/*if ( is_wp_error( $response ) ) {
    $error_message = $response->get_error_message();
    echo "Something went wrong: $error_message";
} else {
   $qql_product_array = $response['body'];
}*/

$qql_products_json = json_decode($response['body'], JSON_OBJECT_AS_ARRAY);
$qql_products_array = $qql_products_json['data']['products']['nodes'];

get_template_part( 'template-parts/content', 'trending-qqlproducts', $qql_products_array);

wp_reset_postdata();

get_footer(); 
?>