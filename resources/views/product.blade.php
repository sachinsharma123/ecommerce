<!-- <!DOCTYPE html>
<html >
  <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" href="/app.css">
    </head>

    <body>
    	<div class="container"> -->

        @extends('product-layout')

        @section('menu')
        @include('includes/menu')
            
        @endsection
      

        @section('content')
    <!--  <h1>Products</h1>

      <h2>Product 1</h2> -->
      <article>

        <h2>{{ $product->product_name }}</h2>
        <p>{!! $product->product_desc !!}</p>

      </article>
      <a href="/">Go to home</a>
      @endsection




           <!-- </div>
    </body> -->

</html>
