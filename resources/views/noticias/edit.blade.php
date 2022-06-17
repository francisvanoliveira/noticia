<x-master title="Atualizar Notícia">
    <div class="container pt-5">

        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem')}}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Erro ao realizar esta operação</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/noticias/{{ $noticia->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" placeholder="Digite o título da notícia" class="form-control" value="{{ $noticia->titulo }}">
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea name="conteudo" placeholder="Digite o conteúdo da notícia" class="form-control" rows="5">{{ $noticia->conteudo }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="A" {{ $noticia->status == "A" ? "selected='selected'" : "" }}>Ativo</option>
                    <option value="I" {{ $noticia->status == "I" ? "selected='selected'" : "" }}>Inativo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data_publicacao">Data da Publicação</label>
                <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR" value="{{ optional($noticia->data_publicacao)->format("d/m/Y") }}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form><!--fim formulario-->
        <a href="/noticias" class="btn btn-light">Voltar</a>
    </div><!--fim div container-->
</x-master>