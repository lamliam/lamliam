@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading"> Add Blog Post</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form method="POST" action="{{route('store.blog.post')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Post Title <span class="text-danger">*</span></label>
                                        <input type="text" name="post_title" id="post_title" class="form-control" required="">
                                        @error('post_title')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Select Blog Category <span class="text-danger">*</span></label>
                                        <select name="category_id" class="form-control" required="">
                                            <option value="" selected="" disabled="">--select category--</option>
                                            @foreach($blogCategory as $category)
                                            <option value="{{$category->id}}">{{$category->blog_category_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="white-box">
                                            <label class="control-label">Post Image <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" data-max-file-size="2M" name="post_image" required="" onchange="mainThumbUrl(this)" />
                                            <img src="" id="mainThumb">
                                            @error('post_image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Post Description</label>
                                        <textarea id="editor1" name="post_details" rows="5" cols="80"></textarea>
                                        @error('post_details')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions text-center">
                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Add Blog Post">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- for thumbnail show image -->
<script type="text/javascript">
    function mainThumbUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThumb').attr('src', e.target.result).width(80).height(80);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection