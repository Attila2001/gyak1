@extends("master")

@section("content")

<form action="update_car" method="get">
@csrf
@method("PUT")
<div class="container">

    <div class="mb-3">
      <label for="plate" class="form-label">rendszám</label>
      <input type="text" class="form-control" id="plate" name="plate" value="{{$car->plate}}" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="brand" class="form-label">márka</label>
      <input type="text" class="form-control" id="brand" name="brand" value="{{$car->brand}}" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="color" class="form-label">szín</label>
      <input type="text" class="form-control" id="color" name="color" value="{{$car->color}}" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">ár</label>
      <input type="text" class="form-control" id="price" name="price" value="{{$car->price}}" placeholder="name@example.com">
    </div>
    <button class="btn btn-outline-primary mt-3"type="submit">küldés</button>
</div>
</form>
@endsection