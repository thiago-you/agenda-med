<p align="center">
    <h1 align="center">Agenda Med</h1>
    <h3 align="center">Agendamento de Consultas médicas</h3>
    <br>
</p>

Projeto básico de agendamento de consultas médicas. Utilizando PHP com [Yii 2 Framework](http://www.yiiframework.com/), Jquery e Bootstrap.

REQUISITOS
-------------------

    PHP >= 7.0
    COMPOSER >= 1.9.0
    GIT

INSTALAÇÃO
------------

### Clonando o projeto
~~~
cd /var/www/html
sudo git clone https://github.com/thiagoyou/agenda-med.git agenda-med
~~~

### Instalando as depêndencias

Se você ainda não tiver o composer [Composer](http://getcomposer.org/), você pode instala-lo seguindo as etapas em [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

~~~
cd /var/www/html/agenda-med
composer install
~~~

**NOTA:**
- Se houver problemas de instalção das dependências do composer, verifique a versão do plugin `fxp/composer-asset-plugin`:

~~~
composer global show fxp/composer-asset-plugin
~~~

Se não estiver instalado ou for inferior há `1.4.0` será necessário instalar/atualizar o plugin e reinstalar as dependências:

~~~
composer global require "fxp/composer-asset-plugin:>=1.4.0"
composer --prefer-dist install
~~~

### Acessando o Sistema

Geralmente, o sistema pode ser acesso pelos seguintes caminhos:

~~~
- localhost/agenda-med/web
- http://localhost/agenda-med/
~~~

**NOTA:** 
- O caminho é totalmente dependente da sua instalação e configuração.

CONFIGURAÇÃO
-------------

### Configurando a Database

Altere o arquivo `config/db.php` com os seus dados de acesso (username, password), exemplo:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=agenda_med',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

### Criando a Database

Execute o arquivo sql que está dentro da pasta `database/database.sql` para criar a estrutura do banco de dados.
