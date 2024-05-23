<!-- Modal -->
<div class="modal fade" style="background: #0c2d57;" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('user.delete') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" id="delete_id">
                <div class="modal-body">
                    <center  style="padding: 2rem 2rem 0 2rem;">
                        <h1>Are You Sure?</h1>
                        <h6>You want to Delete the user!</h6>
                    </center>
                </div>
                <div class="row">
                <center  style="padding: 0 2rem;">
                        <button type="button" class="btn btn-danger btn-modal" data-bs-dismiss="modal">Cancel</button>
                    
                   
                        <button type="submit" class="btn btn-success btn-modal">Delete</button>
                        </center>
                </div>
            </form>
        </div>
    </div>
</div>