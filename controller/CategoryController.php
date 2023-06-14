<?php
 

class CategoryController {
    private $model;

    public function __construct($dbConnection) {
        $this->model = new CategoryModel($dbConnection);
    }

    public function createCategory($data) {
        $this->model->insertCategory($data);
    }
}
?>
