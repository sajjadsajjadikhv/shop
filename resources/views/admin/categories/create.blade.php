@extends('admin.layout.masters')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ایجاد دسته بندی</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="fom-group">
                                <label for="category_id">دسته بندی اصلی</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="" disabled selected>دسته بندی اصلی را انتخاب کنید...</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select></div>
                        <div class="form-group">
                            <label for="title">منوان</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ثبت دسته بندی" name="submit" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
