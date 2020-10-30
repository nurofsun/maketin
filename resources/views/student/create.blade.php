<form method="POST" enctype="multipart/form-data" action="{{ route('student.store') }}" id="modalNewStudent" class="modal fade">
    @csrf                            
    <section class="modal-dialog">
        <div class="modal-content">
            <header class="modal-header">
                <h5 class="mb-0 modal-title">Formulir Santri Baru</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </header>
            <div class="modal-body">
                <div class="mb-3">
                    @if ($errors->any())
                        <div class="p-3">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="userid">userID</label>
                    <input class="form-control" id="userid" type="text" placeholder="userID" name="id">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input name="name" class="form-control" type="text" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="avatar">
                        <label class="custom-file-label">
                            <span>Pilih Foto Profil</span>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <input name="level" class="form-control" type="number" placeholder="Level">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="custom-select" name="gender">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <footer class="modal-footer">
                <button class="btn btn-primary" type="submit">
                    Simpan
                    <i class="fas fa-save"></i>
                </button>
            </footer>
        </div>
    </section>
</form>
