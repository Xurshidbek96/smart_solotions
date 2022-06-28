@extends('admin.layouts.layout')

@section('teams')
active
@endsection

@section('content')

<!-- MAIN -->
		<main>
			

			@if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Team</h3>
						<a class="create__btn" href="{{route('teams.create')}}"> <i class='bx bxs-folder-plus'></i>Create</a>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Name En</th>
								<th>Rasmi</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($team) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($team as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name_en}}</td>
									<td><img src="{{URL::to($p->img)}}" width="200px"></td>
									
									<td>
										<form action="{{ route('teams.destroy',$p->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('teams.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$team->links()}}
				</div>
				
			</div>
		</main>
		<!-- MAIN -->

@endsection