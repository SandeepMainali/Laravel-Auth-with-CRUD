<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <style>
    body{
       background-color: #132a42
    }

    h1{
      color: whitesmoke;
    }
    button{
      font-family: "Roboto",sans-serif;
      font-size: 15px;
      background: #1E90FF;
      font-size: bold;
      width: 100px;
      padding: 3px;
      text-align: center;
      text-decoration: none;
      text-transform: uppercase;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
      transition-property: box-shadow,transform;

    }

    button:hover,button:focus,button:active{
      box-shadow: 0 0 20px rgba(0,0,0,0.5);
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <h1>Edit this Todo!</h1>
  {{-- <pre>
  {{$value}}
  </pre> --}}

  <form action="{{route('updateTodo')}}" method="post">
    @csrf
    
    <input type="text" name="todo" value={{$value->todoitem}}>
    <input type="hidden" name="id" value={{$value->id}}>
    <button type="submit">Update</button>
  </form>
</body>

</html>