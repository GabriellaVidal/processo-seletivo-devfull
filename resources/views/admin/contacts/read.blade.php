@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contatos</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Informações do Contato</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
      <div class="mailbox-read-info">
        <h3>{{ @$contact->name }} <span class="mailbox-read-time pull-right">{{ @$contact->created_at->format('d/m/Y')}}</span></h3>
        <h5><b>Telefone:</b> {{ @$contact->phone }}</h5>
        <h5><b>E-mail:</b> {{ @$contact->email }}</h5>
        <h5><b>Linkedin:</b> {{ @$contact->linkedin }}</h5>
        <h5><b>Github:</b> {{ @$contact->github }}</h5>
        <h5><b>Nível de Inglês:</b> {{ @$contact->level_english }}</h5>
        <h5><b>Pretenção Salarial:</b> {{ @$contact->salary }}</h5>
        <h5><b>Currículum:</b> <a href="{{ asset($contact->file->path) }}" class="mailbox-attachment-name" download><i class="fa fa-paperclip"></i> {{ $contact->file->filename }}</a></h5>
      </div>
      <!-- /.mailbox-controls -->
      <div class="mailbox-read-message">
        {{ $contact->motivation }}
      </div>
      <!-- /.mailbox-read-message -->
    </div>
    <!-- /.box-body -->
  </div>
@stop