# Gestión de CV

Esta vez haremos una gestión de CV. Por ahora solo haremos la creación.

Para realizar la creación de los objetos utilizaremos un named constructor llamado "**create**" para que el código sea más legible.

El ejercicio consiste en: 

Un usuario puede tener un CV o más, estos CV's tienen un nombre y fecha de creación solamente, este usuario debe de tener un id, email, nombre y apellidos y empresa.

El CV como tal tendrá un listado de skills y trabajos.

Las skills tendrán un id, nombre y una puntuación.

Las empresas en las que ha estado este usuario, un id, un nombre para el lugar de trabajo, la posición, una fecha de inicio 
y una fecha de fin (también podemos seguir trabajando actualmente en ese sitio) y por último una descripción.

Por ahora solo pido un caso de uso para crear un CV. Si queréis hacer el de usuario, perfecto.
Todo esto con su respectivo repository (No hace falta que haga nada su respectiva implementación).

**Todo esto no se debe de guardar en base de datos de momento, lo haremos más adelante.**

# Iniciar el servidor de Symfony

Para que sea más fácil el desarrollo, como de momento no necesitamos base de datos,
es más cómodo iniciar el servidor de symfony, para ellos deberéis ejecutar en **apps/backend** por terminal:

**symfony server:start --port=8000**

Para ello deberéis tener el ejecutable de symfony instalado en vuestro PC.

[https://symfony.com/download#step-1-install-symfony-cli](https://symfony.com/download#step-1-install-symfony-cli)

FYI: los controladores, servicios, etc, están en la carpeta apps/backed, si os fijais es un sistema de carpetas de symfony.
Todo nuestro código de lógica debe de ir en src/Backoffice.