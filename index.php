<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="assets/icon.svg">
    <title>Morent</title>
</head>
<body>
    <header>
        <div class="container">
            <section class="left">
                <a href="../Car-Rent/"><img src="assets/Logo.svg" alt="Morent"></a>
                <form action="#">
                    <section class="search-filter"> 
                        <div class="search">
                            <img src="assets/search-normal.svg" alt="Logo de pesquisa">
                            <input type="search" placeholder="Search something here" name="search">
                        </div>
                        <img src="assets/filter.svg" alt="Logo de filtro">
                    </section>
                </form>
            </section>
            <section class="right">
                <a href="#"><img src="assets/Like.svg" alt="gostei"></a>
                <a href="#"><img src="assets/NotificationNull.svg" alt="notificações"></a>
                <a href="#"><img src="assets/Settings.svg" alt="configurações"></a>
                <img src="assets/Image.svg" alt="perfil" class="profile">
            </section>
        </div>
    </header>   

    <main> 
        <section class="banners">
            <section class="left">
                <div class="read">
                    <h2>The Best Platform for Car Rental</h2>
                    <h3>Ease of doing a car rental safely and reliably. Of course at a low price.</h3>
                    <button>
                        Rental Car
                    </button>
                </div>
            </section>
            <section class="right">
                <div class="read">
                    <h2>Easy way to rent a car at a low price</h2>
                    <h3>Providing cheap car rental services and safe and comfortable facilities.</h3>
                    <button>
                        Rental Car
                    </button>
                </div>
            </section>
        </section>
        <section class="pickdrop">
            <section class="left">
                    <div class="radio">
                        <input type="radio" name="pick-drop" id="pick-up">
                        <label for="pick-up" class="pick-drop">Pick - Up</label>
                    </div>
                    <form action="#">
                    <div class="filter">
                        <div class="filter-item">
                            <label>Locations </label>
                            <label class="select" for="filter">
                                <select id="filter" class="custom-select">
                                    <option value="0">Select your city</option> <img src="assets/arrow-down.svg" alt="">
                                    <option value="2">Florida</option>
                                    <option value="3">Texas</option>
                                    <option value="4">Orlando</option>
                                    <option value="5">New York</option>
                                </select>
                                <img src="assets/arrow-down.svg" alt="seta para baixo">
                            </label>
                        </div>
                        <img src="assets/line.svg" alt="Linha para dividir">
                        <div class="filter-item">
                            <label>Date</label>
                            <label class="select" for="filter">
                                <select id="filter" class="custom-select">
                                    <option value="0">Select your date</option> <img src="assets/arrow-down.svg" alt="">
                                    <option value="2">Florida</option>
                                    <option value="3">Texas</option>
                                    <option value="4">Orlando</option>
                                    <option value="5">New York</option>
                                </select>
                                <img src="assets/arrow-down.svg" alt="seta para baixo">
                            </label>
                        </div>
                        <img src="assets/line.svg" alt="Linha para dividir">
                        <div class="filter-item">
                            <label>Time</label>
                            <label class="select" for="filter">
                                <select id="filter" class="custom-select">
                                    <option value="0">Select your time</option> <img src="assets/arrow-down.svg" alt="">
                                    <option value="2">Florida</option>
                                    <option value="3">Texas</option>
                                    <option value="4">Orlando</option>
                                    <option value="5">New York</option>
                                </select>
                                <img src="assets/arrow-down.svg" alt="seta para baixo">
                            </label>
                        </div>
                    </div>
                </form>
            </section>
            <a href="#">
                <section class="center">
                    <img src="assets/swap.svg" alt="icone de troca">
                </section>
            </a>
            <section class="right">
                <div class="radio">
                    <input type="radio" name="pick-drop" id="drop-off">
                    <label for="drop-off" class="pick-drop">Drop - Off</label></div>
                <form action="#">
                <div class="filter">
                    <div class="filter-item">
                        <label>Locations </label>
                        <label class="select" for="filter">
                                <select id="filter" class="custom-select">
                                    <option value="0">Select your city</option> <img src="assets/arrow-down.svg" alt="">
                                    <option value="2">Florida</option>
                                    <option value="3">Texas</option>
                                    <option value="4">Orlando</option>
                                    <option value="5">New York</option>
                                </select>
                                <img src="assets/arrow-down.svg" alt="seta para baixo">
                            </label>
                    </div>
                    <img src="assets/line.svg" alt="Linha para dividir">
                    <div class="filter-item">
                        <label>Date</label>
                        <label class="select" for="filter">
                                <select id="filter" class="custom-select">
                                    <option value="0">Select your date</option> <img src="assets/arrow-down.svg" alt="">
                                    <option value="2">Florida</option>
                                    <option value="3">Texas</option>
                                    <option value="4">Orlando</option>
                                    <option value="5">New York</option>
                                </select>
                                <img src="assets/arrow-down.svg" alt="seta para baixo">
                            </label>
                    </div>
                    <img src="assets/line.svg" alt="Linha para dividir">
                    <div class="filter-item">
                        <label>Time</label>
                        <label class="select" for="filter">
                                <select id="filter" class="custom-select">
                                    <option value="0">Select your time</option> <img src="assets/arrow-down.svg" alt="">
                                    <option value="2">Florida</option>
                                    <option value="3">Texas</option>
                                    <option value="4">Orlando</option>
                                    <option value="5">New York</option>
                                </select>
                                <img src="assets/arrow-down.svg" alt="seta para baixo">
                            </label>
                    </div>
                </div>
                </form>
            </section>
        </section>
        <section class="cars">
            <section class="popular">
                <div class="all-items">
                    <span> Popular Car </span>
                   <a href="#"><span> View All </span></a>  
                </div>
                <div class="cars-popular">
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>Koenigsegg</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> Sport </span>
                            <img class="cars-photo" src="assets/car.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    90L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    2 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$99.00/</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>Nissan GT - R</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> Sport </span>
                            <img class="cars-photo" src="assets/nissangt.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    80L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    2 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$80.00/</span><span>day</span>
                                    </div>
                                    <span class="ant">$100.00</span>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>Rolls - Royce</h3>
                                <img class="like" src="assets/like2.svg" alt="coração">
                            </div>
                            <span> Sedan </span>
                            <img class="cars-photo" src="assets/rolls-royce.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    70L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    4 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$99.00/</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>Nissan GT - R</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> Sport </span>
                            <img class="cars-photo" src="assets/nissangt.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    80L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    2 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$80.00/</span><span>day</span>
                                    </div>
                                    <span class="ant">$100.00</span>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                </div>
            </section>
            <section class="recommended">
                <div class="all-items">
                    <span> Recomendation Car </span>  
                </div>
                <div class="cars-recomendation">
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>All New Rush</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> SUV </span>
                            <img class="cars-photo" src="assets/rush.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    70L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    6 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$72.00</span><span>day</span>
                                    </div>
                                    <span class="ant">$80.00</span>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>CR - V</h3>
                                <img class="like" src="assets/like2.svg" alt="coração">
                            </div>
                            <span> SUV </span>
                            <img class="cars-photo" src="assets/crv.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    80L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    6 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$80.00</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>All New Terios</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> SUV </span>
                            <img class="cars-photo" src="assets/allnewterios.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    90L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    6 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$74.00</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>CR - V</h3>
                                <img class="like" src="assets/like2.svg" alt="coração">
                            </div>
                            <span> SUV </span>
                            <img class="cars-photo" src="assets/crvblack.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    80L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    6 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$80.00</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>MG ZX Exclusice</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> Hatchback </span>
                            <img class="cars-photo" src="assets/mgzx.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    70L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    4 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$76.00</span><span>day</span>
                                    </div>
                                    <span class="ant">$80.00</span>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>New MG ZS</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> SUV </span>
                            <img class="cars-photo" src="assets/new.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    80L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    6 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$80.00</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>MG ZX Excite</h3>
                                <img class="like" src="assets/like2.svg" alt="coração">
                            </div>
                            <span> Hatchback </span>
                            <img class="cars-photo" src="assets/excite.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    90L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    4 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$74.00</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                    <form action="#">
                        <div class="card">
                            <div class="top">
                                <h3>New MG ZS</h3>
                                <img class="like" src="assets/likeing.svg" alt="coração">
                            </div>
                            <span> SUV </span>
                            <img class="cars-photo" src="assets/newmg.svg" alt="carro sport">
                            <section class="specification">
                                <span class="spec-gas">
                                    <img src="assets/gas-station.svg" alt="icone de gas">
                                    80L
                                </span>
                                <span class="spec-manual">
                                    <img src="assets/manual.svg" alt="icone de manual">
                                    Manual
                                </span>
                                <span class="spec-people">
                                    <img src="assets/profile-2user.svg" alt="icone de pessoas">
                                    6 People
                                </span>
                            </section>
                            <section class="money">
                                <div class="informoney">
                                    <div>
                                        <span class="infomoney">$80.00</span><span>day</span>
                                    </div>
                                </div>
                                <button class="rent">Rent Now</button>
                            </section>
                        </div>
                    </form>
                </div>
                <div class="show">
                        <button class="showbutton">Show more car</button>
                </div>
            </section>
        </section>
    </main>

    <footer> 
        <div class="vision">
            <div class="logo-vision">
                <img class="logo" src="assets/Logo.svg" alt="">
                <span> Our vision is to provide convenience and help increase your sales business. </span>
            </div>
            <div class="right">
                <div class="about">
                    <h2>About</h2>
                    <div class="info">
                        <span>How it Works</span>
                        <span>Featured</span>
                        <span>Partnership</span>
                        <span>Bussiness Relation</span>
                    </div>
                </div>
                <div class="community">
                    <h2>Community</h2>
                    <div class="info">
                        <span>Events</span>
                        <span>Blog</span>
                        <span>Podcast</span>
                        <span>Invite a Friends</span>
                    </div>
                </div>
                <div class="social">
                    <h2>Socials</h2>
                    <div class="info">
                        <span>Discord</span>
                        <span>Instagram</span>
                        <span>Twitter</span>
                        <span>Facebok</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="division"></div>
        <div class="last">
            <div class="reserved">
                <h2>&copy;2022 MORENT. All rights reserved</h2>
            </div>
            <div class="privacy">
                <span>Privacy & Policy</span>
                <span>Terms & Condition</span>
            </div>
        </div>
    </footer>
</body>
</html>