@component('admin.layout.content')
<div class="card-body">
  @if (session('status'))
    <div class="card-header">
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    </div>
  @endif
    <div class="d-flex justify-content-between">
        <h4 class="card-title">categories list</h4>
        <a class="nav-link btn btn-success btn-sm" href="create-categories">+ Create New category</a>    
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> # </th>
            <th> Category name</th>
            <th> Action </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <input type="hidden" class="delete_val_id" value={{$category->id}}>
            <td>{{$category->id}}</td>
            <td>{{$category->categoriesName}}</td>
            <td>
                <a href="category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
                <button type="submit" class="btn btn-sm btn-danger deletebtn">Delete</button>
            </td>
          </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endcomponent
@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('.deletebtn').click(function(e){
      e.preventDefault();
      var delete_id = $(this).closest("tr").find('.delete_val_id').val();

      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {

        var data = {
          "_token": $('input[name=_tocken]').val(),
          "id": delete_id
        }

        $.ajax({
          type:"DELETE",
          url:'/category-delete/'+ delete_id,
          data:"",
          success: function (response) {
          swal(response.status , {
            icon: "success",
          });
          .then((result)=>{
            location.reload();
          })
          }
        });
      });
            
    });
  });
</script>
@endsection