
<form method="GET" action="{{ route('index') }}">
    <select name="allergen">
        @foreach ($allegrns as $allergen)
            <option value="{{ $allergen->id }}">{{ $allergen->name }}</option>
        @endforeach
    </select>

    <button type="submit">Maak selectie</button>
</form>
<table>
    <thead>
        <tr>
            <th>product name</th>
            <th>allergie</th>
            <th>omschrijving</th>
            <th>aantal</th>
            <!-- Add more column headers as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
            <tr>
                <td>{{ $result->product_name }}</td>
                <td>{{ $result->allergen_name }}</td>
                   <td>{{ $result->allergen_description }}</td>
                <td>{{ $result->quantity_on_hand }}</td>

                <!-- Add more columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>