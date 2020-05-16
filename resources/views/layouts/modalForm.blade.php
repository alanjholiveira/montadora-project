<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">@yield('title')</h5>
        </div>
        <div class="modal-body">@yield('content')</div>

        <div class="modal-footer">
            <button type="submit" form="formInput" class="btn btn-success">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
                <span class="text">Salvar</span>
            </button>

            <button type="button" data-dismiss="modal" class="btn btn-primary">
            <span class="icon text-white-50">
                <i class="fas fa-times"></i>
            </span>
                <span class="text">Cancelar</span>
            </button>
        </div>
    </div>
</div>
