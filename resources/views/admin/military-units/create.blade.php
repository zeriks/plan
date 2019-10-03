@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('components.breadcrumb')
            @slot('title') Add military unit @endslot
            @slot('parent') Admin panel @endslot
            @slot('active') Add military unit @endslot
        @endcomponent
            <form action="{{route('admin.military-unit.store')}}" method="post">
                {{csrf_field()}}
                @include('admin.military-units.partials.form')

                <input type="hidden" name="created_by" value="{{Auth::id()}}">
            </form>
    </div>
@endsection
