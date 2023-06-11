@extends( 'layout.app' )

@section ('title-page')
ModelContoller | Movies
@endsection

@section( 'content-main' )

    <div class="text-center p-5">
        <h1>Pagina Movies</h1>
    </div>

    <div class="container mb-5">
        <div class="d-flex flex-wrap gap-3 justify-content-evenly">

            @foreach($movies as $elem)
            <div class="card col-5 p-2">
                <span class="fst-italic">
                    Movie #{{$elem['id']}}
                </span>

                <h2 class="text-center my-4">
                    {{$elem['title']}}
                </h2>

                <div class="d-flex justify-content-evenly">
                    <span>Data di uscita: {{$elem['date']}}</span>
                    <span>Voto: {{$elem['vote']}}</span>
                </div>
            </div>
            @endforeach

        </div>
       
        

    </div>
    

@endsection