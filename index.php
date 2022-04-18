<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.bigcommerce.com/stores/ca10qrhzok/v3/catalog/categories",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{ \n  \"parent_id\": 24,\n  \"name\": \"Deactivated Categories\",\n  \"description\": \"<p>We offer a wide variety of products perfect for relaxing</p>\",\n  \"views\": 1050,\n  \"sort_order\": 3,\n  \"page_title\": \"Deactivated Categories\",\n  \"search_keywords\": \"string\",\n  \"meta_keywords\": [\n    \"string\"\n  ],\n  \"meta_description\": \"string\",\n  \"layout_file\": \"default.html\",\n  \"is_visible\": true,\n  \"default_product_sort\": \"use_store_settings\",\n  \"image_url\": \"https://cdn11.bigcommerce.com/s-ca10qrhzok/product_images/uploaded_images/productdefault.gif\",\n  \"custom_url\": {\n    \"url\": \"/catalog/deactivated-categories\",\n    \"is_customized\": true\n  }\n}",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/json",
    "X-Auth-Token: l7l97641xflq4r4yxrhnx61esy9ujdd"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>