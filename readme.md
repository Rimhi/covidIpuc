

<p align="center">
Covid Ipuc
</p>

## Acerca del programa

Covid Ipuc es una plataforma creada para resolver la necesidad que hay en los templos de mantener un control de registros de las personas que ingresan, genera 4 reportes, los ingresos de las personas con sus preguntas, el registro de miembros, un acta que se firma una unica vez, y el ingreso del grupo de apoyo(ujieres)

## Guia de instalacion 
Para instalar el programa tenemos que tener descargado un servidor local con una version reciente de php, vamos a descargar el siguiente programa

- https://laragon.org/download/ -->laragon es servidor local, gestor de bases de datos, nos ayudara almacenar los datos del aplicativo ( vamos a descargar la edicion que dice "laragon full") 


una vez instalado procedemos a descargar e instalar composer  

- https://getcomposer.org/download/ -> le damos click en Composer-Setup.exe - y automaticamente se hace la descarga, una vez descargado procedemos a la instalacion

- ahora procedemos a descargar el programa covid ipuc desde este lugar en la parte superior hay un boton que dice descargar y lo descarga como zip, nos dirigimis al disco C luego a laragon luego a www y dentro de esa carpeta descomprimimos el zip

-inicializacion: para iiciar el prgrama abrimos el programa laragon, y le damos en iniciar todo, luego le damos click en bases de datos y donde dice laragon con figura de delfin le damos en crear nueva base de datos, el nombre le pondremos "covidipuc", luego de eso le damos click en terminal e igresamos lo siguiente cd C:/laragon/www/covidipuc-master y presionamos la tecla enter

- luego escribimos el comando composer install, esperamos unos minutos

- luego escribimos el comando php artisan migrate y si nos pide confirmacion le damos que si

- luego escribimos el comando php artisan serve y nos aparecera una direccion http y esa es la que ponemos en el navegador, ya tendremos el aplicativo listo para usar 

## License

EEste software es de codigo abierto, el que desee puede disponer de el, derechos reservados ©2020

"# covidIpuc realizado por Ricardo Monterrosa Higuita" 
