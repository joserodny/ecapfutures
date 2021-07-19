@extends('layouts.manager')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
       
        <div class="row">
            <div class="col ">
              <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                  <h3 class="text-white mb-0">Scholar Applicant</h3>
                </div>
                <div class="table-responsive ">
                  <table class="table align-items-center table-dark table-flush" id="test">
                    <thead class="thead-dark ">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">Full Name</th>
                        <th scope="col" class="sort" data-sort="budget">Contact No#</th>
                        <th scope="col" class="sort" data-sort="status">Email</th>
                        <th scope="col">Facebook profile</th>
                       
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="list">
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

    </div>
@endsection

@push('js')
<script type="text/javascript">
  $(function () {
    
    $('#test').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('manager.scholarTable') }}"
        },
        columns: [
            {data: 'imagename', name: 'imagename'},
            {data: 'contactno', name: 'contactno'},
            {data: 'email', name: 'email'},
            {data: 'facebook', name: 'facebook'},
            {data: 'action', name: 'action', orderable: false, searchable: true},
        ]
    });
    
  });

</script>
  <!-- Optional JS -->
  <script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
 
@endpush