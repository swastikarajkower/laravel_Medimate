<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom CSS Styles */
        .navbar-brand i {
            font-size: 1.5rem;
            margin-right: 5px;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5);
        }

        .navbar-nav .nav-link {
            padding-right: 10px;
        }

        .btn-logout {
            color: cyan;
        }

        .btn-logout:hover {
            color: #17a2b8;
            text-decoration: none;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .container img {
            max-width: 100%;
            height: auto;
        }

        h1 {
            color: #28a745;
            margin-bottom: 30px;
        }

        /* Footer Styling */
        footer {
            background-color: green;
            color: white;
            padding: 1px 0;
            position: relative;
            bottom:0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="doctor.index"><i class="fas fa-heart-pulse"></i> MEDIMATE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user/add_patient')}}">ADD PATIENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user/add_test')}}">ADD TEST</a>
                    </li>
                    
                </ul>
                <form method="POST" action="{{ route('logout') }}" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-link btn-logout">LOG OUT</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Dashboard</h1>
        <div class="text-center">
            <!-- Example of badge -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="{{ asset('storage/doc2.png') }}" alt="nothing" class="img-fluid rounded">
                </div>
            </div>
            <div class="container mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patient as $patient)
                        <tr>
                            <td>{{$patient->name}} {{$patient->lname}}</td>
                            
                            <td>{{$patient->registeres_at}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{url('user/view_pat',$patient->id)}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- <span class="badge bg-primary">New</span> -->
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 Medimate. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
