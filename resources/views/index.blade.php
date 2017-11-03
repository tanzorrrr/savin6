@extends('layouts.default')
@section('content')
    <div class="container">
        <row>
            @forelse ($artisles as $article)
                <article>
                    <h2>{{$article->title}}</h2>
                    <p>{{$article->body}}</p>
                    <i>{{$article->published}}</i>

                </article>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
        </row>
    </div>

    @endsection