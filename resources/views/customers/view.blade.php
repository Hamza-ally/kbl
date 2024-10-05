<table>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>contact</th>
        <th>cnic</th>
        <th>conn_id</th>
        <th>package_type</th>
        <th>city</th>
        <th>address</th>
    </tr>
    @foreach ($customers as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->contact }}</td>
            <td>{{ $item->cnic }}</td>
            <td>{{ $item->conn_id }}</td>
            <td>{{ $item->package_type }}</td>
            <td>{{ $item->city }}</td>
            <td>{{ $item->address }}</td>
        </tr>
    @endforeach
</table>
