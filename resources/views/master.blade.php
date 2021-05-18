<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/chart.min.js" type="text/javascript"></script>
    <script src="./js/jquery.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <link href="./css/bootstrap_1.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <title>Gestion Ensaj</title>
    

<body>
    @include('partials.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>

    <script>
        $(document).ready(function(){
            $("#tablefiliere,#tableetudiant, #tableclasse").DataTable();
        });
      </script>
    
    
</body>
</html>