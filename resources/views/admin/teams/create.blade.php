@extends('admin.layouts.layout')

@section('teams')
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
                        <a class="create__btn" href="{{route('teams.index')}}"> <i class='bx bx-arrow-back'></i>Back</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('teams.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong>Name en :</strong>
                        <input type="text" name="name_en" class="form-control"> <br>

                        <strong>Name uz :</strong>
                        <input type="text" name="name_uz" class="form-control"> <br>

                        <strong>Position En :</strong>
                        <input type="text" name="position_en" class="form-control"> <br>

                        <strong>Position uz :</strong>
                        <input type="text" name="position_uz" class="form-control"> <br>

                        <strong>Info En :</strong>
                        <input type="text" name="info_en" class="form-control"> <br>

                        <strong>Info uz :</strong>
                        <input type="text" name="info_uz" class="form-control"> <br>

                         <strong>Image</strong>
                        <input type="file" name="img" class="form-control">

                        <input type="submit" value="Submit">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->

@endsection
