# Rits

O projeto foi contruído em laravel 5.4.

1. Montagem

	A montagem foi realiza com base no arquivo .fig. Foi realizada a estruturação de duas sessões principais (banner e contato). Sendo o banner contento a as informações do banner superior, e contato com o formulario. Esses item podem ser encontrados em resources->views->pages->sections. O menu foi montado na sessão resources->views->pages->layouts->blocks, juntamente com o footer, head, scripts e swal(sweetalert com mensagens de retorno).

	Foi usado scss para css. O js, fonts, images e o scss está sendo compitado pelo webpack.mix. A informações de scss, js, images, fonts estão em resources->assets.

2. Disparo de Contatos
	
	O disparo de contatos está acontecendo por meio do PagesController. No disparo ocorre o insert na tabela de contatos, e um send de email para um email pré configurado. Existe um relacionamento em contacts com file de belongsTo e um de files com contact de hasMany. O upload do arquivo também é feito nesse processo. 

3. Administrativo

	Foi utilizado a instalação do AdminLte2 com layout de adminisrativo devido a ele ter suporte laravel. Para isntalação foi utilizado:
	-  "jeroennoten/laravel-adminlte": "v1.26.0" no composer.json, essa versão é a que suporta o laravel 5.4
	-  php artisan make:adminlte para criação do padrão auth
	- php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=config para restrutiração de menu

4. Banco de Dados

	O banco foi contruído em postgrsSQL. Para contrução do banco foi utilizado os seguintes métodos:
	- php artisan make:migration create_files_table (criação da tabela files)
	- php artisan make:migration create_contacts_table (criação da tabela contacts)
	- php artisan make:seeder ContactsTableSeeder (criação de seeder para insert conteudo teste)
	- php artisan make:seeder UsersTableSeeder (criação de seeder para insert user padrão)

	Login e senha administrativo:
	Login: admin@rits.com
	Senha: 123

5. Disparo de emails agendados
