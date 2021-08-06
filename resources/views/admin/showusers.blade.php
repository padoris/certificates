<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
    </x-slot>
    <!--<div class="py-4">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" style="text-align:center;">
                     <div class="input-group">
                                    <input type="search" id="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                        aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-warning show_credential_info">search</button>
                    </div>
                </div>
        
    </div>-->
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
            


                <div class="container" style="text-align:center;">

                <dv class="row">
                <div class="col-sm-2">

                <a href="{{route('redirects')}}" type="button" class="btn btn-primary">Αρχική</a>
                </div>
                <div class="col-sm-3">

                <a href="#" type="button" class="btn btn-primary">Χρήστες</a>
                </div>
                
                <div class="col-sm-2">
                <a href="{{route('showcerts')}}" type="button" class="btn btn-primary">Πιστοποιητικά</a>
                </div>
             
                <div class="col-sm-3">
                <a href="{{route('register-user')}}" type="button" class="btn btn-primary">Καταχώρηση</a>
                </div>

                <div class="col-sm-2">
                <a href="{{route('importform')}}" type="button" class="btn btn-primary">CSV</a>
                </div>
          
               
               
                </div>
        </div>
    </div>
    </div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
            


        <div class="container">
    <h1>Χρήστες</h1>
    
    <table class="table table-bordered data-table">
        <thead>
            <tr>          
                <th>Ονομα</th>
                <th>Email</th>
                
                <th>Role</th>
    
                <!--<th width="300px">Action</th>-->
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   

            
        </div>
    </div>
</div>

</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('showusers') }}",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},  
          
            {data: 'role', name: 'role'},      
      
        ]
    });

  });
</script>
