@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Edit Shop Details</div>

                        <div class="panel-body">
                          {!! Form::model($shop, ['route' => ['store.update', $shop->id], 'method' => 'PUT']) !!}


                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ["class" => 'form-control input-lg']) !!}


                            {!! Form::label('description', 'Name:', ["class" => 'form-spacing-top']) !!}
                            {!! Form::text('description', null, ["class" => 'form-control input-lg']) !!}


                            {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                          {!! Form::close() !!}












                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
