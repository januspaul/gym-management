@extends('welcome')
@section('content')
<div class="row">
    <div class="col-8">
        <table class="table border">
            <thead>
                <th>name</th>
                <th>email</th>
                <th>membership type</th>
                <th>trainer</th>
                <th>membership expiration</th>
            </thead>
            <tbody>
                @if(count($members > 0))
                @foreach(members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->membership_type }}</td>
                    <td>{{ $member->trainer_id }}</td>
                    <td>{{ $member->membership_expiration }}</td>
                </tr>
                @endforeach
                @else
                <td colspan="4" class="text-center">No members yet.</td>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection