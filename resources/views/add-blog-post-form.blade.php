<html>

<head>
    <title>Forms in laravel</title>
    <meta name="csrf-token" content="{{ csrf-token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
    <body>
        <div class="container mt-4">
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    Laravel 8 - Add Blog Post Form Example
                </div>
                <div class="car-body">
                    <Form name= "add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                        @csrf
                        <div class="form-group">
                            <lable for="exampleInputEmail1">Title</lable>
                            <input type="text" id="title" name="title" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <lable for="exampleInputEmail1">Description</lable>
                            <textarea name="description" class="form-control" required=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </Form>
                </div>
            </div>
        </div>

    </body>
</html>