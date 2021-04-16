<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pokemon</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="buttons">
    <button><a href="index.php">Go back to Pokemon list</a></button>
</div>
    <h1>Create your own Pokemon</h1>
    <form method="POST" id="submission-form" action="formatted_pokemon.php">
        <label for="id">ID</label>
        <input type="text" id="id">
        <label for="name">Name</label>
        <input type="text" id="name">
        <label for="type">Type</label>
        <select id="type">
            <option value="normal">normal</option>
            <option value="fight">fight</option>
            <option value="flying">flying</option>
            <option value="poison">poison</option>
            <option value="ground">ground</option>
        </select>
        <button type="submit" id="submit">Submit</button>
</form>


<script>

    // let form = document.getElementById("form");
    
    // function Pokemon(id, name, type) {
    //     this.id = id;
    //     this.name = name;
    //     this.type = type;
    // }

    // function newPokemon() {
    //     event.preventDefault();
    //     let id = document.getElementById("id").value;
    //     let name = document.getElementById("name").value;
    //     let type = document.getElementById("type").value;

    //     let addPokemon = new Pokemon(id, name, type);
    //     console.log(addPokemon);
    // }

    // form.addEventListener("submit", newPokemon);

</script>

</body>

</html>