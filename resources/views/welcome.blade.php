<h1>All Student Data </h1>
@foreach ($students as $item)
    <h3>ID: {{ $item->id }}</h3>
    <h3>Name: {{ $item->name }}</h3>
    <h3>Email: {{ $item->email }}</h3>
    <h3>Age: {{ $item->age }}</h3>
    <h3>City: {{ $item->city_name }}</h3>
    <hr>
@endforeach
