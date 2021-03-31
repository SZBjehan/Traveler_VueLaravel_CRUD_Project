<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit</title>
    </head>
    <body>
        
        <section>
            @if(Session::has('post_update'))
            <span>{{Session::get('post_update')}}</span>
            @endif
            <form method="POST" action="{{route('update')}}">
                @csrf
                ID: <br> <input type="text" name="id" value="{{$edt->id}}"> <br>
                Name: <br> <input type="text" name="name" value="{{$edt->name}}"> <br>
                Email: <br> <input type="email" name="email" value="{{$edt->email}}"> <br>
                <input type="submit" value="Submit">

            </form>



        </section>
    



    </body>

</html>
