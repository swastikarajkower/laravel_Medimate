<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @media print {
            .navbar {
                display: none !important;
            }
        }
    </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href=""><i class="fa-solid fa-heart-pulse"></i> MEDIMATE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</nav>
<div class="container py-5">
    <h1 class="mb-4">Prescription</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <strong>Name:</strong> {{$patient->name}} {{$patient->lname}} <br>
                <strong>Age:</strong> {{$patient->age}} <br>
                <strong>Registered At:</strong> {{$test->Test_date}} <br>
                <strong>Remarks:</strong> {{$pres->remarks}} <br>
                <strong>Recommended Test:</strong> {{$test->recommend_test}} {{$test->test1}} {{$test->test2}} <br>
                <strong>Medicine:</strong> {{$med->medicine}}
            </p>
            <button class="btn btn-primary" onclick="window.print()">Print</button>
        </div>
    </div>
</div>
<script>
        // $(document).ready(function(){

            //FOR ADD ROWS
            // $('.addField').click(function(){
            //     $('.firstRow').parent().append(`
            //         <div class="row">
            //             <div class="col-md-6 form-group">
            //                 <input type="text" name="names[]" required placeholder="Enter Text" class="w-100">
            //             </div>
            //             <div class="col-md-4 form-group">
            //                 <input type="file" name="filess[]" required class="w-100">
            //             </div>
            //             <div class="col-md-2 form-group">
            //                 <button type="button" class="btn btn-danger deleteRow">Remove</button>
            //             </div>
            //         </div>
            //     `);
            // });

            //FOR DELETE ROWS
            $(document).on('click','.deleteRow',function(){
                $(this).parent().parent().remove();
            });
        // });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   

</body>
</html>
