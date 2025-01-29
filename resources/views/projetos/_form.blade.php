@csrf
<div class="mb-3">
    <label for="nome" class="form-label">Nome do Projeto</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $projeto->nome ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" id="descricao" class="form-control" rows="4">{{ old('descricao', $projeto->descricao ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="data_inicio" class="form-label">Data de Início</label>
    <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{ old('data_inicio', $projeto->data_inicio ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-select" required>
        <option value="Pendente" {{ (old('status', $projeto->status ?? '') == 'Pendente') ? 'selected' : '' }}>Pendente</option>
        <option value="Em Andamento" {{ (old('status', $projeto->status ?? '') == 'Em Andamento') ? 'selected' : '' }}>Em Andamento</option>
        <option value="Concluído" {{ (old('status', $projeto->status ?? '') == 'Concluído') ? 'selected' : '' }}>Concluído</option>
    </select>
</div>
