@extends('layouts.admin.app')

@section('breadcrumb')

    @include('_partials/breadcrumb',[
          'module'=>'Crear Rol',
          'routes' =>[
                [
                  'description' => 'Inicio',
                  'url' => route('welcome')
              ],
              [
                  'description' => 'Roles',
                  'url' => route('roles.index')
              ],
              [
                  'description' =>'Nuevo ',

              ]
          ]
        ])


@endsection

@section('content')
    {{ Form::open([
          'id' => 'frmRole',
          'data-parsley-validate'=>true,
          'data-action'=>route('roles.store')
      ])
   }}

    <div class="container shadow text-secondary rounded">


        <div class="row">
            <div class="col-12 p-0 m-0">
                <!--Card -->
                <div class="px-5 m-0" id="roleCard">
                    <!--Card content -->
                    <div class="card-body p-0">
                        <!-- Role  form -->

                    {{ Form::hidden('_method','POST') }}
                    @include('admin.roles.fields')



                    <!-- Role form -->
                    </div>
                </div>
                <!--Card -->
            </div>
        </div>
    </div>
    {{ Form::close() }}
@endsection

@section('scripts')
   <script src="{{ asset(mix('js/admin_panel/role/app.js')) }}"></script>
@endsection()
