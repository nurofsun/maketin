<div class="modal" id="modalNewStudent">
    <div class="modal-dialog">
        <section class="modal-content">
            <header class="modal-header">
                <h5 class="modal-title">Santri Baru</h5>
            </header>
            <div class="modal-body">
                @if ($errors->any())
                    <div class="p-3">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
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
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>