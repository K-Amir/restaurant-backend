# sitiolibre

## Dependencias del sistema

Instala esto primero antes de cacharrear :-)

-   PHP 8.2+
-   XAMPP, Laragon o Devilbox (el que prefieras) para tener MySQL y PHPMyAdmin
-   Composer 2.5+
-   Node.js 18+

<details>
<summary>Como comprobar las versiones que tienes instaladas</summary>
Ejecuta los siguientes comandos en el terminal de p.ej. Visual Studio Code.

### PHP

```sh
php --version
```

Ejemplo de respuesta: `PHP 8.2.4 (cli) (built: Mar 16 2023 16:10:27) (NTS)`

### Composer

```sh
composer --version
```

Ejemplo de respuesta: `Composer version 2.5.5 2023-03-21 11:50:05`

### Node.js

```sh
node --version
```

Ejemplo de respuesta: `v18.15.0`

</details>

---

## ¿Qué tecnologías usamos en el proyecto? (el llamado _"stack"_)

-   Laravel 10

-   Interfaz
    -   Estilos de CSS: TailwindCSS
    -   Componentes reactivos: Livewire + Laravel Echo
    -   Componentes no reactivos: Alpine.js
-   [ ] Transferencia de datos y señales a Android e iOS
    -   APIs: Seguramente usemos JWTAuth
    -   WebSockets: Para dar reactividad a las interfaces móviles seguramente usemos Soketi

---

## Bootstrapping, o como poner a funcionar el proyecto

1. Primero, instala las dependencias de composer

```sh
composer install
```

2. Después, las de NPM. Esto configurará Alpine.js y TailwindCSS

```sh
npm install
npm run build
```

<details>
<summary>¿Trabajando en el diseño/los estilos del *front*?</summary>
Si estás trabajando con los estilos de Tailwind, tienes dos opciones para ver los cambios:
  
### (Recomendado) Que se actualize en tiempo real/de forma reactiva (como en SwiftUI, Ionic etc) cada vez que guardas el archivo
Ejecuta el siguiente comando para que observe los cambios de la interfaz.
```sh
npm run dev
```
Nota: este comando no reemplaza a `php artisan serve`, los dos deben de usarse a la vez. El CSS no cargará si no ejecutas esto.
  
  
### Que se actualize solo cuando tú le digas
```sh
npm run build
```
Nota: este comando está pensado sobre todo para cuando montemos el servidor en Amazon. Lo puedes usar en local, pero no es recomendable.
</details>

3. Ahora, copia el archivo `.env.example` al `.env`. Nunca borres o modifiques `.env.example`.
   Modifícalo para conectarlo a la base de datos, si hiciese falta.

4. Genera las claves

```sh
php artisan key:generate
php artisan jwt:secret
```

5. Crea el enlace simbólico a la carpeta de recursos

```sh
php artisan storage:link
```

6. Por último, haz la migración de la base de datos

```sh
php artisan migrate:fresh --seed
```
