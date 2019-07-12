@include('inc.head')
<div class="container">

    <div class="row">
        @if (session('info'))
        <div class="alert alert-success">
                {{session('info')}}
        </div>
        @endif  
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @if(count($articles)>0)
                    @foreach ($articles->all() as $article)
                    <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->Title }}</td>
                    <td>{{ $article->Description }}</td>
                            <td>
                            <a href='{{ url("/read/{$article->id}") }}' class="text text-primary">Read</a>
                            <a href='{{ url("/update/{$article->id}") }}' class="text text-success">Update</a>
                            <a href='{{ url("/delete/{$article->id}") }}' class="text text-danger">Delete</a>
                            </td>
                    </tr>  
                    @endforeach
                @endif
            </tbody>
          </table> 
    </div>
</div>
@include('inc.footer')