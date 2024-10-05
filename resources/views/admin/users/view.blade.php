<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created_at</th>
    </tr>
    @foreach ($users as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->role_name }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
    @endforeach
</table>
