@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Редактирование статьи</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('posts.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Редактирование статьи: {{ $post->title}}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('posts.update', ['post'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Название статьи</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"  value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="description">Краткое описание</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="2">{{ $post->description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="content">Содержание статьи</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5">{{$post->content}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                        @foreach ($categories as $k=>$value)
                            <option value="{{ $k }}"
                            @if ($k == $post->category_id)
                                selected
                            @endif
                            >{{ $value }}</option>
                        @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tags">Теги статьи</label>
                    <select class="select2 @error('tag_id') is-invalid @enderror"  name="tags[]" multiple="multiple" data-placeholder="Выбор тегов" style="width: 100%;">
                      @foreach ($tags as $k=>$v)
                        <option value="{{ $k }}"
                        @if (in_array($k,$post->tags->pluck('id')->all()))
                            selected
                        @endif
                        >{{ $v }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="thumdnail">Изображение</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="thumdnail" class="custom-file-input" id="thumdnail">
                        <label class="custom-file-label" for="thumdnail">Выбираем картинку</label>
                      </div>
                    </div>
                    <div><img src="{{asset("uploads/".$post->thumdnail)}}" width = "200px"/></div>
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>
            </form>
          </div>
      <!-- Default box -->
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection
