ERP

## Proyecto

**Objetivos**
Con este software, buscamos aplicar nuestros conocimientos de Laravel y Bootstrap, además de Git Flow y un flujo de trabajo real.

**¿Qué es este proyecto?**
Xfly ERP es un ERP creado a partir de una necesidad de la empresa Xfly Bauru. Está enfocado en la gestión de servicios de drones, el sector financiero y los clientes de la empresa.
  
  
## Setting Local Environment  


1. Clona el `xfly-erp` repositorio

```

git clone git@gitlab.com:PixeLarm12/xfly-erp.git

cd xfly-erp

cp .env.example .env

```

  

2. Configura tu archivo `.env` para tu localhost. Sigue el ejemplo a continuación, pero modifícalo para adaptarlo a tu ordenador.

```

DB_CONNECTION=mysql

DB_HOST=localhost

DB_PORT=3306

DB_DATABASE=xfly

DB_USERNAME=root

DB_PASSWORD=

```

  

3. Ejecuta los siguientes comandos para configurar Laravel.

```

composer install

php artisan key:generate

php artisan storage:link

php artisan migrate

php artisan serve

```

4. Comprueba tu `localhost` y asegúrate de tener **Xfly ERP** en ejecución en tu navegador.

  
  

_**Si desea utilizar `Kool.dev` para ejecutar Xfly ERP, siga los pasos que se indican a continuación.

  

1. Clona `xfly-erp` repositorio

```

git clone git@gitlab.com:PixeLarm12/xfly-erp.git

cd xfly-erp

cp .env.example .env

```

  

2. Configura tu archivo `.env` para tu localhost. Sigue el ejemplo a continuación, pero modifícalo para adaptarlo a tu ordenador.

```

DB_CONNECTION=mysql

DB_HOST=database

DB_PORT=3306

DB_DATABASE=xfly

DB_USERNAME=docker

DB_PASSWORD=secret

```

  

3. Sigue el enlace a continuación para configurar Laravel.

- https://kool.dev/docs/getting-started/existing-project

  

4. Comprueba tu `localhost` y asegúrate de tener **Xfly ERP** en ejecución en tu navegador.
