<div class="mb-3">
    <label class="form-label">Cliente</label>
    <select name="client_id" class="form-select" required>
        <option value="">Selecione</option>
        @foreach($clients as $client)
            <option value="{{ $client->id }}"
                {{ old('client_id', $appointment->client_id ?? '') == $client->id ? 'selected' : '' }}>
                {{ $client->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Data</label>
    <input type="date"
           name="date"
           class="form-control"
           value="{{ old('date', $appointment->date ?? '') }}"
           required>
</div>

<div class="mb-3">
    <label class="form-label">Hora</label>
    <input type="time"
           name="time"
           class="form-control"
           value="{{ old('time', $appointment->time ?? '') }}"
           required>
</div>

<div class="mb-3">
    <label class="form-label">Serviço</label>
    <input type="text"
           name="service"
           class="form-control"
           value="{{ old('service', $appointment->service ?? '') }}"
           required>
</div>

<div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
        <option value="Pendente"
            {{ old('status', $appointment->status ?? '') == 'Pendente' ? 'selected' : '' }}>
            Pendente
        </option>
        <option value="Confirmado"
            {{ old('status', $appointment->status ?? '') == 'Confirmado' ? 'selected' : '' }}>
            Confirmado
        </option>
        <option value="Cancelado"
            {{ old('status', $appointment->status ?? '') == 'Cancelado' ? 'selected' : '' }}>
            Cancelado
        </option>
    </select>
    <div class="mt-4">
        <button type="submit" class="btn btn-success w-100">
            {{ isset($appointment) ? 'Atualizar' : 'Agendar' }}
        </button>
    </div>
</div>