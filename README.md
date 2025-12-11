
## InvEmpre

### 💡 Introducción a InvEmpre

**InvEmpre** (Inventario Empresarial) es un sistema de gestión concebido para la **organización integral de inventarios** con un enfoque en la lógica de negocio avanzada.

Más allá de la administración básica de productos y categorías, InvEmpre está diseñado para potenciar la eficiencia empresarial. Entre sus funcionalidades clave se encuentran la capacidad de **crear ofertas y cupones de descuento** (por porcentaje y monto fijo) para impulsar ventas. Además, permite establecer un control de stock riguroso definiendo **niveles mínimos y máximos** por producto, lo que activa notificaciones automáticas para alertar sobre stock bajo o demasiado alto, optimizando así la gestión de recursos y evitando pérdidas.

Construido sobre la solidez de **Laravel** y la interfaz intuitiva de **Filament**, InvEmpre ofrece una solución robusta y escalable para cualquier necesidad de inventario.


<img src="invempre.png" witch="40px" height="40px"/>

------------


### ✨ Características Principales

- Gestión de Productos.
- Administración de Categorías.

---

### 🛠️ Tecnologías y Librerías

Este proyecto está construido con las siguientes tecnologías principales:

#### Pila de tecnologías
- **Laravel**: Versión `12.42.0`.
- **Filament**: Versión `4.0.0`.

####Plugin de Filament

- **Shield**: Versión `4.0.0`.

---

### 🛠️ Configuración e Instalación

1.  **Clonar el Repositorio:**
    ```bash
    git clone https://github.com/IsacC2005/InvEmpre
    ```

2.  **Acceder al Directorio:**
    ```bash
    cd InvEmpre
    ```

3.  **Instalar Dependencias de PHP:**
    ```bash
    composer install
    ```
4.  **Crear el Archivo de Entorno (`.env`):**
    ```bash
    cp .env.example .env
    ```

5.  **Generar Clave de Aplicación:**
    ```bash
    php artisan key:generate
    ```

6.  **Configurar Base de Datos:**
    *(Abre el archivo `.env` y ajusta las variables `DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, y `DB_PASSWORD`.)*

7.  **Ejecutar Migraciones:**
    ```bash
    php artisan migrate --seed
    ```
    *(Esto crea las tablas de la base de datos, y el usuario por defecto.)*

8.  **Instalar Shield**
	```bash
	php artisan shield:setup
	```

9.  **Crear Super Admin**
	```bash
	php artisan shield:super-admin
	```
---
### Documentaciones

🔗[Laravel](https://laravel.com/docs/)<br>
🔗[Filament](https://filamentphp.com/docs)<br>
🔗[Shield](https://filamentphp.com/plugins/bezhansalleh-shield "Shield")<br>



