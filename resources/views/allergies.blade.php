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
</style>

<form method="GET" action="/allergy/opdatum">
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
            <th>Product Name</th>
            <th>Allergie</th>
            <th>Omschrijving</th>
            <th>Aantal</th>
            <th>Info</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
            <tr>
                <td>{{ $result->product_name }}</td>
                <td>{{ $result->allergen_name }}</td>
                <td>{{ $result->allergen_description }}</td>
                <td>{{ $result->quantity_on_hand }}</td>
                <td><a href="/leverancier/{{$result->id}}">?</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
