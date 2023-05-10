
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="#">{{$category->title}}</a>
                    <ul>

                        @foreach($category->children as $childrenCategory)
                            <li><a href="#">{{$childrenCategory->title}}</a></li>
                        <!--
                         *زمانی که زیر مجوعه زیر مجموعه دیگری نیز داشته باشد از کد زیر جهت نمایش استفاده می کنیم
                        -->
                        <ul>
                            @if($childrenCategory->children->count() > 0)
                            @foreach($childrenCategory->children as $subCategory)
                                    <li><a href="#"></a>{{$subCategory->title}}</li>
                            @endforeach
                            @endif
                        </ul>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
