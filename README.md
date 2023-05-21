# EASY HEALTH 
Sistema de Gestión de Citas Médicas y Farmacia Online

## Descripción del Proyecto

El proyecto es un sistema que relaciona doctores y pacientes a través de citas médicas. Los pacientes pueden visualizar los doctores disponibles por especialidad y ubicación utilizando una API de ubicación integrada. También pueden solicitar citas médicas con doctores particulares, hospitales, clínicas, etc. Además, el sistema cuenta con una funcionalidad de farmacia en línea donde los pacientes pueden conseguir los medicamentos recetados por los doctores y solicitar su envío a domicilio. El sistema integra una API de PayPal para realizar pagos y cobros dentro del sistema. Además, incluye un apartado de emergencias que notifica a los hospitales más cercanos.

## Estructra del proyecto

El sistema sigue una arquitectura Modelo Vista Controlador a 4 capas (MVC), y la estructura del proyecto está organizada de la siguiente manera:

- **Carpeta controller**: Contiene los controladores y oyentes.
- **Carpeta model**: Contiene la lógica del proyecto.
- **Carpeta view**: Contiene las interfaces que utiliza el sistema.

## Contribuir

Si deseas contribuir a este proyecto, sigue los siguientes pasos:

1. Realiza un fork de este repositorio.
2. Clona el repositorio fork en tu máquina local.
3. Crea una nueva rama para tus cambios: *git checkout -b nombre-de-tu-rama*
4. Realiza los cambios necesarios en el código y agrega tus mejoras al proyecto.
5. Realiza commits descriptivos para tus cambios: *git commit -m "Descripción del cambio"*
6. Sube los cambios a tu repositorio forked en GitHub: *git push origin nombre-de-tu-rama*
7. Abre una solicitud de extracción (pull request) desde tu repositorio forked en GitHub. Describe tus cambios y explícanos por qué deberíamos incorporarlos al proyecto.

## Convención para Mensajes de Commit

Se recomienda seguir una convención para los mensajes de commit en este proyecto. Esta convención ayuda a mantener una estructura clara y consistente en los mensajes de commit, facilitando la comprensión y el seguimiento de los cambios realizados.

### Formato de Mensaje de Commit

Cada mensaje de commit se compone de los siguientes elementos:
* tipo: Indica el tipo de cambio realizado en el commit. Algunos ejemplos comunes de tipos son:
  * feat: Nueva característica o funcionalidad añadida.
  * fix: Corrección de un error o bug.
  * docs: Cambios en la documentación.
  * refactor: Cambios en el código que no alteran su comportamiento.
  * chore: Tareas de mantenimiento, actualizaciones, etc.
  * style: Cambios en el estilo de código (espacios, sangrías, etc.) sin afectar su comportamiento.
  * test: Añadir, modificar o eliminar pruebas.
* Descripción: Breve resumen del cambio realizado. Debe ser descriptivo y conciso.
* Cuerpo opcional: Explicación más detallada del cambio realizado. Puede incluir información adicional relevante, contexto o detalles técnicos.
* Pie opcional: Puede contener enlaces a recursos relacionados, números de incidencia o cualquier otro detalle adicional.

### Ejemplo
A continuación se muestra un ejemplo de cómo podría verse un mensaje de commit utilizando esta convención:

``` 
feat: Agregar función de búsqueda de usuarios

Añade una nueva función de búsqueda que permite a los usuarios encontrar otros usuarios por nombre de usuario. Se ha implementado una consulta en la base de datos para recuperar los usuarios que coinciden con el término de búsqueda ingresado por el usuario.

Closes #123 
```



## Contribuidores 

* Jorge Infante Fragoso
* Karina Alcantara Segura
* Victor Saúl Garcia Godoy
* Brian Rivera Martinez
