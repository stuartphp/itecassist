<div class="card mt-3">
    <div class="card-header">Email Accounts</div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>Email</th>
                <th>Password</th>
                <th>Incoming</th>
                <th>SMTP</th>
                <th>SMTP Port</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->email_address }}</td>
                        <td>{{ $item->email_password }}</td>
                        <td>{{ $item->email_incoming }}</td>
                        <td>{{ $item->email_smtp }}</td>
                        <td>{{ $item->email_smtp_port }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">{{ $data->links() }}</div>
</div>
