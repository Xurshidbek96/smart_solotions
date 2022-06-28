@extends('admin.layouts.layout')

@section('abouts')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add</h3>
                        <a class="create__btn" href="{{route('abouts.index')}}"> <i class='bx bx-arrow-back'></i>Back</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('abouts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea">English</label>
                        <textarea id="mytextarea" name="info_en">{{ old('info_en') }}</textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea1">Uzbek</label>
                        <textarea id="mytextarea1" name="info_uz">{{ old('info_uz') }}</textarea>
                        </div>

                        <input type="submit" value="Submit">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
      tinymce.init({
        selector: '#mytextarea1'
      });
      tinymce.init({
        selector: '#mytextarea2'
      });
    </script>


@endsection
