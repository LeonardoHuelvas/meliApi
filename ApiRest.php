<?php
$url = "https://api.mercadolibre.com/sites/MLA/search?q=chromecast&limit=50";
$json = file_get_contents($url);
$data = json_decode($json, true);

// Ahora puedes acceder a los datos.
foreach ($data['results'] as $item) {
    echo $item['title'] . "\n";
}
?>
