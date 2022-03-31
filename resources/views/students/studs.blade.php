

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
      <h1>Student list</h1>
      @if(Session::has('message'))
         
         <div class="alert alert-{{Session::get('class')}}" role="alert">
          <strong> {{Session::get('message')}} </strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
         @endif

       <div class="row">
           <div class="col-md-8">
              <table class="table">
                 <thead>
                   <th>id</th>
                   <th>name</th>
                   <th>Address</th>
                   <th>Created</th>
                   <th>Update</th>
                 </thead>
                  
                  <tbody>
                    @foreach ($sample as $samples)
                    <tr>
                     <td>{{$samples->id}}</td>
                     <td>{{$samples->name}}</td>
                     <td>{{$samples->address}}</td>
                     <td>{{$samples->created_at}}</td>
                     <td>{{$samples->updated_at}}</td>
                  
                     <td> <a href="{{  route('sample.show',['sample' => $samples->id])   }}" class=" btn btn-sm btn-warning ">Show</a> </td>
                     <td> <a href="{{  route('sample.edit',['sample' => $samples->id])   }}" class = "btn btn-sm btn-success">Edit</a> </td>
                     <td>
                     <form action="{{  route('sample.destroy',['sample'=> $samples->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type ="submit" class="btn btn-sm btn-danger">Delete</button>
                     </form>
                     </td>
                      
                      
                    </tr>
                    @endforeach
                  </tbody>
                  
              </table>
              <span>
                {{$sample->links()}}
                </span>
                <style>
                  .w-5{
                    display: none;
                  }
                  </style>
           </div>
       </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>