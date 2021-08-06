<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
        <title>{{ config('app.name', 'SQLearn') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!--bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @livewireStyles

        <!-- DataTables -->
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->

            <!-- Page Content -->
            <main>
                
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- JQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- bootstrap js-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      
<!-- ajax to fetch data-->
        <script>

            $(document).ready(function(){
            
                

                //this method fetches the results
                    function fetchcertificates(getafm){
                        $.ajax({
                            type:"GET",
                            url:"fetchcerts",
                            data:{'search':getafm},
                            success:function(data){
                                
                                $('#results').html(data);

                            }

                        });//end ajax
                    
                    }//end method



            $(document).on('click', '.show_credential_info', function(e){
                e.preventDefault();
                //if button clicked get the valueof the input text with id=search 
                var getafm= $("#search").val();
                //call the method for ajax results with a parameter of the input text field of afm to fetch 
                //all the certificates of a users with that afm
                fetchcertificates(getafm);

            });






            });

</script>
    
    </body>
</html>
