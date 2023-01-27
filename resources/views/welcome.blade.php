<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gym</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-white p-5 shadow">
                    <div class="display-5 fw-bold">Gym</div>
                    <div class="row">
                        <div class="col-8">
                            <table class="table border">
                                <thead>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>membership type</th>
                                    <!-- <th>trainer</th> -->
                                    <th>membership expiration</th>
                                </thead>
                                <tbody>

                                    @foreach(members as $member)
                                    <tr>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->membership_type }}</td>
                                        <!-- <td>{{ $member->trainer_id }}</td> -->
                                        <td>{{ $member->membership_expiration }}</td>
                                    </tr>
                                    @endforeach
                                    <td colspan="4" class="text-center">No members yet.</td>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>