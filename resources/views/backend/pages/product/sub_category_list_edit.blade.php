@php
    $categoryChecked = explode(',', $product->cat_id);
@endphp
@foreach($subcategories as $key => $subcategory)
    <ul>
        <li>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="cat[]" value="{{ $subcategory->id }}" id="subcat{{ $subcategory->id }}" {{ in_array($subcategory->id, $categoryChecked) ? "checked" : "" }}>
                <label class="form-check-label" for="subcat{{ $subcategory->id }}">{{ $subcategory->name }}</label>
            </div>
        </li>
        @if(count($subcategory->children))
            @include('backend.pages.product.sub_category_list_edit',['subcategories' => $subcategory->children])
        @endif
    </ul>
@endforeach