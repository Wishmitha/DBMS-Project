{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sup_id', 'Sup_id:') !!}
			{!! Form::text('sup_id') !!}
		</li>
		<li>
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}