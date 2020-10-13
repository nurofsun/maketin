<section class="shadow-sm rounded-lg bg-white">
    <header>
        <h5 class="mb-0 border-bottom px-3 py-3 h6">Formulir Santri Baru</h5>
    </header>
    <form action="{{ route('student.store') }}" method="POST" id="modalNewStudent" class="p-3">
        @csrf                            
        @if ($errors->any())
            <div class="p-3">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <div class="mb-2">
            <label>Nama Lengkap</label>
            <input name="name" class="form-control" type="text" placeholder="Nama Lengkap">
        </div>
        <div class="mb-2">
            <label>Level</label>
            <input name="level" class="form-control" type="number" placeholder="Level">
        </div>
        <div class="mb-2">
            <label>Jenis Kelamin</label>
            <select class="custom-select" name="gender">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-2">
            <button class="btn btn-primary" type="submit">
                Simpan
                <i class="fas fa-save"></i>
            </button>
        </div>
    </form>
</section>
