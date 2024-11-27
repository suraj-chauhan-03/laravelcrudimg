<div>
    <h1>Display</h1>

    <a href="/register"><h3>Create New...</h3></a>

    <table border="2" cellspacing="0" cellpadding="10">
        <tr>
            <td>Namr</td>
            <td>Email</td>
            <td>Gender</td>
            <td>hobby</td>
            <td>City</td>
            <td>Date Of Birth</td>
            <td>Image</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>
        @foreach($employee as $e)
            <tr>
                <td>{{$e->name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->gender}}</td>
                <td>{{$e->hobby}}</td>
                <td>{{$e->city}}</td>
                <td>{{$e->dob}}</td>
                <td>
                    @if($e->image != '')
                        <img src="{{ asset('upload/product/'.$e->image) }}" alt="yash" width="500" height="600">
                    @endif
                </td>
                <td>
                    <form action="/delete/{{$e->eid}}" method="post">
                        @csrf
                    <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                <form action="/editData/{{$e->eid}}" method="get">
                    <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
