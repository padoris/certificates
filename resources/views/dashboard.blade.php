

<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
    </x-slot>

    <div class="py-4">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" style="text-align:center;">
                     <div class="input-group">
                                    <input type="search" id="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                        aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-warning show_credential_info">search</button>
                    </div>
                </div>
        
    
    </div>

<div class="py-12">
    
           
            

                    <div class="container">
                        <div class="row">

                                <div class="col-sm-12">

                               
                            <!-- In this div the ajax results will appear-->
                                <div id="results"></div>

                                </div><!-- end col -->


                        </div><!-- end row -->






                    </div><!-- end container -->



            
     
</div>

</x-app-layout>

