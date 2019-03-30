# Prueba Decameron CLEF
Aplicación que permite validar acomodaciones según disponibilidad que tenga un hotel de una determinada ciudad.

### Herramientas de desarrollo
- Laravel Framework 5.8.8
- PostgreSQL 10.7.1
- Vue.JS 

### Requisitos de instalación en entorno local

- XAMP Server, Versión 7.3.3 (PHP 7.3.3, Apache 2.4.38 )
- Base de datos PostgreSQL, Versión 10.7.1
- Composer Dependency Manager, Versión 1.8.4

### Configuración del nombre de dominio 
Apagar servidor APACHE desde XAMPP
Configurar archivo hosts ubicado en: /etc
```html
127.0.0.1	localhost
::1         localhost
127.0.0.1   prueba-decameron-clef.local
```
Encender o reiniciar servidor APACHE para verificar los cambios

### Configuración del host virtual 
Ruta del archivo: /XAMPP/xamppfiles/etc/extra/httpd-vhost.conf
```html
<VirtualHost *:80>
    ServerAdmin webmaster@prueba-backend-clef.local
    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/prueba-decameron-clef/public"
    ServerName prueba-decameron-clef.local
    ErrorLog "logs/prueba-decameron-clef.local-error_log"
    CustomLog "logs/prueba-decameron-clef.local-access_log" common
</VirtualHost>
```

### Configuración para establecer conexión a base de datos PostgreSQL 
Ruta del archivo php.ini para activar extensión para base de datos PostgresSQL: /XAMPP/xamppfiles/etc/php.ini
```html
;extension=php_pgsql.dll
```
Remover el punto y coma para activar extensión.

### Creación de base de datos en PostgreSQL desde pgAdmin4
- Nombre de servidor por defecto en entorno local: PostgreSQL 10
- Nombre de base de datos: prueba-decameron-clef
- Nombre de usuario de acceso a gestor: postgres
- Contraseña de acceso a gestor: root