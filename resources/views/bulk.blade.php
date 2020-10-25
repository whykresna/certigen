<div class="modal fade" id="bulkUserModal" tabindex="-1" role="dialog" aria-labelledby="bulkUserModal"
     aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mass Add Participant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user.import') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="custom-file">
                            <input id="file" type="file" class="custom-file-input{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" value="{{ old('file') }}">
                            <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                        <div class="invalid-feedback">
                            {{ $errors->first('file') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
