<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>Notes</h1>
        
        <ul>
            @foreach ($notes as $note)
            <li> {{ $note->note}}</li>
            @endforeach
        </ul>
        <?php 
        $toke= csrf_token();
        ?>
        <form method="post">
            <!-- Tambien puedes hacer {!! csrf_field() !!} -->
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <textarea></textarea>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>




