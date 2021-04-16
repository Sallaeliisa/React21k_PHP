<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon list</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="buttons">
    <button id="previous" class="navigate">Previous</button>
    <button id="next" class="navigate">Next</button>
    <button><a href="new_pokemon.php">Create a new Pokemon</a></button>
</div>
    <section id="pokemonlist">
    </section>


    <script>
        let current_page = 0;
        fetchNewPokemons(current_page);
        let last_page = 22,
            first_page = 0;

        document.querySelectorAll('.navigate').forEach(button => {
            button.addEventListener('click', (e) => {
                console.log(e.target.id);
                getPokemon(e.target.id);
            })
        })

        function getPokemon(direction) {
            if (direction === 'next' && current_page !== last_page) {
                current_page++;
                fetchNewPokemons(current_page);
            } else if (direction === 'previous' && current_page !== first_page) {
                current_page--;
                fetchNewPokemons(current_page);
            }
        }

        function fetchNewPokemons(page_number) {

            document.getElementById("pokemonlist").innerHTML = "";

            fetch('formatted_pokemon.php?page=' + page_number, {
                    method: "GET"
                })
                .then((response) => response.json())
                .then((json) => {
                    json.forEach(display_list)
                });

            function display_list(pokemon) {
                const newEl = document.createElement("div");
                newEl.className = "pokemon";
                newEl.innerHTML = `<div class="name">${pokemon.name}</div><div class="url"><a href=${pokemon.url}>${pokemon.url}</a></div><br>`;
                document.getElementById("pokemonlist").appendChild(newEl);
            }
        }
    </script>


</body>

</html>