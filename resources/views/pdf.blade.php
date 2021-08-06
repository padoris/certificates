<!DOCTYPE html>
  <html>
  
  <head>
  <meta charset="utf-8">
    <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <style>

       
        @font-face {
            font-family: 'DejaVuSans'; 
            src: url({{ storage_path('font/DejaVuSans.ttf') }});
            font-weight: 400; 
            font-style: normal;
         }        
      
            body { font-family: DejaVu Sans, sans-serif; }
       
      </style>
  </head>
  
 <body>
  <div class="container">


  <div class="row">
            <div class="col-sm-12" style="text-align:center;">
            <h1>SQLearn</h1>
            
            </div>
  </div>

  <div class="row">
            <div class="col-sm-12">
<table class="table table-bordered table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">

                    <tbody>
                            @foreach($certificate_to_print as $row){
                              
                                <tr>
                           
                                <th scope="col">ΑΦΜ : </th><td>{{$row->afm}}</td>
                                </tr>

                                <tr>
                                <th scope="col">Όνομα : </th><td>{{$row->name}}</td>
                                </tr>

                                <tr>
                                <th scope="col">Επίθετο : </th><td>{{$row->surname}}</td>
                                </tr>

                                <tr>
                                <th scope="col">Μάθημα : </th><td>{{$row->course}}</td>
                                </tr>
                                <tr>
                                <th scope="col">email : </th><td>{{$row->email}}</td>
                                </tr>

                                <!--<tr>
                                <th scope="col">Πλατφόρμα : </th><td>{{$row->platform}}</td>
                                </tr>

                                <tr>
                                <th scope="col">Τομέας : </th><td>{{$row->tomeas}}</td>
                                </tr>

                                <tr>
                                <th scope="col">ID Μαθήματος : </th><td>{{$row->course_id}}</td>
                                </tr>-->

                                    <tr>
                                    <th scope="col">Ημερομηνία Ολοκλήρωσης : </th><td>{{$row->cert_date}}</td>
                                </tr>

                               <!-- <tr>
                                <th scope="col">ID Πιστοποίησης : </th><td>{{$row->unigue_cert_id}}</td>
                
                                </tr>-->
                                
                                
                            @endforeach
                        
                
                        </tbody>
                </table>

                </div>
  </div>
  <div class="row">
            <div class="col-sm-12">
            <link rel="icon" type="image/png" href="{{asset('images/footer.jpg') }}">
            </div>
  </div>
  </body>
  </div><!-- end container -->
  </html>
