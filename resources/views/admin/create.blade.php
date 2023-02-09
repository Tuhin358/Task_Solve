@extends('admin')
@section('admin_content')

{{--  @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif  --}}


<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>

        <h2><i class="halflings-icon edit"></i><span class="break"></span>Admin</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01"> Title</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="title" required>
                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Short_Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="short_desctiption" rows="3" required></textarea>
                    </div>

                </div>



                <div class="control-group">
                    <label class="control-label" for="date01">Date</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="date" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label">File Upload</label>
                    <div class="controls">
                        <input type="file" name="image">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->


@endsection
