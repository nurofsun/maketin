<div class="p-2 bg-white shadow-sm rounded-lg table-responsive">
    <table class="table bg-white table-white table-borderless text-muted align-middle">
        <thead>
            <tr class="align-middle">
                <th scope="col">
                    ID
                </th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            @if ($student->avatar)
                                <img class="avatar mr-2" src="{{ asset(Storage::url($student->avatar)) }}" alt="{{ $student->name }}">
                            @else
                                <img class="avatar mr-2" src="{{ asset('images/nurofsun.jpg') }}" alt="{{ $student->name }}">
                            @endif
                            <div>
                                <p class="name mb-0 font-weight-bold">{{ $student->name }}</p>
                                <p class="mb-0 small">
                                    <span class="level badge bg-primary">Level {{ $student->level }}</span>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        @if ($student->gender === 'L')
                            <span class="small">
                                <i class="fas fa-mars"></i>
                                Laki-Laki
                            </span>
                        @else
                            <span class="small">
                                <i class="fas fa-venus"></i>
                                Perempuan
                            </span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-light-danger btn-sm font-weight-bold" type="submit">
                                    <i class="fas fa-trash"></i>
                                    Hapus
                                </button>
                            </form>
                            <button 
                                       class="btn btn-light-dark btn-sm font-weight-bold" 
                                       data-toggle="modal" 
                                       data-target="#modalEditStudent-{{ $student->id }}">
                                       <i class="fas fa-pencil-alt"></i>
                                       Sunting
                            </button>
                            @include('student.edit')
                            <a href="{{ route("payment.index", $student->id ) }}" class="btn btn-light-primary btn-sm font-weight-bold" type="submit">
                                <i class="fas fa-money-bill-alt"></i>
                                Keuangan
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
