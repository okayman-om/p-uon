<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uon - Admin</title>
</head>
<body>
    <h1>Our Story</h1>
    <form action="/post-story" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="">
        <textarea class="editor" name="post-story"></textarea>
        <input type="submit" value="Submit">
    </form>
    <h1>View Story</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Description</th>
        </tr>
        @foreach($customposts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{!! Str::limit($post->post, 100, $end='.......') !!}</td>
        </tr>
        @endforeach
    </table>
    <script src= {{ asset('ckeditor5/build/ckeditor.js') }}></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script> --}}
    <script>ClassicEditor
        .create( document.querySelector( '.editor' ), {
            
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo',
                    'imageInsert',
                    'alignment'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',
            
            
        } )
        .then( editor => {
            window.editor = editor;
    
            
            
            
    
            
            
            
        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.warn( 'Build id: o6j28yqge3dd-wwwnxnz4ps61' );
            console.error( error );
        } );
</script>
</body>
</html>