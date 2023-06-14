<?php

class ItemController {
    private $itemModel;

    public function __construct($itemModel) {
        $this->itemModel = $itemModel;
    }

    public function addItemsFromAPI() {
        $url = "https://api.mercadolibre.com/sites/MLA/search?q=chromecast&limit=50";
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        foreach ($data['results'] as $result) {
            $this->itemModel->insertItem($result);
        }
    }
}
