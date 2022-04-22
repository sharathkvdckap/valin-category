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
  CURLOPT_POSTFIELDS => "{ \n  \"parent_id\": 494,\n  \"name\": \"AC Voltage Transducers\",\n  \"description\": \"\",\n  \"views\": 1050,\n  \"sort_order\": 0,\n  \"page_title\": \"AC Voltage Transducers\",\n  \"search_keywords\": \"\",\n  \"meta_keywords\": [\n    \"\"\n  ],\n  \"meta_description\": \"\",\n  \"layout_file\": \"default.html\",\n  \"is_visible\": true,\n  \"default_product_sort\": \"use_store_settings\",\n  \"image_url\": \"https://cdn11.bigcommerce.com/s-ca10qrhzok/product_images/uploaded_images/productdefault.gif\",\n  \"custom_url\": {\n    \"url\": \"/products/deactivated-categories/manufacturers/nk-technologies/voltage-transducers/AC-voltage-transducers\",\n    \"is_customized\": true\n  }\n}",
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