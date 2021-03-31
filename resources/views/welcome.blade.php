<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        
        <section>
            @if(Session::has('create'))
            <span>{{Session::get('create')}}</span>
            @endif
            <form method="POST" action="{{route('create')}}">
                @csrf
                ID: <br> <input type="text" name="id" value=""> <br>
                Name: <br> <input type="text" name="name" value=""> <br>
                Email: <br> <input type="email" name="email" value=""> <br>
                <input type="submit" value="Submit">

            </form>



        </section>

        <br><br>
        <a href="{{route('show')}}">Show List</a>
    



    </body>

</html>
