<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>{{ config('contact.title') }}</h1>
   
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
   
    <form action="{{ route('contact.send') }}" method="POST">
        <div>
            Email: <input type="email" name="email" id="">
        </div>
        <div>
            Description: <textarea name="desc" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>