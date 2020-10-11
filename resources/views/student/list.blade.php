<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Level</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
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
                    <form action="{{ route('payment.history') }}" method="GET" class="d-inline-block">
                        @csrf
                        <input type="number" name="student_id" value="{{ $student->id }}">        
                        <button class="btn btn-sm btn-light font-weight-bold" type="submit">Keuangan</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
