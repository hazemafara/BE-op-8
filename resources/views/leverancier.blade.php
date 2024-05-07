<table>
    <thead>
        <tr>
            <th>Naam</th> <!-- Column header for "Naam" -->
            <th>Contact Persoon</th> <!-- Column header for "Contact Persoon" -->
            <th>Mobile</th> <!-- Column header for "Mobile" -->
            <th>City</th> <!-- Column header for "City" -->
            <th>Street</th> <!-- Column header for "Street" -->
            <th>House Number</th> <!-- Column header for "House Number" -->
        </tr>
    </thead>
    <tbody>
        @foreach($results as $result) <!-- Loop through the $results array -->
        <tr>
            <td>{{ $result->naam }}</td> <!-- Display the value of $result->naam -->
            <td>{{ $result->contact_persoon }}</td> <!-- Display the value of $result->contact_persoon -->
            <td>{{ $result->mobile }}</td> <!-- Display the value of $result->mobile -->
            <td>{{ $result->city }}</td> <!-- Display the value of $result->city -->
            <td>{{ $result->street }}</td> <!-- Display the value of $result->street -->
            <td>{{ $result->house_number }}</td> <!-- Display the value of $result->house_number -->
        </tr>
        @break; <!-- Exit the loop after the first iteration -->
        @endforeach
    </tbody>
</table>
