<table class="table table-bordered mt-3">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Details</th>
        <th scope="col">Created By</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->details }}</td>
            <td>{{ $post->user->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>