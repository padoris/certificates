

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

                <a href="{{route('showusers')}}" type="button" class="btn btn-primary">Χρήστες</a>
                </div>
                
                <div class="col-sm-2">
                <a href="{{route('showcerts')}}" type="button" class="btn btn-primary">Πιστοποιητικά</a>
                </div>
             
                <div class="col-sm-3">
                <a href="{{route('register-user')}}" type="button" class="btn btn-primary">Καταχώρηση</a>
                </div>

                <div class="col-sm-2">
                <a href="#" type="button" class="btn btn-primary">CSV</a>
                </div>
          
               
               
                </div>
        </div>
    </div>
    </div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
            

                    <div class="container">
                        <div class="row">

                                <div class="col-sm-12" class="text-align:center">

                               
                         
                                <div id="admin" class="text-align:center"> <h1 >CSV Area</h1></div>
                                       
                                </div>
                        </div>

                        <div class="row">
                                 <div class="col-sm-6">
                                            <div class="card" style="width: 18rem;">
                                           
                                            <div class="card-body">
                                               <form method="POST" enctype="multipart/form-data" action="{{route('import')}}">
                                               @csrf
                                               <div class="form-group">
                                               <label for="file">Choose CSV</label>
                                               <input type="file" name="file" class="form-control">
                                               
                                               </div>
                                               <button type="submit" class="btn btn-primary">Submit</button>
                                               
                                               
                                               </form>
                                            </div>
                                            </div>
                                    </div>



                          



                             


                               


                        </div><!-- end row -->






                    </div><!-- end container -->



            
        </div>
    </div>
</div>

</x-app-layout>

