

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
           
            

                    <div class="container">
                        <div class="row">

                                <div class="col-sm-12" class="text-align:center">

                               
                         
                                <div id="admin" class="text-align:center"> <h1 >Admin Area</h1></div>
                                       
                                </div>
                        </div>

                        <div class="row">
                                 <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                           
                                            <div class="card-body">
                                                <h5 class="card-title">Register a user</h5>
                                                <p class="card-text">In this section you can register a new user</p>
                                                <a href="{{route('register-user')}}" class="btn btn-primary">Register</a>
                                            </div>
                                            </div>
                                    </div>



                          



                                <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                           
                                            <div class="card-body">
                                                <h5 class="card-title">All Users</h5>
                                                <p class="card-text">In this section you can view the users</p>
                                                <a href="{{route('showusers')}}" class="btn btn-primary">Show Users</a>
                                            </div>
                                            </div>
                                    </div>




                                <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                           
                                                    <div class="card-body">
                                                        <h5 class="card-title">Certificates</h5>
                                                        <p class="card-text">In this section you can view the certificates data</p>
                                                        <a href="{{route('showcerts')}}" class="btn btn-primary">Cerificates</a>
                                                    </div>
                                            </div>
                                    </div>

                                    <div class="col-sm-3">
                                            <div class="card" style="width: 18rem;">
                                           
                                                    <div class="card-body">
                                                        <h5 class="card-title">CSV</h5>
                                                        <p class="card-text">Import certificates data - CSV format</p>
                                                        <a href="{{route('importform')}}" class="btn btn-primary">Import CSV</a>
                                                    </div>
                                            </div>
                                    </div>



                               


                        </div><!-- end row -->






                    </div><!-- end container -->



            
        </div>
    </div>
</div>

</x-app-layout>

