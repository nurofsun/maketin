<div class="p-2 bg-white shadow-sm rounded-lg table-responsive">
    <table class="table bg-white table-white table-borderless text-muted align-middle">
        <thead>
            <tr class="align-middle">
                <th scope="col">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Cari sesuatu...">
                    </div>
                </th>
                <th scope="col">Level</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $students as $student)
                <tr class="border-bottom">
                    <td>
                        <div class="d-flex p-2 align-items-center">
                            <img width="48" class="mr-2 rounded-pill" src="{{ asset('images/nurofsun.jpg') }}" alt="">
                            <div>
                                <p class="name mb-0 font-weight-bold">{{ $student->name }}</p>
                                <p class="gender mb-0">
                                    no contact information added.
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>{{ $student->level }}</td>
                    <td>
                        @if ($student->gender === 'L')
                            <small>Laki-Laki</small>
                        @else
                            <small>Perempuan</small>
                        @endif
                    </td>
                    <td>
                        <span class="badge badge-primary">{{ $student->level }}</span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-light btn-sm font-weight-bold" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <button 
                                       class="btn btn-light btn-sm font-weight-bold" 
                                       data-toggle="modal" 
                                       data-target="#modalEditStudent-{{ $student->id }}">
                                       <i class="fas fa-pencil-alt"></i>
                            </button>
                            @include('student.edit')
                            <a href="{{ route("payment.index", $student->id ) }}" class="btn btn-sm btn-light font-weight-bold" type="submit">
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
