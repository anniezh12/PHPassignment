

			{!! Form::open(['url' => '/']) !!}
			<div class="form-group">
				<div class="row col-md-auto">
			 {{Form::label('categorie', 'Categorie(s)')}}
			 {{Form::text('category','')}}
			</div>
			<div class="col-md-auto">
			 {{Form::label('item', 'Item(s)')}}
			 {{Form::text('item','')}}
			</div>
			</div>
			{{Form::submit('Submit')}}

			    
			{!! Form::close() !!}
						
