<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    .empty-values {
        font-style: italic;
        color: #fa0505;
    }
</style>

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
        @foreach ($results as $result)
            <tr>
                <td>{{ isset($result->naam) ? $result->naam : 'Does not exist' }}</td>
                <td>{{ isset($result->contact_persoon) ? $result->contact_persoon : 'Does not exist' }}</td>
                <td>{{ isset($result->mobile) ? $result->mobile : 'Does not exist' }}</td>

                @php
                    $cityExists = isset($result->city);
                    $streetExists = isset($result->street);
                    $houseNumberExists = isset($result->house_number);
                @endphp

                @if ($cityExists || $streetExists || $houseNumberExists)
                    <td>{{ $cityExists ? $result->city : 'Does not exist' }}</td>
                    <td>{{ $streetExists ? $result->street : 'Does not exist' }}</td>
                    <td>{{ $houseNumberExists ? $result->house_number : 'Does not exist' }}</td>
                @else
                    <td colspan="3" class="empty-values">Values do not exist</td>
                @endif
            </tr>
            @break
        @endforeach
    </tbody>
</table>
