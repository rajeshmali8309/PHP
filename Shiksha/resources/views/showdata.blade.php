<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin: 0;
            min-height: 100vh;
        }

        .add{
            display: inline;
            background-color: blue;
            padding: 10px;
            border-radius: 5px;
        }

        .add a{
            text-decoration: none;
            color:white;
        }
        .card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            width: 320px;
            padding: 20px;
            margin: 15px;
            text-align: center;
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        .card img {
            border-radius: 5px;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
            transition: transform 0.3s;
        }
        .card:hover img {
            transform: scale(1.1);
        }
        .card h2 {
            font-size: 24px;
            margin-top: 10px;
            font-weight: 700;
            color: #333;
        }
        .card p {
            color: #666;
            font-size: 16px;
            margin: 8px 0;
        }
        .card .field {
            font-weight: bold;
            color: #555;
        }
        .card .value {
            margin-left: 5px;
            display: inline-block;
            color: #222;
        }
        .card .field, .card .value {
            font-size: 14px;
        }
        /* Edit/Delete icons */
        .icons {
            position: absolute;
            top: 15px;
            right: 20px;
        }
        .icons i {
            margin: 0 5px;
            color: #666;
            cursor: pointer;
            transition: color 0.3s, transform 0.3s;
        }
        .icons i:hover {
            color: #ff4d4d;
            transform: scale(1.2);
        }
    </style>
</head>
<body>
<div class="add">
<a href="register">Add New User</a>
</div>
    @foreach($requestAll as $value)
    <div class="card">
        <!-- Edit and Delete Icons -->
        <div class="icons">
            <a href="{{ route('edit-data', $value->id) }}"><i class="fas fa-edit" title="Edit"></i></a>
            <a href="{{ route('delete-data', $value->id) }}"><i class="fas fa-trash-alt" title="Delete"></i></a>
        </div>
        
        <img src="{{ asset('img/' . $value->profile) }}" alt="Profile Picture">
        <h2>{{ $value->name }}</h2>

        <p><span class="field">Email:</span> <span class="value">{{ $value->email }}</span></p>
        <p><span class="field">Password:</span> <span class="value">{{ $value->password }}</span></p>
        <p><span class="field">Phone:</span> <span class="value">{{ $value->phone }}</span></p>
        <p><span class="field">Gender:</span> <span class="value">{{ ucfirst($value->gender) }}</span></p>
        <p><span class="field">Hobbies:</span> <span class="value">{{ $value->hobbies }}</span></p>
        <p><span class="field">Date of Birth:</span> <span class="value">{{ $value->dob }}</span></p>
        <p><span class="field">Time:</span> <span class="value">{{ $value->time }}</span></p>
        <p><span class="field">Range:</span> <span class="value">{{ $value->range }}</span></p>
        <p><span class="field">Qualification:</span> <span class="value">{{ $value->qualification }}</span></p>
    </div>
    @endforeach
</body>
</html>
