@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
        @slot('title') Создание записи @endslot
        @slot('parent') Главная @endslot
        @slot('active') записи @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.page.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.pages.partials.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection