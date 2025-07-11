<h1>Projects List</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Client Name</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->client_name }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->end_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
