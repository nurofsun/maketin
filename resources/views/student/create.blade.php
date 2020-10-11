@if ($errors->any())
    <div class="p-3">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    </div>
@endif
<form class="shadow rounded-sm p-3" action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="mb-2">
        <h5>Formulir Pendaftaran</h5>
    </div>
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
