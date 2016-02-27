@inject('countries', 'App\Http\Utilities\Country')

{{ csrf_field() }}

<div class="form-group">
    <label for="street" class="control-label">Street</label>
    <input type="text" name="street" class="form-control" id="street" placeholder="Street" value="{{ old('street') }}" required>

</div>

<div class="form-group">
    <label for="city" class="control-label">City</label>
    <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{ old('city') }}" required>
</div>

<div class="form-group">
    <label for="zip" class="control-label">Zip/Postal Code</label>
    <input type="text" name="zip" class="form-control" id="zip" placeholder="Zip Code" value="{{ old('zip') }}" required>
</div>

<div class="form-group">
    <label for="country" class="control-label">Country</label>
    <select name="country" id="country" class="form-control">
        @foreach($countries::all() as $country => $code)
            <option value="{{ $code }}">{{ $country }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="state" class="control-label">State</label>
    <input type="text" name="state" class="form-control" id="state" placeholder="State" value="{{ old('value') }}" required>
</div>

<hr>

<div class="form-group">
    <label for="price" class="control-label">Sale Price</label>
    <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{ old('price') }}" required>
</div>

<div class="form-group">
    <label for="description" class="control-label">Home Description</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Description" rows="10" required>{{ old('description') }}</textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Create Flyer</button>
</div>