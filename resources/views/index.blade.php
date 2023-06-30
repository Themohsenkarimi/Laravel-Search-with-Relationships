<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search with Relationships in Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        
        <h1 class="text-center pt-4 ">Search with Relationships in <strong class="text-danger">Laravel</strong></h1>
        <hr>

        <div class="row py-2">
            <div class="col-md-6">
                <h2><a href="" class="btn btn-success">Add New Post</a></h3>
            </div>
    
            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action="/search">
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>

        

         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Deescription</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

         @foreach ($posts as $post)
        
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    <a href="" class="btn btn-danger" >Delete</a >
                    <a href="" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              
             @endforeach
            </tbody>
          </table>
        
    </div>
   
</body>
</html>