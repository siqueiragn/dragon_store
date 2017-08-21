<?
require('CategoriaDAO.class.php');
echo "Oi";
$result = CategoriaDAO::loadAll();

print_r($result);

?>