<?php
include_once './core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $minPrice = get_products_min_price();
    $maxPrice = get_products_max_price();
    $price = array(
        'minPrice' => $minPrice,
        'maxPrice' => $maxPrice,
    );
    if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) {
        $price = array(
            'minPrice' => intval($_GET['minPrice']),
            'maxPrice' => intval($_GET['maxPrice']),
        );
    }
    if (isset($_GET['removePrice'])) {
        header('location: category.php');
    }

    // var_dump($price). die();

    $productPriceFilter = get_products_by_price($price);
    // var_dump($productPriceFilter) . die();

    $page = 1;
    if (isset($_GET['page'])) {
        $page = intval($_GET['page']) > 0 ? intval($_GET['page']) : 1;
    }

    if (isset($_GET['orderBy'])) {
        switch ($_GET['orderBy']) {
            case 'latest':
                $productList = get_products_by_page_sort_latest($page);
                break;
            case 'ascending':
                $productList = get_products_by_page_sort_price_asc($page);
                break;
            case 'descending':
                $productList = get_products_by_page_sort_price_desc($page);
                break;

            default:
                # code...
                break;
        }
    } else {
        $productList = get_products_by_page_sort_latest($page);
    }


    include_once './view/_category.php';
}
