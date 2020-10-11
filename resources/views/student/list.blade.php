<table class="table">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Level</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $students as $student)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $student->name }}</td>
                <td>
                    @if ($student->gender === 'L')
                        Laki-Laki
                    @else
                        Perempuan
                    @endif
                </td>
                <td>
                    <span class="badge badge-primary">{{ $student->level }}</span>
                </td>
                <td>
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-light btn-sm font-weight-bold" type="submit">Delete</button>
                    </form>
                    <button class="btn btn-light btn-sm font-weight-bold" data-toggle="modal" data-target="#modalEditStudent-{{ $student->id }}">
                        Edit
                    </button>
                    @include('student.edit')
                    <form action="{{ route('student.payments') }}" method="GET" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="student_id" value="{{ $student->id }}">        
                        <button class="btn btn-sm btn-light font-weight-bold" type="submit">Keuangan</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
