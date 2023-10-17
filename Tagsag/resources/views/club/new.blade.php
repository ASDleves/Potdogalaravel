<form action="/api/club" method="post">
    {{csrf_field()}}
    <input type="date" name="establishment" placeholder="Club establishment">
    <input type="text" name="location" placeholder="Location name">
    <input type="integer" name="max_number" placeholder="Max létszám">
    <input type="submit" value="Ok">
</form>