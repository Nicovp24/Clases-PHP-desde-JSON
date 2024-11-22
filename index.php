<?php
// Clase Variante
class Variante {
    public $talla;
    public $color;
    public $precio;

    public function __construct($talla, $color, $precio) {
        $this->talla = $talla;
        $this->color = $color;
        $this->precio = $precio;
    }
}

// Clase Producto
class Producto {
    public $nombre;
    public $marca;
    public $precio;
    public $variantes = [];

    public function __construct($nombre, $marca, $precio, $variantes = []) {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio = $precio;

        foreach ($variantes as $variante) {
            $this->variantes[] = new Variante($variante['talla'], $variante['color'], $variante['precio']);
        }
    }
}

// Clase Categoria
class Categoria {
    public $nombre;
    public $productos = [];

    public function __construct($nombre, $productos = []) {
        $this->nombre = $nombre;

        foreach ($productos as $producto) {
            $this->productos[] = new Producto($producto['nombre'], $producto['marca'], $producto['precio'], $producto['variantes']);
        }
    }
}

// Clase Tienda
class Tienda {
    public $categorias = [];

    public function __construct($categorias = []) {
        foreach ($categorias as $categoria) {
            $this->categorias[] = new Categoria($categoria['nombre'], $categoria['productos']);
        }
    }
}
?>

<?php
// Leer el archivo JSON
$jsonData = file_get_contents('tienda.json');
$dataArray = json_decode($jsonData, true);

// Crear la tienda
$tienda = new Tienda($dataArray['categorias']);

// Mostrar las categorías y productos
echo "<h1>Tienda</h1>";
foreach ($tienda->categorias as $categoria) {
    echo "<h2>Categoría: {$categoria->nombre}</h2>";

    foreach ($categoria->productos as $producto) {
        echo "<p><strong>Producto:</strong> {$producto->nombre} - Marca: {$producto->marca} - Precio: \${$producto->precio}</p>";

        echo "<ul>";
        foreach ($producto->variantes as $variante) {
            echo "<li>Talla: {$variante->talla}, Color: {$variante->color}, Precio: \${$variante->precio}</li>";
        }
        echo "</ul>";
    }
}

// Mostrar el JSON estructurado
echo "<h2>JSON de la tienda:</h2>";
echo "<pre>" . json_encode($tienda, JSON_PRETTY_PRINT) . "</pre>";
?>
