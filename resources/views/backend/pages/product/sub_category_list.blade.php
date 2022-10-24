@foreach($subcategories as $key => $subcategory)
    <ul>
        <li>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="cat[]" value="{{ $subcategory->id }}" id="subcat{{ $subcategory->id }}">
                <label class="form-check-label" for="subcat{{ $subcategory->id }}">{{ $subcategory->name }}</label>
            </div>
        </li>
        @if(count($subcategory->children))
            @include('backend.pages.product.sub_category_list',['subcategories' => $subcategory->children])
        @endif
    </ul>
@endforeach