@component('mail::message')
Você acaba de receber uma nova mensagem do formulário de contato.

@if(!empty($data['nome']))
	Nome:
	{{ $data['nome'] }}
@endif

@if(!empty($data['email']))
	Email: 
	{{ $data['email'] }}
@endif

@if(!empty($data['telefone']))
	Telefone: 
	{{ $data['telefone'] }}
@endif

@if(!empty($data['mensagem']))
	Mensagem: 
	{{ $data['mensagem'] }}
@endif

@endcomponent