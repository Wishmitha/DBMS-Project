{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sport_name', 'Sport_name:') !!}
			{!! Form::text('sport_name') !!}
		</li>
		<li>
			{!! Form::label('team', 'Team:') !!}
			{!! Form::text('team') !!}
		</li>
		<li>
			{!! Form::label('logo', 'Logo:') !!}
			{!! Form::text('logo') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}