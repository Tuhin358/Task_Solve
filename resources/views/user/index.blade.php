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
              @foreach ($userdatas as $userdata)

              <tbody>
                <tr>
                    <td>{{ $userdata->id }}</td>
                    <td class="center">{{ $userdata->title }}</td>
                    <td class="center">{{ $userdata->short_desctiption }}</td>
                    <td class="center">{{ $userdata->date}}</td>
                    <td>
                        <img src="{{asset('/storage/user/'.$userdata->image) }}" style="width:100px; height:100px">

                    </td>

                    <td class="row">
                        <div class="span3"></div>

                        <div class="span4">

                        <a href="{{route('user.edit',$userdata->id) }}" class="btn btn-primary">Edit</a>

                        {{--  <button class="deleteRecord" data-id="{{$userdata->id }}" >Delete</button>  --}}
                        <a href="{{route('user.destroy',$userdata->id) }}" data-id="{{$userdata->id }}" class="deleteRecord btn btn-warning">Delete</a>

                    </div>

                    </div>
                        <div class="spamn3"></div>
                    </td>
                </tr>

              </tbody>
              @endforeach
          </table>
          {{$userdatas->links() }}
        </div>
    </div><!--/span-->

</div><!--/row-->
<script>
    $(".deleteRecord").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
        {
            url: "files/"+id,
            type:'get',
            data: {
                "id": id,
                "_token": token,
            },
            success: function (){
                window.reload();
            }
        });

    });
</script>
@endsection
