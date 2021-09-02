{{ Form::open([
    'id' => 'frmProfile',
    'data-parsley-validate'=>true,
    'autocomplete' => 'off',
]) }}

@method('PATCH')

<div
        class="modal fade right modal-right modal-notify profile-modal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="chapterModal"
        aria-hidden="true"
>
    <!--MODAL -->
    <div class="modal-dialog modal-full-height modal-right modal-lg" role="document">
        <div class="modal-content">
            <!--MODAL HEADER-->
            <div class="modal-header border-bottom">
                <h5 class="modal-title text-primary font-weight-bold">
                    Información del Usuario
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--MODAL HEADER-->

            <!-- MODAL BODY -->
            <div class="modal-body">
                <div class="container">

                    @include('admin/users/fields',['module'=>'Profile'])

                </div>
            </div>
            <!-- MODAL BODY -->

            <!-- MODAL HEADER -->
            <div class="modal-footer border-top">
                <button type="button" class="btn btn-md btn-secondary btn-rounded" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                    Cancelar
                </button>
                <button type="submit" class="btn btn-md btn-primary btn-rounded">
                    <i class="fas fa-check"></i>

                    Guardar cambios
                </button>
            </div>
            <!--MODAL HEADER -->

        </div>
    </div>
    <!--MODAL-->
</div>

{{ Form::close() }}
