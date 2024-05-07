@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Изменить пост</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Изменить пост</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" class="form-control"  name="title" id="exampleInputEmail1" value="{{ $posts->title }}" id="description">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Описание</label>
                    <input type="text" class="form-control"  name="description" id="exampleInputEmail1" value="{{ $posts->description }}" id="content">
                  </div>
                  <div class="form-group">
                        <label>Контент</label>
                        <!-- <textarea class="form-control" name="content" rows="3" value="{{ $posts->content }}"></textarea> -->
                        <div id="editor"></div>
                  </div>
                  <div class="form-group">
                        <label>Категории</label>
                        <select class="form-control" name="category_id">
                        @foreach($categories as $category => $title)
                          <option value="{{ $title }}">{{ $categories }}</option>
                        @endforeach
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Теги</label>
                        <select class="form-control" name="tags[]" multiple>
                        @foreach($tags as $tag => $title)
                          <option value="{{ $title }}" @if(in_array($tag, $post->tags->pluck($id)->all())) selected @endif>{{ $tag }}</option>
                        @endforeach
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Выбор картинки</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="thumbnail">
                        <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Применить изменения</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
</div>
@endsection