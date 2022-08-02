<html>
  <body>
    <h2>ajouter une nouvelle voiture</h2>
    <form action="submit" method="POST">
      @csrf
      <input type="text" name="marque" placeholder="marque"> <br> <br>
      <input type="text" name="annee" placeholder="annee"> <br> <br>
      <input type="text" name="prix" placeholder="prix"> <br> <br>
      <button>ajouter</button>
    </form>
  </body>
</html>
