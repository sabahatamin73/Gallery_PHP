  
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Photo') }}
        </h2>
    </x-slot>
    {!! Form::open(array('url' => route('photo.store'), 'method' => 'post', 'enctype' =>"multipart/form-data")) !!}	
    {!! Form::label('photo', 'photo :') !!}	   <br>   <br>
		    {!! Form::file('photo') !!}   <br>   <br>
        {!! Form::label('category_id', 'Category :') !!}   <br>   <br>
            {!! Form::select('category_id', $add_photo) !!} <br>   <br>
        {!! Form::submit('Add') !!}
    {!! Form::close() !!}


</x-app-layout>