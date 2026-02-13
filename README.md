# Trekking-Segovia
🥾 Aplicación de Gestión de Rutas: Trekking Segovia
Este proyecto es una aplicación web dinámica desarrollada en PHP que permite a una asociación de senderismo gestionar y visualizar sus próximas excursiones. Los datos se almacenan de forma persistente en un sistema de archivos plano (.txt).

🚀 Funcionalidades
La aplicación implementa un flujo completo de gestión de datos:

Registro de Excursiones: Formulario interactivo para capturar el trayecto, la duración estimada y la fecha/hora de salida.

Persistencia de Datos: Almacenamiento de la información en el servidor dentro de un archivo destinos.txt, utilizando un formato estructurado por delimitadores (/).

Visualización Dinámica: Generación automática de una tabla HTML que recupera y muestra todos los destinos registrados cada vez que se carga la página o se añade una nueva ruta.

Interfaz Adaptable: Diseño moderno con efectos de desenfoque (glassmorphism) y totalmente responsivo mediante CSS.

🛠️ Tecnologías utilizadas
PHP: Lógica de servidor para el procesamiento de formularios, manejo de sistemas de archivos (fopen, fwrite, file) y generación dinámica de contenido.

HTML5 & CSS3: Estructura de formularios y diseño visual avanzado con uso de variables, backdrop-filter para efectos de transparencia y transiciones suaves.

Manejo de Archivos: Implementación de lectura/escritura de archivos de texto como base de datos ligera.

📁 Estructura del Proyecto
trekking.php: Archivo principal que contiene tanto el formulario de entrada como la lógica PHP para procesar y mostrar los datos.

destinos.txt: Base de datos en formato plano donde se guardan las rutas.

css/style.css: Estilos detallados para la interfaz de usuario.

img/: Directorio para recursos visuales y fondos de pantalla.

💡 Conceptos Aplicados
En este desarrollo he aplicado conceptos fundamentales de Backend:

Control de superglobales de PHP ($_POST).

Validación básica de campos obligatorios en el lado del cliente y servidor.

Tratamiento de cadenas de texto y arrays mediante explode() para la recuperación de datos estructurados.
