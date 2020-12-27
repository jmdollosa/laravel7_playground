<table class="table table-condensed table-bordered table-hover mt-2">
    <thead>
    <tr class="bg-primary">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if($contacts->count() > 0)
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <a href="{{ route('contact.edit', [ $contact->id ]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
        @endforeach
    @else
    <tr>
        <td colspan="4" class="text-center">No records</td>
    </tr>
    @endif
    </tbody>
</table>
