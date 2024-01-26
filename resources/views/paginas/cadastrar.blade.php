<x-layout title="Formulario cadastro">
    <div class="container">
        <!-- $dados tras dados da controller dado coloca no formulario -->
        @foreach($dados as $dado)
        <li class="list-group-item">{{$dado->nome}}</li>
        <li class="list-group-item">{{$dado->telefone}}</li>
        <br><br>
        @endforeach
    </div>

    <form action="/cadastrar/salvar" method="POST" >
        @csrf <!-- valida o formulário -->
        <div class="container text-center">
            <div class="row" >
                <div class="col"></div>
                <div  class="col">
                    <form>
                        <fieldset enable>
                            <legend>Faça seu cádastro</legend>
                            <div class="input-group mb-3">
                                <span class="input-group-text">@</span>
                                <div class="form-floating">
                                    <input class="form-control" type="text" id="nome" name="nome"
                                        placeholder="Informe seu nome" required />
                                    <label for="floatingInputGroup1">nome:</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">*</span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="telefone" name="telefone"
                                        placeholder="telefone">
                                    <label for="floatingInputGroup1">telefone</label>
                                </div>
                            </div>
                            <button type="submmit">Enviar</button>
                        </fieldset>
                    </form>
                </div>
                <div class="col">
                    
                </div>
            </div>
        </div>

</x-layout>