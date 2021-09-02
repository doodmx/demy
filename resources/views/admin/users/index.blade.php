@extends('layouts.admin.app')

@section('breadcrumb')

    @include('_partials/breadcrumb',[
          'module'=>'Usuarios',
          'routes' =>[
                [
                  'description' => 'Inicio',
                  'url' => route('welcome')
              ],
              [
                  'description' => 'Usuarios'
              ]

          ]
        ])

@endsection

@section('content')

    @include('admin.users.modals.profile')
    @include('admin.users.modals.change_role')
    @include('admin.users.modals.reset_password')


    <div class="container text-secondary shadow p-5 rounded">


        <div class="row justify-content-end">
            <div class="col-sm-4">
                {{ Form::select('role',$roleSelect, 'Partner',[
                    'id' =>'filterRole',
                    'class' => 'mdb-select md-form colorful-select dropdown-secondary pt-2 my-0'
                ]) }}
                <label class="mdb-main-label" for="selectRole">Status:</label>
            </div>
        </div>
        {!! $dataTable->table(['width' => '100%']) !!}
    </div>

@endsection


@section('scripts')

    {!! $dataTable->scripts() !!}
    <script type="text/javascript" src="{{asset(mix('js/admin_panel/user/index/app.js'))}}"></script>
@endsection
