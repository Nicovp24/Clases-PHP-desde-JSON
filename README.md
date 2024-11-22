# Tienda JSON - Proyecto en PHP

## Descripción
Este proyecto consiste en cargar un archivo JSON con datos estructurados de una tienda y manipularlos mediante clases en PHP. Utiliza programación orientada a objetos para representar categorías, productos y variantes, y permite mostrar la información de manera estructurada.

---

## Estructura del Proyecto

### Archivos principales
- **`tienda.json`**: Contiene los datos estructurados de la tienda.
- **`index.php`**: Archivo principal que define las clases, carga el JSON y muestra la información en formato HTML.

---

## Funcionalidades
1. **Cargar datos desde un JSON**: Se carga un archivo `tienda.json` con categorías, productos y variantes.
2. **Clases PHP**:
   - `Variante`: Representa las características específicas de un producto (talla, color, precio).
   - `Producto`: Representa un producto individual con variantes.
   - `Categoria`: Agrupa productos dentro de una categoría específica.
   - `Tienda`: Contiene todas las categorías de la tienda.
3. **Visualización de datos**: Muestra las categorías, productos y variantes en un formato HTML amigable.
4. **Generación de JSON estructurado**: Convierte la estructura de clases de vuelta a un JSON formateado y lo imprime en pantalla.

---

## Instalación y Ejecución

### Requisitos
- Servidor local (XAMPP, WAMP, LAMP, etc.).
- PHP 7.4 o superior.

### Pasos para ejecutar
1. Clona o descarga el proyecto en tu servidor local.
2. Coloca los archivos en la carpeta raíz de tu servidor (por ejemplo, `htdocs` para XAMPP).
3. Asegúrate de que el archivo `tienda.json` y `index.php` estén en el mismo directorio.
4. Inicia tu servidor local.
5. Abre tu navegador y navega a:  http://localhost/index.php


 
