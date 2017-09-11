@extends('master.master-public')

@section('section_accueil')

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                WELCOME Laravel
            </div>
        </div>
    </div>

    {{$var}}
    {{$FichePersonnelleText}}

    {!! $fichepersonnelle_partial !!}

    @foreach($FichePersonnelleAllData as $fp)

        <h3>
            {{ $fp->titre }}
        </h3>
        <p>
            {{ $fp->description }}
        </p>
        <p>
            {{ $fp->resume }}
        </p>
        <p>
            {{ $fp->date_du }}
        </p>

    @endforeach


@stop
