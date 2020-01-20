@component('mail::message')
Você acaba de receber um notificação de novos contato inscritos para a vaga.

@if(!empty($data['qtd']))
	Quantidade de Novos Contatos:
	{{ $data['qtd'] }}
@endif

@endcomponent