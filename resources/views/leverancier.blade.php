
<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Contact Persoon</th>
            <th>Mobile</th>
            <th>City</th>
            <th>Street</th>
            <th>House Number</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $result)
        <tr>
            <td>{{ $result->naam }}</td>
            <td>{{ $result->contact_persoon }}</td>
            <td>{{ $result->mobile }}</td>
            <td>{{ $result->city }}</td>
            <td>{{ $result->street }}</td>
            <td>{{ $result->house_number }}</td>
        </tr>
        @break;
        @endforeach
    </tbody>
</table>