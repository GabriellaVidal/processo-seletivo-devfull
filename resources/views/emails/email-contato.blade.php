@component('mail::message')
Você acaba de receber uma nova mensagem do formulário de contato.

@if(!empty($data['name']))
	Nome:
	{{ $data['name'] }}
@endif

@if(!empty($data['email']))
	Email: 
	{{ $data['email'] }}
@endif

@if(!empty($data['phone']))
	Telefone: 
	{{ $data['phone'] }}
@endif

@if(!empty($data['motivation']))
	Motivação: 
	{{ $data['motivation'] }}
@endif

@if(!empty($data['linkedin']))
	Linkedin: 
	{{ $data['linkedin'] }}
@endif

@if(!empty($data['github']))
	Github: 
	{{ $data['github'] }}
@endif

@if(!empty($data['level_english']))
	Nível do Inglês: 
	{{ $data['level_english'] }}
@endif

@if(!empty($data['salary']))
	Pretensão Salarial: 
	{{ $data['salary'] }}
@endif

@endcomponent