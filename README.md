# TPE2021
Trabajo Practico Especial WEB2-2021 - 

Tecnicatura Universitaria en Desarrollo de Aplicaciones Informaticas (TUDAI) -

Universidad Nacional del Centro de la Provincia de Buenos Aires 



Tecnologias utilizadas:
* PHP - MVC Arquitecture
* Js
* Bootsrap
* VUE.js
* Smarty
* MySQL
* API REST






PRIMERA ETAPA

*Consigna*

Desarrollar un sitio web dinámico que permita visualizar un conjunto de ítems cargados dinámicamente por un usuario administrador. 
Estos ítems deben estar modelados en el sistema mediante una relación 1 a N.

Requerimientos Funcionales

Acceso público

Deben existir diferentes secciones donde se muestre el contenido dinámicamente generado desde la base de datos. Estas secciones pueden 
ser accedidas de manera pública, no es necesario loguearse.

* Listado de ítems: Se debe poder visualizar todos los items cargados
* Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente 
* Listado de categorías: Se debe poder visualizar un listado con todas las categorías cargadas
* Listado de ítems x categoría: Se debe poder visualizar los ítems perteneciente a una categoría seleccionada


Acceso administrador de datos 

Debe existir una sección para la administración de datos, la cual es accedida solo a usuarios administradores del sitio.

* El usuario administrador debe loguearse con usuario y contraseña.
* El usuario debe poder desloguearse (logout)
* Solo los usuarios logueados pueden modificar las categorías y los ítems.

Se debe crear servici 	os de ABM (alta/baja/modificación) para administrar los datos:
Administrar Ítems (entidad del lado N de la relación).
* Lista de Items (Noticias/Productos/…)
* Agregar Items (Noticias/Productos/…)
* Eliminar Items (Noticias/Productos/…)
* Editar Items (Noticias/Productos/…)



SEGUNTA ETAPA

El objetivo es agregar nueva funcionalidad detallada en forma de user stories

Roles de usuario:

 * Como usuario quiero poder registrarme en el sitio generando nombre de usuario/mail y contraseña. 
Al registrarse el usuario se loguea automáticamente. Este usuario no tiene privilegios de administración.
 * Como administrador del sitio, quiero poder asignar o quitar permisos de administración a cualquier usuario.
 * Como administrador del sitio, quiero poder eliminar usuarios.
Comentarios (todo por API REST):
 * Como usuario registrado, quiero poder postear comentarios en los ítems del sitio asignándoles un puntaje de 1 a 5. 
 * Cada ítem del sitio tendrá la posibilidad de recibir comentarios y puntuaciones solamente de usuarios logueados.
 * Como administrador del sitio, quiero poder borrar comentarios.
 * Como administrador del sitio, quiero poder asociar una imagen a un ítem.
Las imágenes de los “ítems” se deben poder subir y eliminar desde el ABM de los mismos.
* Como usuario quiero poder realizar búsquedas avanzadas de los ítems.
Se debe incluir un formulario de búsquedas avanzadas donde se filtren los ítems dependiendo de los atributos internos. Esta búsqueda se debe resolver del lado del servidor.
* Como usuario quiero poder ordenar los comentarios por antigüedad o puntaje, ascendente o descendente. (Via API REST)
	Se debe ordenar del lado del servidor.
* Como usuario quiero poder filtrar los comentarios por cantidad de puntos.  (Via API REST)
	Se debe filtrar del lado del servidor.
