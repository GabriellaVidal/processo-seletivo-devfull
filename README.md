# Rits

O projeto foi contruído em laravel 5.4.

1. Montagem

	A montagem foi realiza com base no arquivo .fig. Foi realizada a estruturação de duas sessões principais (banner e contato). Sendo o banner contendo as informações do banner superior, e contato com o formulario. Esses itens podem ser encontrados em resources->views->pages->sections. O menu foi montado na sessão resources->views->pages->layouts->blocks, juntamente com o footer, head, scripts e swal(sweetalert com mensagens de retorno).

	Foi usado scss para css. O js, fonts, images e o scss está sendo compitado pelo webpack.mix. As informações de scss, js, images, fonts estão em resources->assets.

2. Disparo de Contatos
	
	O disparo de contatos de novas inscrições está acontecendo por meio do PagesController. No disparo ocorre o insert na tabela de contatos, e um send de email com o request do form para um email pré configurado. Existe um relacionamento em contacts com file de belongsTo e um de files com contact de hasMany. O upload do arquivo também é feito nesse processo. 

3. Administrativo

	Foi utilizado a instalação do AdminLte2 com layout de administrativo devido a ele ter suporte laravel. Para instalação foi utilizado:
	-  "jeroennoten/laravel-adminlte": "v1.26.0" (no composer.json, essa versão é a que suporta o laravel 5.4)
	-  php artisan make:adminlte (para criação do padrão auth)
	- php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=config (para restrutiração de menu)

	Para acessar o admin, basta colocar /admin na url.

4. Banco de Dados

	O banco foi contruído em postgrsSQL. Para contrução do banco foi utilizado os seguintes métodos:
	- php artisan make:migration create_files_table (criação da tabela files)
	- php artisan make:migration create_contacts_table (criação da tabela contacts)
	- php artisan make:seeder ContactsTableSeeder (criação de seeder para insert conteudo teste)
	- php artisan make:seeder UsersTableSeeder (criação de seeder para insert user padrão)
	- php artisan migrate --seed

	Login e senha administrativo:
	Login: admin@rits.com
	Senha: 123

5. Disparo de emails agendados

	Para realização do agendamento foi utilizado o metodo de schedule do console->kernel do laravel. Foi criada uma trait de disparo do email onde é contabilizado os novos contatos apartir da flag new_contact. No metodo de schedule foi chamado o send() da trait. Para execução automatica do agendamento se faz necessário a configuração de um crontab no servidor em que execute o agendamento a cada minuto. Só no método de agendamento do kernel que se foi configurado os horários de disparo(12h e 18h). Segue o comando para ser inserido no crontab:

	- * * * * * php /home/gabriella/Documentos/rits/artisan schedule:run >> /dev/null 2>&1
