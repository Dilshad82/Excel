<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Upload Excel File  </title>
  </head>
  <body>
    <h1 class="bg-success text-center m-3 p-3 text-white">Import Data From Excel File Using Laravel </h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                
               <form action="{{url('/upload-data')}}" method="POST" enctype="multipart/form-data">
                   @csrf
                   <div id="errors"></div>
                   <div class="form-group">
                       <label for="">Upload Excel File </label>
                       <input type="file" name="excelFile" class="form-control"  >
                       {{ $errors->first('excelFile')}}
                   </div>
                   
                   <div class="form-group">
                       <input type="submit" value="Save File" class="btn btn-success">
                   </div>
               </form>

            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
  </body>
</html>