<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="index1.html"><i class="fa-solid fa-heart-pulse"></i> MEDIMATE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('doctor/prescription')}}">PRESCRIPTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('doctor/recommended_test')}}">TEST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('doctor/view_medicine')}}">MEDICINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user/view_patient')}}">VIEW PATIENT</a>
            </li>
                </ul>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" style="text-decoration:none; color:white;">
                        {{ __('LOG OUT') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4 class="card-title">Test recommend</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('upload_recommend')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="doctor_id" class="form-label">Doctor</label>
                                <select name="doctor_id" class="form-control">
                                    @foreach($user as $users)
                                    <option value="{{$users->id}}">{{$users->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="Pres_id" class="form-label">Prescription No.</label>
                                <input type="number" class="form-control" id="Pres_id" name="Pres_id">
                            </div> -->
                            <div class="mb-3">
                                <label for="patient_id" class="form-label">Patient Id</label>
                                <select name="patient_id" class="form-control">
                                    @foreach($patient as $patients)
                                    <option value="{{$patients->id}}">{{$patients->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recommend_test" class="form-label">Recommended test</label>
                                <select name="recommend_test" class="form-control">
                                <option value="none">None</option>
                                    @foreach($test as $tests)
                                    <option value="{{$tests->test_name}}">{{$tests->test_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="test1" class="form-label"></label>
                                <select name="test1" class="form-control">
                                <option value="none">None</option>
                                    @foreach($test as $tests)
                                    <option value="{{$tests->test_name}}">{{$tests->test_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="test2" class="form-label"></label>
                                <select name="test2" class="form-control" placeholder ="select from these">
                                    <option value="none">None</option>
                                    @foreach($test as $tests)
                                    <option value="{{$tests->test_name}}">{{$tests->test_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
