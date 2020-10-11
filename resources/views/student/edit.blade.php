<div class="modal" tabindex="1" id="modalEditStudent-{{ $student->id }}">
    <div class="modal-dialog">
        <form class="modal-content" id="editForm-{{ $student->id }}" action="{{ route('student.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title mb-0">Edit Student Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <input 
                     class="form-control" 
                     type="text" 
                     name="edit_name" 
                     value="{{ $student->name }}"
                     required
                     placeholder="Nama Lengkap">
                </div>
                <div class="mb-2">
                    <input 
                     class="form-control" 
                     type="number" 
                     name="edit_level" 
                     value="{{ $student->level }}"
                     required
                     placeholder="Level">
                </div>
                <div class="mb-2">
                    <select class="custom-select" name="edit_gender" required>
                        <option 
                          value="L" 
                          @if ($student->gender === 'L') selected @endif>
                          Laki-laki
                        </option>
                        <option 
                          value="P" 
                          @if ($student->gender === 'P') selected @endif>
                          Perempuan
                        </option>
                    </select>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                @endif
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-target="#editForm-{{ $student->id }}">Save</button>
            </div>
        </form>
    </div>
</div>
