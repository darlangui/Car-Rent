<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="header_mobile.css">
    <link rel="stylesheet" href="main_mobile.css">
    <link rel="icon" href="assets/icon.svg">
    <title>Morent</title>
</head>
<body>
    <header>
        <div class="top">
            <a href="#"><img class="logo" src="assets/Logo.svg" alt="Logo Morent"></a>
            <img class="profile" src="assets/Image.svg" alt="Foto do usuário">
        </div>
        <form action="#">
            <div class="filter">
                    <label for="filter">
                        <div class="input">
                                <img src="assets/search-normal.svg" alt="">
                                <input id="filter" type="text" placeholder="Search something here">
                        </div>
                    </label>
                    <button class="filter_button" type="submit">
                        <img src="assets/filter.svg" alt="Icone de filtro">
                    </button> 
            </div>
        </form>
    </header>
    <main>
        <section class="banner">
            <h2>The Best Platform for Car Rental</h2>
            <span>Ease of doing a car rental safely and reliably. Of course at a low price.</span>
            <a href="#"><button>Rental Car</button></a>
        </section>
        <form action="#">
            <section class="pickdrop">
                    <div class="pick">
                        <div class="option">
                            <label class="label" for="option"> 
                                <input type="radio" name="option" id="option">
                                <span> Pick - Up </span>
                            </label>
                            <div class="select">
                                <div class="location">
                                    <label class="op" for="location">
                                        <span>Location</span>
                                        <select name="location" id="location">
                                            <option value="semarang">Semarang</option>
                                        </select>
                                    </label>
                                </div>
                                <img src="assets/border_mobile.svg" alt="Risco de separação">
                                <div class="date">
                                    <label class="op" for="date">
                                        <span>Date</span>
                                        <select name="date" id="date">
                                            <option value="20 July 2020">20 July 2022</option>
                                        </select>
                                    </label>
                                </div>
                                <img src="assets/border_mobile.svg" alt="Risco de separação">
                                <div class="time">
                                    <label class="op" for="time">
                                        <span>Time</span>
                                        <select name="time" id="time">
                                            <option value="0700">07:00</option>
                                        </select>
                                    </label> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <button type="submit"><img src="assets/swap.svg" alt="Icone de troca"></button>
                    </div>
                    <div class="drop">
                        <div class="option">
                            <label class="label" for="option_two"> 
                                <input type="radio" name="option" id="option_two">
                                <span> Drop - Off </span>
                            </label>
                            <div class="select">
                                <div class="location">
                                    <label class="op" for="location">
                                        <span>Location</span>
                                        <select name="location" id="location">
                                            <option value="semarang">Semarang</option>
                                        </select>
                                    </label>
                                </div>
                                <img src="assets/border_mobile.svg" alt="Risco de separação">
                                <div class="date">
                                    <label class="op" for="date">
                                        <span>Date</span>
                                        <select name="date" id="date">
                                            <option value="20 July 2020">20 July 2022</option>
                                        </select>
                                    </label>
                                </div>
                                <img src="assets/border_mobile.svg" alt="Risco de separação">
                                <div class="time">
                                    <label class="op" for="time">
                                        <span>Time</span>
                                        <select name="time" id="time">
                                            <option value="0700">07:00</option>
                                        </select>
                                    </label> 
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </form>
        <div class="popular">
             <div class="top">
                <span>Popular Car</span>
                <a class="all" href="#"><span>View All</span></a>
             </div>
             <div class="cards">
                <form action="#">
                    <div class="card">
                        <div class="top">
                            <h3>Koenigsegg</h3>
                            <input type="checkbox">             
                        </div>
                        <div class="mid">
                            <span>Sport</span>
                            <img src="" alt="">
                        </div>
                        <div class="bot">
                            <div class="spec">

                            </div>
                            <div class="buttow">

                            </div>
                        </div>
                    </div>
                </form>
             </div>
        </div>
        <div class="recommerded">

        </div>
    </main>
    <footer>

    </footer>
</body>
</html>