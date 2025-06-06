<div class="modal fade" id="modal-logout" aria-hidden="true">
    <div class="modal-dialog">
        <form id="logout-form" action="/logout" method="post">
            @csrf
            @method('POST')
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Logout</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure want to logout ?</p>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-danger">Logout</button>
              </div>
            </div>
        </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>