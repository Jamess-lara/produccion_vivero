# 🌱 Sistema de Gestión de Producción de Vivero (Producción Agrícola / Cacao)

[![PHP](https://img.shields.io/badge/PHP-7.4%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6%2B-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![License](https://img.shields.io/badge/Licencia-MIT-green.style=for-the-badge)](LICENSE)

Sistema web integral de gestión y administración para viveros agrícolas. Permite el control eficiente del inventario de insumos (abonos, fungicidas, insecticidas, herramientas), gestión de proveedores, compras de insumos con cálculo automático de existencias, administración de usuarios y generación de reportes en PDF.

---

## 📸 Vista Previa del Sistema

- **Panel Principal (Dashboard):** Vista analítica general con métricas clave del vivero.
- **Módulo de Compras:** Registro de adquisiciones y actualización instantánea de stock.
- **Reportes PDF:** Exportación de comprobantes y listados de compras en formato PDF descargable/imprimible.

---

## ✨ Características Principales

- 🔐 **Autenticación y Seguridad:**
  - Sistema de inicio de sesión con encriptación de contraseñas mediante `password_hash()` y `password_verify()`.
  - Control de sesiones PHP y protección de rutas.
  - Perfil de usuario editable.

- 📦 **Gestión de Insumos (Inventario):**
  - Registro, actualización y eliminación de insumos (abonos, plaguicidas, fertilizantes, etc.).
  - Carga y visualización de imágenes de productos.
  - Control de precios y stock en tiempo real.
  - Validación de dependencias: previene la eliminación accidental de insumos vinculados a transacciones existentes.

- 🚚 **Gestión de Proveedores:**
  - Registro detallado de tiendas y distribuidores agrícolas (nombre, email, dirección).
  - Vinculación directa en las órdenes de compra.

- 🛒 **Control de Compras:**
  - Generación de órdenes de compra con selección dinámica de insumos y proveedores.
  - Cálculo automático de totales y asignación de código único por transacción.

- 📄 **Reportes y Exportación PDF:**
  - Integración con la librería **DomPDF** para generar reportes oficiales e imprimibles de compras realizadas.

- 👥 **Administración de Usuarios:**
  - Control de accesos y mantenimiento de usuarios del sistema.

---

## 🛠️ Tecnologías Utilizadas

- **Backend:** PHP 7.4 / 8.x (Programación Orientada a Objetos - POO y Arquitectura MVC).
- **Base de Datos:** MySQL / MariaDB (Driver MySQLi).
- **Frontend:** HTML5, CSS3, JavaScript, jQuery, Bootstrap / AdminLTE.
- **Librerías Adicionales:** 
  - [DomPDF](https://github.com/dompdf/dompdf) - Generación de documentos PDF.
  - DataTables - Tablas dinámicas e interactivas.

---

## 📁 Estructura del Proyecto

```text
produccion_vivero/
├── clases/               # Clases y modelos POO (clsUsuarios, clsInsumos, clsProveedores, clsCompras)
├── config/               # Configuración de base de datos (conexion.php)
├── controllers/          # Controladores y procesadores de peticiones AJAX / API
├── css/                  # Hojas de estilo personalizadas
├── views/                # Vistas HTML / plantillas del sistema
├── reportes/             # Scripts para generación de PDF (reporte-compras.php)
├── dompdf/               # Librería DomPDF integrada
├── images/               # Imágenes del sistema e insumos cargados
├── produccion_cacao.sql  # Script de la base de datos MySQL
├── index.php             # Página de inicio de sesión
├── inicio.php            # Panel principal / Dashboard
└── panel.php             # Estructura general de navegación
```

---

## 🚀 Requisitos de Instalación

Para ejecutar este proyecto en tu entorno local necesitas:

- Un servidor local como **XAMPP**, **WAMP** o **Laragon**.
- **PHP** >= 7.4.
- **MySQL** / MariaDB.
- Navegador web moderno (Chrome, Edge, Firefox).

---

## ⚙️ Pasos para la Configuración

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/produccion_vivero.git
   ```
   *O copia la carpeta `produccion_vivero` dentro del directorio `htdocs` de tu servidor XAMPP.*

2. **Importar la Base de Datos:**
   - Abre **phpMyAdmin** (`http://localhost/phpmyadmin`).
   - Crea una nueva base de datos llamada `produccion_vivero`.
   - Selecciona la base de datos e importa el archivo `produccion_cacao.sql` ubicado en la raíz del proyecto.

3. **Configurar la Conexión (`config/conexion.php`):**
   Edita las credenciales si tu servidor MySQL tiene una contraseña o puerto diferente:
   ```php
   private string $host = 'localhost';
   private string $user = 'root';
   private string $pass = '';
   private string $db   = 'produccion_vivero';
   ```

4. **Acceder a la Aplicación:**
   Abre tu navegador e ingresa a:
   ```text
   http://localhost/produccion_vivero/
   ```

---

## 🔑 Credenciales de Acceso por Defecto

| Rol / Usuario | Correo Electrónico | Contraseña |
| :--- | :--- | :--- |
| **Administrador** | `usuario@hotmail.com` | `12345678` |

---

## 📜 Licencia

Este proyecto está bajo la Licencia MIT. Siéntete libre de utilizarlo y modificarlo según tus necesidades.
