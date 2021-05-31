<div class="card mb-3">
    

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Fullname</th>
                <th scope="col">Address</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Credit Number</th>
                

            </tr>
            </thead>
            <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>{{ $hotel->cNum }}</td>
                    <td>{{ $hotel->creditNum}}</td>
                    

                        <a href="{{ url('/edit/'.$certificate->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>