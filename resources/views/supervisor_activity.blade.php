{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sup_id', 'Sup_id:') !!}
			{!! Form::text('sup_id') !!}
		</li>
		<li>
			{!! Form::label('act_id', 'Act_id:') !!}
			{!! Form::text('act_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}