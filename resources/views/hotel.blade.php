<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Hotel Reservation</title>
</head>
<body>
@include("navBar")

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Hotel Reservation</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("list")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("list")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                   
                    <div class="card-body">
                        <h5 class="card-title">Input informations</h5>
                        <form action="{{ url('/store') }}" method="get">
                            @csrf
                            <div class="form-group">
                                <label>name</label>
                                <input name="name" type="text" class="form-control"  placeholder="Enter name">
                            </div>
                            
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" class="form-control"  placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label>Contact Number</label>
                                <input name="cNum" type="text" class="form-control"  placeholder="Enter Contact Number">
                            </div>

                            <div class="form-group">
                                <label>Credit Card Number</label>
                                <input name="creditNum" type="text" class="form-control"  placeholder="Enter Credit card number">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("list")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("list")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    
                    <div class="card-body">
                        <h5 class="card-title">Update informations</h5>
                        <form action="{{ url('/update/'.$certificate->id) }}" method="get">
                            @csrf
                            <div class="form-group">
                                <label>name</label>
                                <input name="name" type="text" class="form-control"  placeholder="Enter name">
                            </div>
                            
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" class="form-control"  placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label>Contact Number</label>
                                <input name="cNum" type="text" class="form-control"  placeholder="Enter Contact Number">
                            </div>

                            <div class="form-group">
                                <label>Credit Card Number</label>
                                <input name="creditNum" type="text" class="form-control"  placeholder="Enter Credit card number">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>