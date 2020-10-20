<form action="{{ route('student.store') }}" method="POST" id="modalNewStudent" class="modal" enctype="multipart/form-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <header class="modal-header">
                <h3 class="modal-title mb-0">Santri Baru</h3>
            </header>
            <div class="modal-body">
                @csrf                            
                @if ($errors->any())
                    <div class="p-3">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="mb-3">
                    <div class="form-file">
                        <input type="file" class="form-file-input" name="avatar">
                        <label class="form-file-label">
                            <span class="form-file-text">Pilih Foto Profil...</span>
                            <span class="form-file-button">Browse</span>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input name="name" class="form-control" type="text" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <input name="level" class="form-control" type="number" placeholder="Level">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="gender">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-item">
                    <button class="btn btn-primary" type="submit">
                        Simpan
                        <i class="fas fa-save"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
