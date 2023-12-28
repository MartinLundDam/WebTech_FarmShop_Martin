<form action="{{ url('/products/' . $item->id) }}" method="POST">
    @csrf

    <div class="product_container">
        <div class="input_group">
            <label for="nameInput" class="form-label">Name:</label>
            <input type="text" name="name" id="nameInput" value="{{ $item->name }}"><br>
        </div>
        <div class="input_group">
            <label for="priceInput">Price:</label>
            <input type="number" name="price" id="priceInput" value="{{ $item->unit_price }}">
        </div>
        <div class="input_group">
            <label for="descriptionInput"  class="form-label">Description:</label>
            <input type="text" name="description" id="descriptionInput" value="{{$item->description}}">
        </div>

    <button type="submit">Update Product</button>
    </div>
</form>
