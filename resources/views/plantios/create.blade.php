<form action="{{ url('plantios') }}" method="POST">
    @csrf
    <input type="text" name="produto" placeholder="produto" required>
    <input type="text" name="quantidade_bandeijas" placeholder="quantidade_bandeijas" required>
    <input type="date" name="data_plantio" placeholder="data" required>
    <button type="submit">Create Product</button>
</form>