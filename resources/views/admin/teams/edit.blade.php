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
                        <h3>Edit</h3>
                        <a class="create__btn" href="{{route('teams.index')}}"> <i class='bx bx-arrow-back'></i>Back</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('teams.update', $team[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong>Name en :</strong>
                        <input type="text" name="name_en" value="{{$team[0]->name_en}}" class="form-control"> <br>

                        <strong>Name uz :</strong>
                        <input type="text" name="name_uz" value="{{$team[0]->name_uz}}" class="form-control"> <br>

                        <strong>Position En :</strong>
                        <input type="text" name="position_en" value="{{$team[0]->position_en}}" class="form-control"> <br>

                        <strong>Position Uz :</strong>
                        <input type="text" name="position_uz" value="{{$team[0]->position_uz}}" class="form-control"> <br>

                        <strong>Info En :</strong>
                        <input type="text" name="info_en" value="{{$team[0]->info_en}}" class="form-control"> <br>

                        <strong>Info Ru :</strong>
                        <input type="text" name="info_uz" value="{{$team[0]->info_uz}}" class="form-control"> <br>

                         <strong>Image : </strong> <br>
                         <img src="{{URL::to($team[0]->img)}}" width="100px">
                        <input type="file" name="img" value="{{$team[0]->img}}">
                        

                        <input type="submit" value="Submit">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->
@endsection
