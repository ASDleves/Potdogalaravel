@foreach ($clubs as $club)
    <form action="/api/club/{{$club->club_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <input type="submit" value="{{$club->establishment}}">
    </form>
@endforeach