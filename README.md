### YRSmx

#### Admin

**Productos**

Inventario: muestra los productos en stock por categorías y atributos en un formato de tabla.

`GET admin/productos/inventario`

Catálogo: muestra los productos en stock con imágenes. Hay un filtro especial que muestra las imágenes sin productos asignados

`GET admin/productos/catalogo`

Actualizar catálogo: se pueden subir imágenes en lote, después, se seleccionan las imágenes y se asignan a un producto con sus categorías y atributos

`POST admin/productos/catalogo/upload` (modal window)

**Usuarios**

Usuarios: muestra los usuarios registrados con sus diferentes estatus, tienen prioridad los usuarios que ya terminaron el cuestionario y que ya verificaron su correo

`GET admin/usuarios`

Perfil: muestra el perfil de un usuario por `user_id` con su estatus actual. Si el estatus requiere una acción, como la de asignar un outfit, se mostrarán las acciones correspondientes.

`GET admin/usuario/{userId}`

Asignar outfit: en el perfil de un usuario, y si a éste le puede ser asignado un outfit. Se muestra un modal que permite seleccionar productos y asignarlos a un outfit que está asignado al usuario en cuestión. Se pueden crear varios outfits que se asignan en una sola sesión. Éstos outfits de la sesión son los que se muestran en el carrito privado una vez que se envía la notificación al usuario.

```
POST admin/usuario/{userId}/assignOutfit (modal window)
POST admin/outfits/create (returns outfitId)
POST admin/outfits/{outfitId}/assignProducts?products={id,id,id} (assigns products to outfit and outfit to user)
```

### Changelog

Fri Jul  7 08:51:38 2017

* migrations for products
* migrations for outfits
* migrations for users
* migrations for products gallery
* migrations for outfits gallery
* products catalog HTML


