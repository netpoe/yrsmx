## TALLAS `user_sizes`

**¿Cuánto mides? (recuadro con números para seleccionar en mts)**

* Type: number
* Field: `height`

**¿Cuánto pesas?  (recuadro con números para seleccionar en kg)**

* Type: number
* Field: `weight`

**Cuéntame qué talla usas en las siguientes prendas.**

> Todos son su propio object: `class DressSizes extend UserSizes`

> Ejemplo de uso: `$userSize->dress = DressSize::ECH`

* Vestido Opciones  en recuadro para seleccionar ECH, CH, M, G, EG, EEG

    * Type: radio
    * Field: `dress`

* Blusa Opciones  en recuadro para seleccionar ECH, CH, M, G, EG, EEG

    * Type: radio
    * Field: `blouse`

* Bra  Opciones  en recuadro para seleccionar ESPALDA 32, 34, 36, 38, 40.. COPA A, B, C, D, DD, E.

    * Type: radio
    * Field: `bra`

* Falda Opciones  en recuadro para seleccionar ECH, CH, M, G, EG, EEG

    * Type: radio
    * Field: `skirt`

* Pantalón Opciones en recuadro para seleccionar 1, 3, 5, 7, 9, 11, 13, 15

    * Type: radio
    * Field: `pants`

* Zapatos Opciones  en recuadro para seleccionar 22, 22.5, 23, 23.5, 24, 24.5, 25, 25.5, 26, 26.5, 27

    * Type: radio
    * Field: `shoes`

## User Preferred Body Parts `user_preferred_body_parts`

**¿Qué partes de tu cuerpo quieres resaltar o disimular? Seleccionar con palomitas, si se te ocurre alguna opción más cool, adelante.**

* Brazos

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `arms`

* Hombros

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `shoulders`

* Busto

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `breast`

* Abdomen

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `abdomen`

* Cadera

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `hip`

* Pompas

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `butt`

* Muslos

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `tigh`

* Pantorrillas

    * options:
        * Resaltar `1`
        * Disimular `0`
    * type: radio
    * field: `calves`

**Selecciona tu tipo de cuerpo. Opciones**

* type: radio
* field: `user_body_type` _references_ `LuBodyType`

    * `triangle`
    * `eliptical`
    * `inverted triangle`
    * `rectangle`
    * `sand watch`

# User Fit `user_fit`

Estos objetos podrían ser Lookup o una `const` con el siguiente formato:

```php
const OPTIONS = [
    [
        'key' => 1,
        'value' => 'fit',
        'img' => 'src://'
    ]
];
```

y podrían usar un `contract` que sea `InputOptionsInterface` que implemente un `getOptions()` a huevo y un trait que implemente `getOptions` que tire un exception si no regresa un array con un `key => value`

**¿Cómo prefieres que te queden las prendas en la parte superior?**

* type: radio
* field: `upper_part_fit`
* options from `class UpperPartFit implements InputOptionsContract use InputOptionsTrait`

    * `fit` ajustadas
    * `mid` punto intermedio
    * `loose` holgadas
    * `oversize`

**¿Cómo prefieres que te queden las prendas en la parte inferior?**

* type: radio
* field: `lower_part_fit`
* options from `class LowerPartFit implements InputOptionsContract use InputOptionsTrait`

    * `fit` ajustadas
    * `mid` punto intermedio
    * `loose` holgadas
    * `oversize`

**¿Qué tipo de pantalones usas?**

* type: radio
* field: `pants_fit`
* options from `class PantsFit implements InputOptionsContract use InputOptionsTrait`

    * Forma
        * skinny, anchos, rectos, acampanados, leggings
    * Cintura
        * A la cadera, Medio, A la cintura












