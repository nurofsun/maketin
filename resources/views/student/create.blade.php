<section class="form-student bg-white shadow-sm rounded-lg p-3 mt-5">
    <h5 class="title mb-3">Formulir Santri Baru</h5>
    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
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
            <label class="form-label" for="userid">userID</label>
            <input class="form-control" id="userid" type="text" placeholder="userID" name="id">
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
        <button class="btn btn-primary" type="submit">
            Simpan
            <i class="fas fa-save"></i>
        </button>
    </form>
</section>
