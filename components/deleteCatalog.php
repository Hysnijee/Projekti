<?php
include_once 'catalogMapper.php';

if (isset($_GET['id'])) {
    $catalogId = $_GET['id'];
    $mapper = new CatalogMapper();
    $mapper->deleteCatalog($catalogId);
    header("Location:../views/catalogs.php");
}
