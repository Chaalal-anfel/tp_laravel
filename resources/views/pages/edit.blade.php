<html>
  <body>
    <h2>modifier voiture</h2>
    <form action="/edit" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$data->id}}">
      <input type="text" name="marque" placeholder="marque" value="{{$data->marque}}"> <br> <br>
      <input type="text" name="annee" placeholder="annee" value="{{$data->annee}}"> <br> <br>
      <input type="text" name="prix" placeholder="prix" value="{{$data->prix}}"> <br> <br>
      <button>valider</button>
    </form>
  </body>
</html>
