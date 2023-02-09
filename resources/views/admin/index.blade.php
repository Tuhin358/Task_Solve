@extends('admin')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>

            <p class="alert-success">
                @php
                    $message=Session::get('message');
                    if($message){
                        echo $message;
                    }else{
                        Session::put('message',null);
                    }
                @endphp
            </p>

            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th style="width:10%">id</th>
                      <th style="width:10%"> Title</th>
                      <th style="width:10%"> Short_Description</th>
                      <th style="width:10%"> date</th>
                      <th style="width:15%">image</th>
                      <th style="width:20%">Actions</th>

                  </tr>
              </thead>
              @foreach ($admindatas as $admindata)

              <tbody>
                <tr>
                    <td>{{ $admindata->id }}</td>
                    <td class="center">{{ $admindata->title }}</td>
                    <td class="center">{{ $admindata->short_desctiption }}</td>
                    <td class="center">{{ $admindata->date}}</td>
                    <td>
                        <img src="{{asset('/storage/admin/'.$admindata->image) }}" style="width:100px; height:100px">

                    </td>

                    <td class="row">
                        <div class="span3"></div>

                        <div class="span4">

                        <a href="{{route('admin.edit',$admindata->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{route('admin.destroy',$admindata->id) }}" data-id="{{$admindata->id }}" class="deleteRecord btn btn-warning">Delete</a>

                        {{--  <button class="deleteRecord" data-id="{{$admindata->id }}" >Delete</button>  --}}





                    </div>

                    </div>
                        <div class="spamn3"></div>
                    </td>
                </tr>

              </tbody>
              @endforeach
          </table>
          {{$admindatas->links() }}
        </div>
    </div><!--/span-->

</div><!--/row-->
<script>
    $(".deleteRecord").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
        {
            url: "file/"+id,
            type: 'get',
            data: {
                "id": id,
                "_token": token,
            },
            success: function (){
                window.reload();

        });

    });
</script>
@endsection


