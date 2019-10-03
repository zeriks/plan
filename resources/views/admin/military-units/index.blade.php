@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('components.breadcrumb')
            @slot('title') Military units @endslot
            @slot('parent') Admin panel @endslot
            @slot('active') Military units @endslot
        @endcomponent
        <a href="{{route('admin.military-unit.create')}}" class="btn float-right"><i
                class="fas fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
            <th>title</th>
            <th>status</th>
            <th class="text-right">action</th>
            </thead>
            <tbody>
            @forelse($militaryUnits as $militaryUnit)
                <tr>
                    <td>{{$militaryUnit->title}}</td>
                    <td>{{$militaryUnit->status ? 'active': 'disabled'}}</td>
                    <td class="text-right">
                        <form action="{{route('admin.military-unit.destroy', $militaryUnit)}}" method="post"
                              onsubmit="if (confirm('delete?')){return true}else{return false}">
                            {{csrf_field()}}
                            @method('DELETE')

                            <a href="{{route('admin.military-unit.edit', $militaryUnit)}}">
                                <i class="far fa-edit"></i>
                            </a>
                            <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>empty</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pul-right">
                        {{$militaryUnits->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
