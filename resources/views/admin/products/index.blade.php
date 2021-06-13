<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
<a href="{{ route('admin.products.create') }}">Create Product:</a> {{ Auth::user()-> name}}

<table width="900" align="center">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Action</td>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->product_name}}</td>
        <td>{{ $product->product_desc}}</td>
        <td>{{ $product->price }}</td>
        <td>
            <a href="{{ route('admin.products.edit' , $product->id)}}">Edit</a>|
            <form method="POST" action="{{route('admin.products.destroy',$product->id)}}"> 
                @method('DELETE')
                @csrf
                <a href="#"onclick="event.preventDefault(); this.closest('form').submit();">Delete</a>
            </form>
        </td>
    </tr>
    
    @endforeach
</table>
          </div>
        </div>
    </div>
</x-admin.layout>



