

@if(session('Insert_msg'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> {{session('Insert_msg')}}
  </div>
  @endif

  @if(session('Update_msg'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> {{session('Update_msg')}}
  </div>
  @endif