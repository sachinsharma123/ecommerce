<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
                                
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h2>Create Category:</h2>
                    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <x-forms.input type="text" name="full_name"/> --}}
                        Category Name:<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        
                        @error('name')
                    
                        @enderror
                        <br><br>
                        Category Slug:<input type="text" name="slug" id="slug" class="form-control" value="{{ old('name') }}"><br><br>
                        Category Desc:<textarea name="description" id="description" cols="30" rows="10" class="form-control" value="{{ old('description') }}"></textarea><br><br>
                        <br><br>
                        Parent Category:
                            <x-forms.select name="parent_id" id="" class="form-control">
                                <option value=0>Select a Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == old('parent_id')? "selected": '' }}>{{ $category->name }}</option>
                                @endforeach
                            </x-forms.select><br><br>
                        <input type="submit" name="submit" value="Save" class="form-control"> 
                    </form>
                    </div>
                    </div>
                </div>
                
</x-admin.layout>

<script>
    jQuery(document).ready(function($){
        $('#name').on('change',function(){
            var name = $('#name').val();
            var slug= name.replace(/\s+/g, '-').toLowerCase();
            $('#slug').val(slug);
        })
    }

</script>