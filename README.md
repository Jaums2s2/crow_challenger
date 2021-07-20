Para a execução do projeto deve-se ter instalado em sua maquina
os Softwares:

WampServer
Composer

No Wampsever selecionar a versão 7.4.9 do php.

Deve-se intalar o composer na versão 7.4.9

No terminal do seu computador digite : composer global require laravel/installer.
Ele será responsavel por instalar o Laravel 8 em sua maquina.

Com isso o laravel estará em sua maquina, deve-se descompactar o 
projeto dentro da pasar wamp64;

Execute no seu terminal dentro da raiz do projeto o comando 
php artisan serve

Com isso o servidor estará em funcionamento.

Dentro do arquivo .env configure o programa alterando o 
DB_USERNAME, DB_PASSWORD e o DB_DATABASE(para o nome da sua base de dados)

Dentro do terminal utilize o comando: php artisan migrate
ele será responsavel por adicionar a tabela em seu banco de dados,

Utilize tambem o comando: php artisan db:seed
ele alimentará a tabela.

Apos isso o nosso projeto estará pronto para a utilização





