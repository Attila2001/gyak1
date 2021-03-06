@extends("master")
@section("content")
<h2>autok</h2>
<div class="row">
    <div class="col-4">

    <a class="btn btn-info" href="/">Vissza</a>
        </form>
        <div class="container">
            <a class="btn btn-warning mb-1" href="/register">Regisztráció</a>
            <a class="btn btn-warning mb-1" href="/login">Bejelentkezés</a>
            <a class="btn btn-warning mb-1" href="/logout">Kijelentkezés</a>

        </div>

    </div>

</div>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>rendszám</th>
            <th>márka</th>
            <th>szín</th>
            <th>ár</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->plate}}</td>
            <td>{{$car->brand}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->price}}</td>
            <td>
                <a class=" btn btn-info btn-sm" href="edit_car/{{$car->id}}">szerkesztés</a>
                <a class=" btn btn-info btn-sm" href="delete_car/{{$car->id}}">törlés</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
    <a class="btn btn-primary" href="/new_car">Új áru</a>
@endsection