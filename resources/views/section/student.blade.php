<section class="santri py-3">
    <div class="d-flex align-items-center justify-content-between py-3">
        <h3 class="title h5 font-weight-normal">
            <span class="border-bottom">Santri</span>
        </h3>
        @include('student.create')
        <button class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#modalNewStudent">
            <span class="icon mr-2"><i class="fas fa-plus"></i></span>
            <span >Santri Baru</span>
        </button>
    </div>
    @include('student.list')
</section>
