@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="">
                <h1 class="display-4 bg-dark text-light" style="">PRESTAMOS</h1>
            </div>
        </div>
    </div>
</div>
<div class="py-1 border-dark bg-light text-dark" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-secondary">TITULO</div>
            <div class="col-md-3 bg-secondary">FECHA DE PRESTAMO</div>
            <div class="col-md-3 bg-secondary">FECHA DE ENTREGA</div>
            <div class="col-md-3 bg-secondary">DEVOLVER</div>
            <div class="col-md-3 offset-md-9"><a class="btn btn-primary btn-lg my-3" href="#">DEVOLVER</a></div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection


