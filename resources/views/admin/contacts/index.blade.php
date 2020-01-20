@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contatos</h1>
    @include('admin.partials.messages')
@stop


@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Inbox</h3>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
      <div class="mailbox-controls">
        <!-- Check all button -->
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm destroy-contacts"><i class="fa fa-trash"></i></button>
        </div>
        <!-- /.pull-right -->
      </div>
      <div class="table-responsive mailbox-messages">
        <form method="POST" class="contacts_destroy_form" action="{{ route('destroy') }}" role="form">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <table class="table table-hover table-striped">
            <tbody>
              @foreach($contacts as $contact)
                <tr>
                  <td>
                    <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                      <input type="checkbox" class="checkbox-contacts" name="contact_id[]" value="{{ $contact->id }}"></td>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="{{ route('contacts.show', $contact->id)}}">{{ $contact->name }}</a></td>
                  <td class="mailbox-subject">{{ $contact->phone }}</td>
                  <td class="mailbox-subject">{{ $contact->email }}</td>
                  <td class="mailbox-attachment"><a href="{{ asset($contact->file->path) }}" download>{{ $contact->file->filename }}</a></td>
                  <td class="mailbox-date">{{ $contact->created_at->diffForHumans()}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </form>
        <!-- /.table -->
      </div>
      <!-- /.mail-box-messages -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer no-padding">
      <div class="mailbox-controls">
        <!-- /.btn-group -->
        <div class="pull-right">
          {{ $contacts->links() }}
          <!-- /.btn-group -->
        </div>
        <!-- /.pull-right -->
      </div>
    </div>
  </div>
@stop
@section('js')
<script type="text/javascript">
  $(".destroy-contacts").click(function(){
    console.log('kjhgfd')
    $(".contacts_destroy_form").submit();

});
</script>
@stop