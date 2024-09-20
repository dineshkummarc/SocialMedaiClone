<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylessheet -->
    <style>

        .result {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #7E8265;
        }

        .card {
            cursor: pointer;
        }

        button {
            width: 180px;
            padding: 4px 0;
            border-radius: 3px;
            color: white;
            font-size: 1.2rem;
            letter-spacing: 2px;
        }

            button:hover {
                cursor: pointer;
            }
    </style>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Country API </title>
</head>
<body>


    <section class="container p-5 search-section">
        <h1 style="color: #506146"><b>Country App</b></h1>
        
        <input class="form-control search-bar" type="text" placeholder="Enter the country name">
        <br><br><button id="search-btn" class="btn btn-primary" style=" background-color: #506146; color: white"> <b>search</b></button>

    </section>
    <section class="result"></section>



    <!-- javascript -->
    <script>
        const searchBar = document.querySelector(".search-bar");
        const searchBtn = document.querySelector("#search-btn");
        const result = document.querySelector(".result");
        const searchSection = document.querySelector(".search-section");

        searchBtn.addEventListener("click", () => {

            let url = `https://restcountries.com/v3.1/name/${searchBar.value}`
            fetch(url)
                .then((res) => res.json())
                .then((data) => displayCountry(data));
        });

        const displayCountry = (data) => {
            console.log(data);
            data.forEach((country) => {
                const div = document.createElement("div");
                div.className = "card d-flex m-5 shadow";
                div.style.width = "18rem";
                div.innerHTML = `
<img src="${country.flags.png}" class="card-img-top" alt="...">
<div class="card-body">
                            <h2 class="card-text">${country.translations.bre.common}</h2>
</div>
                            `;
                result.appendChild(div);
            });
        };



    </script>
</body>
</html>













