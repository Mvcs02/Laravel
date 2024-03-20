@extends('plantilla')
@section('contenido')

<section id="conocenos_nosotros">
    <h2>ANUNCIATE CON NOSOTROS</h2><br>
    <div class="card" style="width: 750px; left: 25%; bottom: 20px;">
        <img src="style/images/anuncio1.jpg" class="card-img-top" alt="...">                
    </div>
</section>{{-- conocenos_nosotros --}}

<!------- MAS SOBRE NOSOTROS ------->
<section id="contacto">
    <h2 style="margin-bottom: 100px;">Llena el Formulario del Contacto</h2>
    <h4>Informacion personal</h4>
    <div id="module3">
        <form style="margin-left: 400px; width: 40%;" action="{{ route('contacto.enviar') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="tel" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tel" name="telefono" maxlength="10" required>
                </div>
            </div>
        
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3" name="mensaje" required></textarea>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        </form>            
    </div>
</section>
@endsection
