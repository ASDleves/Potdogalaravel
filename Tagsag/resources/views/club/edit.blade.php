<form action="/api/club/{{$club->club_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="date" name="establishment" placeholder="Establishment" value="{{$club->establishment}}">
    <input type="text" name="location" placeholder="Location" value="{{$club->location}}">
    <input type="integer" name="max_number" placeholder="Max létszám" value="{{$club->max_number}}">
    <input type="submit" value="Ok">
</form>