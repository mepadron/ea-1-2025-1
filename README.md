# Modelo Vista Controlador

Este proyecto es meramente educativo, en el mismo, explicamos la implementación del patron de diseño software Modelo Vista Controlador, cuyo proposito es el de separar una aplicación en 3 principales partes:

- [Modelo](#Modelo)
- [Vista](#Vista)
- [Controlador](#Controlador)

## Modelo

Es la entidad que se encarga de la comunicacion directa con la base de datos anfitrion, para poder interactuar con la información de la mima.

## Vista 

Es la responsable de contener y renderizar la vista o las diferentes o variaciones partes de la vista segun la circunstancia en la que nos encontremos y el estado o informacion propoionada por el controlador.

## Controlador

El controlador es la entidad intermediaria que es responsable de manipular tanto la vista como el modelo, su trabajo es crucial ya que el mismo se encargara de llamar funciones de la vista segun la información o estado que se contenga en el modelo y se desee entregar al usuario. Del mismo modo se encargara de llamar metodos del modelo según sean las peticiones proporcionadas por la vista.

## Estructura del proyecto

```
├── README.md
├── autoload.php
├── controllers
│   └── ValidUserController.php
├── hola.php
├── index.php
├── login.php
├── models
│   └── ValidUserModel.php
└── views
    └── LoginView.php
```

### Punto de arranque

Archivo: `index.php`

### Ejecución del proyecto

Comando: `php -S localhost:8000`

