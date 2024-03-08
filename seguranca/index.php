<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mimikyu information</title>
    <link rel="icon" href="c6c61a616da3d04590558c4dfcf402d3.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            padding: 0;
            margin: 0 auto;
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmvsEBivW6jrYaarVuod1IzkJnz4zHxbQpIw&usqp=CAU);
            font-family: "Fira Sans", 'Arial Narrow', Arial, sans-serif;
            font-size: 1rem;
        }
        div.login-btn {
            display: flex;
            flex-direction: row;
            row-gap: 10px;
            margin: 5px 0;
        }
        div.pass-btn {
            display: flex;
            flex-direction: row;
            row-gap: 10px;
            margin: 5px 0;
        }
        main {
            max-width: 1100px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        header {
            display: flex;
            justify-content: space-around;
            margin-bottom: 50px;
            background-image: linear-gradient(#313131, #000);
            padding-top: 10px;
            padding-bottom: 25px;
        }
        .center{
            text-align: center;
        }
        .lista {
            display: flex;
            flex-direction: column;
        }
        .principal {
            display: flex;
            justify-content: space-between;
        }
        .aside {
            display: flex;
            flex-direction: column;
        }
        .barra-stats {
            border-radius: 5px;
            border: solid 0.1px rgb(165, 165, 165);
            margin-right: 300px ;
        }
        .barra {
            border-radius: 5px;
            border: solid 0.1px rgb(165, 165, 165);
        }
        .barra-defenses {
            border-radius: 1px;
            border: solid 1px #f0f0f0;
        }
        .bom {
            padding: 8px;
            background-color: lime;
        }
        .medio {
            padding: 8px;
            background-color: rgb(254, 221, 52);
        }
        .ruim {
            padding: 8px 0;
            background-color: rgb(247, 82, 32);
        }
        .stats-table {
            max-width: 600px;
        }
        .type_normal {
            background-color: #aaaa99;
        }
        .type_fire {
            background-color: #ff4422;
        }
        .type_water {
            background-color: #3399ff;
        }
        .type_eletric {
            background-color: #ffcc33;
        }
        .type_grass {
            background-color: #77cc55;
        }
        .type_ice {
            background-color: #66ccff;
        }
        .type_figth {
            background-color: #bb5544;
        }
        .type_poison {
            background-color: #aa5599;
        }
        .type_ground {
            background-color: #ddbb55;
        }
       .type_flying {
        background-color: #8899ff;
       }
       .type_psychic{
        background-color: #ff5599;
       }
       .type_bug {
        background-color: #aabb22;
       }
       .type_rock {
        background-color: #bbaa66;
       }
       .type_ghost {
        background-color: #6666bb;
       }
       .type_dragon {
        background-color: #7766ee;
       }
       .type_dark {
        background-color: #775544;
       }
       .type_steel {
        background-color: #aaaabb;
       }
       .type_fairy {
        background-color: #ee99ee;
       }
        .type-block {
            font-size: 11px;
            height: 30px;
            width: 30px;
            color: #fff8f5;
            display: flex;
            justify-content: center;
            align-items: center;
        } 
        .type-tag {
            font-size: 15px;
            height: 23px;
            width: 70px;
            color: #fff8f5;
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            align-items: center;
            box-shadow: #000 2px 2px;
        }
        .lado-a-lado {
            display: flex;
        column-gap: 4px;
        }
        .dn-0 {
            background-color: #2e3436;
            color: #ffcd43;
            font-size: 15px;
        }
        .dn-2 {
            background-color: #4e9a06;
            color: #ffcd43;
            font-size: 15px;
        }
        .dn-medio {
            background-color: #7c0000;
            color: #ffcd43;
            font-size: 17px;
        }
        .secundaria {
            display: flex;
            justify-content: space-around;
        }
        .titulo {
            color: #1fafec;
        }
        tr {
            border-bottom: 2px solid #ddd;
            border-top: 2px solid #ddd;
        }
        table {
            border-collapse:collapse;
            border-spacing: 0;
        }
        th, td {
            padding: 7px 10px;
        }
        td:not(:last-child) {
            padding-right: 3px;
        }
        table.defense {
            border-collapse:unset;
            margin-top: 10px;
        }
        table.defense td, table.defense th {
            padding: 0;
        }
        table.pokedex th.Sun {
            color: #dd863f ;
        }
        table.pokedex th.Moon {
            color: #86b4fb ;
        }
        table.pokedex th.UltraSun {
            color: #db8d68 ;
        }
        table.pokedex th.UltraMoon {
            color: #86b4fb ;
        }
        table.pokedex th.Sword {
            color: #8081d8 ;
        }
        table.pokedex th.Shield {
            color: #c03028 ;
        }
        table.pokedex th.Scarlet {
            color: #a3273c ;
        }
        table.pokedex th.Violet {
            color: #9921a3 ;
        }
        .iamgem {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .tabela-moves {
            display: flex;
            justify-content: space-evenly;
            border-collapse: collapse;
        }
        .bylv {
            max-width: 450px;
        }
        .bytm {
            max-width: 400px;
        }
        .nome {
          margin-right: 105px;  
        }
        .espaco {
            margin: 0 10px;
        }
        .ogen {
            display: flex;
            justify-content: center;
            background-color: #a7dcf3;
            padding: 5px 300px;
            margin-top: 30px;
            border-radius: 5px;
        }
        a:not(:last-child)::after  {
            content: " | " ;
        }
        a {
            text-decoration: none;
        }
        a.x:link{
            color: #fff
        }
        a.x:visited {
            color: #fff
        }

        .tsprites {
            border-collapse: collapse;

        }
        table.tsprites th {
            border: #f0f0f0 solid 2px;
            background-color: #bbb8b8;
        }
        table.tsprites td {
            border: #f0f0f0 solid 2px;
        }
        .sprites {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        footer {
            background-image: linear-gradient(#000, #313131);
            padding: 10px;
            margin-top: 30px;
            color: #fff
        }
    </style>
</head>
<body>
    <header>
        <div>
        <h1 class="titulo"> Mimikyu nformation</h1>
        </div>
        <nav>
            <form method="post" action="welcome.php">
            <div class="login-btn">
                <input type="text" name="usuario" placeholder="Login" required>
            </div>
            <div class="pass-btn">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>
                <button>enviar</button>
            </form>
        </nav>
    </header>
    <main>
        <h2 class="center">
            Mimikyu
        </h2>
        <p>
            Mimikyu is a <span style="color: #6666bb">Ghost</span>/<span style="color: #ee99ee;">Fairy</span> type Pokémon introduced in Generation 7.
        </p>
        <p>
            Mimikyu lives its life completely covered by its cloth and is always hidden. People believe that anybody who sees its true form beneath the cloth will be stricken with a mysterious illness. People in the Alola region are convinced that you must never try to peek beneath its covering. Mimikyu's health fails when it’s bathed in the rays of the sun, so it prefers to stick to dark places. It’s rumored that the reason it covers itself with a cloth is to avoid sunlight.
        </p>
    <div class="principal">
        <div class="iamgem"><img src="https://img.pokemondb.net/artwork/mimikyu.jpg" alt="issoai" width="250" height="300"></div>
        <div>
            <h2>Pokédex data</h2>
            <table>
                <tr>
                    <th>National №</th>
                    <td>0778</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><div class="lado-a-lado"><span class="barra type_ghost type-tag">Ghost</span> <span class="barra type_fairy type-tag">Fairy</span></div></td>
                </tr>
                <tr>
                    <th>Species</th>
                    <td>Disguise Pokémon</td>
                </tr>
                <tr>
                    <th>Height</th>
                    <td>0.2 m (0′08″)</td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td>0.7 kg (1.5 lbs)</td>
                </tr>
                <tr>
                    <th>Abilities</th>
                    <td>1. Disguise</td>
                </tr>
                <tr>
                    <th>Local №</th>
                    <td class="lista">0242 (Sun/Moon — Alola dex)</td>
                    <td class="lista">0315 (U.Sun/U.Moon — Alola dex)</td>
                    <td class="lista">0301 (Sword/Shield)</td>
                    <td class="lista">0239 (Scarlet/Violet)</td>
                    <td class="lista">0046 (The Crown Tundra)</td>
                    <td class="lista">0189 (The Teal Mask)</td>
                </tr>
            </table>
        </div>
        <div class="aside">
            <h2>Training</h2>
            <table>
                <tr>
                    <th>EV yield</th>
                    <td>2 Sp. Def</td>
                </tr>
                <tr>
                    <th>Catch rate</th>
                    <td>45 (5.9% with PokéBall, full HP)</td>
                </tr>
                <tr>
                    <th>Base Friendship</th>
                    <td>50 (normal)</td>
                </tr>
                <tr>
                    <th>Base Exp.</th>
                    <td>167</td>
                </tr>
                <tr>
                    <th>Growth Rate</th>
                    <td>Medium Fast</td>
                </tr>
            </table>
            <h2>Breeding</h2>
            <table>
                <tr>
                    <th>Egg Groups</th>
                    <td>Amorphous</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>50% male, 50% female</td>
                </tr>
                <tr>
                    <th>Egg cycles</th>
                    <td>20 (4,884–5,140 steps)</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="secundaria">
        <div class="stats-table">
            <h2>Base stats</h2>
            <table>
                <tr>
                    <th>HP</th>
                    <td>55</td>
                    <td><div class="barra-stats ruim" style="width: 29%;"></div></td>
                    <td>220</td>
                    <td>314</td>
                </tr>
                <tr>
                    <th>Attack</th>
                    <td>90</td>
                    <td><div class="barra-stats bom" style="width: 50%;"></div></td>
                    <td>166</td>
                    <td>306</td>
                </tr>
                <tr>
                    <th>Defense</th>
                    <td>80</td>
                    <td><div class="barra-stats medio" style="width: 38%;"></div></td>
                    <td>148</td>
                    <td>284</td>
                </tr>
                <tr>
                    <th>Sp. Atk</th>
                    <td>50</td>
                    <td><div class="barra-stats ruim" style="width: 24%;"></div></td>
                    <td>94</td>
                    <td>218</td>
                </tr>
                <tr>
                    <th>Sp. Def</th>
                    <td>105</td>
                    <td><div class="barra-stats bom" style="width: 60%;"></div></td>
                    <td>193</td>
                    <td>339</td>
                </tr>
                <tr>
                    <th>Speed</th>
                    <td>96</td>
                    <td><div class="barra-stats bom" style="width: 54.5%;"></div></td>
                    <td>177</td>
                    <td>320</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>476</td>
                    <td class=""></td>
                    <td>Min</td>
                    <td>Max</td>
                </tr>
            </table>
            <p class="table-p">The ranges shown on the right are for a level 100 Pokémon. Maximum values are based on a beneficial nature, 252 EVs, 31 IVs; minimum values are based on a hindering nature, 0 EVs, 0 IVs.

            </p>
        </div>
        <div class="def-table">
            <h2>Type defenses</h2>
        <table class="defense">
            <tr>
                <th><div class="barra-defenses type_normal type-block">NOR</div></th>
                <th><div class="barra-defenses type_fire type-block">FIR</div></th>
                <th><div class="barra-defenses type_water type-block">WAT</div></th>
                <th><div class="barra-defenses type_eletric type-block">ELE</div></th>
                <th><div class="barra-defenses type_grass type-block">GRA</div></th>
                <th><div class="barra-defenses type_ice type-block">ICE</div></th>
                <th><div class="barra-defenses type_figth type-block">FIG</div></th>
                <th><div class="barra-defenses type_poison type-block">POI</div></th>
                <th><div class="barra-defenses type_ground type-block">GRO</div></th>
            </tr>
            <tr>
                <td><div class="barra-defenses type-block dn-0">0</div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block dn-0">0</div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block"></div></td>
            </tr>
        </table>
        <table class="defense">
            <tr>
                <th><div class="barra-defenses type_flying type-block">FLY</div></th>
                <th><div class="barra-defenses type_psychic type-block">PSY</div></th>
                <th><div class="barra-defenses type_bug type-block">BUG</div></th>
                <th><div class="barra-defenses type_rock type-block">ROC</div></th>
                <th><div class="barra-defenses type_ghost type-block">GHO</div></th>
                <th><div class="barra-defenses type_dragon type-block">DRA</div></th>
                <th><div class="barra-defenses type_dark type-block">DAR</div></th>
                <th><div class="barra-defenses type_steel type-block">STE</div></th>
                <th><div class="barra-defenses type_fairy type-block">FAI</div></th>
            </tr>
            <tr>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block dn-medio">¼</div></td>
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block dn-2">2</div></td>
                <td><div class="barra-defenses type-block dn-0">0</div></td>                
                <td><div class="barra-defenses type-block"></div></td>
                <td><div class="barra-defenses type-block dn-2">2</div></td>
                <td><div class="barra-defenses type-block"></div></td>
            </tr>
        </table>
        </div>
    </div>
    <div>
        <h2>Evolution chart</h2>
        <ul>
            <li>Mimikyu does not evolve.</li>
        </ul>
    </div>
    <div>
        <h2>Mimikyu changes</h2>
        <ul>
            <li>In Generation 7, Mimikyu has a base Friendship value of 70.</li>
        </ul>
    </div>
    <div>
        <h2>Pokédex entries</h2>
        <h3>Busted Form</h3>
        <table class="pokedex">
            <tr>
                <th class="Sun">Sun</th>
                <td>After going to all the effort of disguising itself, its neck was broken. Whatever is inside is probably unharmed, but it’s still feeling sad.</td>
            </tr>
            <tr>
                <th class="Moon">Moon</th>
                <td>If its neck is broken or its rag torn during an attack, it works through the night to patch it.</td>
            </tr>
            <tr>
                <th class="UltraSun">Ultra Sun</th>
                <td>It stands in front of a mirror, trying to fix its broken neck as if its life depended on it. It has a hard time getting it right, so it’s crying inside.</td>
            </tr>
            <tr>
                <th class="UltraMoon">Ultra Moon</th>
                <td>Sad that its true identity may be exposed, Mimikyu will mercilessly seek revenge on any opponent that breaks its neck.</td>
            </tr>
            <tr>
                <th class="Sword">Sword</th>
                <td>There will be no forgiveness for any who reveal that it was pretending to be Pikachu. It will bring the culprit down, even at the cost of its own life.</td>
            </tr>
            <tr>
                <th class="Shield">Shield</th>
                <td>Its disguise made from an old rag allowed it to avoid an attack, but the impact broke the neck of the disguise. Now everyone knows it’s a Mimikyu.</td>
            </tr>
            <tr>
                <th class="Scarlet">Scarlet</th>
                <td>Even as it struggles beneath the cloth to repair the broken neck of its disguise, Mimikyu keeps up its impersonation of Pikachu.</td>
            </tr>
            <tr>
                <th class="Violet">Violet</th>
                <td>It has taken damage and can no longer hold the head of its cloth disguise upright. For as long as it lives, Mimikyu will never forget its attacker.
                </td>
            </tr>
        </table>
        <h3>Disguised Form</h3>
        <table class="pokedex">
            <tr>
                <th class="Sun">Sun</th>
                <td>Its actual appearance is unknown. A scholar who saw what was under its rag was overwhelmed by terror and died from the shock.</td>
            </tr>
            <tr>
                <th class="Moon">Moon</th>
                <td>A lonely Pokémon, it conceals its terrifying appearance beneath an old rag so it can get closer to people and other Pokémon.</td>
            </tr>
            <tr>
                <th class="UltraSun">Ultra Sun</th>
                <td>Although it’s a quiet, lonely Pokémon, if you try to look at what’s under its rag, it will become agitated and resist violently.</td>
            </tr>
            <tr>
                <th class="UltraMoon">Ultra Moon</th>
                <td>A gust of wind revealed what hides under this Pokémon’s rag to a passing Trainer, who went home and died painfully that very night.</td>
            </tr>
            <tr>
                <th class="Sword">Sword</th>
                <td>It wears a rag fashioned into a Pikachu costume in an effort to look less scary. Unfortunately, the costume only makes it creepier.</td>
            </tr>
            <tr>
                <th class="Shield">Shield</th>
                <td>There was a scientist who peeked under Mimikyu’s old rag in the name of research. The scientist died of a mysterious disease.</td>
            </tr>
            <tr>
                <th class="Scarlet">Scarlet</th>
                <td>This Pokémon lives in dark places untouched by sunlight. When it appears before humans, it hides itself under a cloth that resembles a Pikachu.</td>
            </tr>
            <tr>
                <th class="Violet">Violet</th>
                <td>Mimikyu was only recently identified as a Pokémon. Previously, people thought it was just a ghost wearing a cloth.</td>
            </tr>
        </table>
    </div>
    <h2>Moves learned by Mimikyu</h2>
    <div class="tabela-moves">
        <div class="bylv">
            <h3>Moves learnt by level up</h3>
            <p>Mimikyu learns the following moves in Pokémon Sun & Moon at the levels specified.</p>
            <table>
                <tr>
                    <th>LV.</th>
                    <th><span class="nome">Move</span></th>
                    <th>Type</th>
                    <th><span class="espaco">Cat.</span></th>
                    <th>Power</th>
                    <th>Acc.</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Astonish</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">30</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="nome">Copycat</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="nome">Scratch</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">40</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="nome">Splash</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="nome">Wood Hammer</td>
                    <td><span class="barra type_grass type-tag">Grass</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">120</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="nome">Double Team</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="nome">Baby-Doll Eyes</td>
                    <td><span class="barra type_fairy type-tag">Fairy</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td class="nome">Shadow Sneak</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">40</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td class="nome">Mimic</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td class="nome">Feint Attack</td>
                    <td><span class="barra type_dark type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">60</td>
                    <td align="right">∞</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td class="nome">Charm</td>
                    <td><span class="barra type_fairy type-tag">Fairy</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td class="nome">Slash</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">70</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td class="nome">Shadow Claw</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">70</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>41</td>
                    <td class="nome">Hone Claws</td>
                    <td><span class="barra type_dark type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>46</td>
                    <td class="nome">Play Rough</td>
                    <td><span class="barra type_fairy type-tag">Fairy</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">90</td>
                    <td align="right">90</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td class="nome">Pain Split</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
            </table>
            <h3>Egg moves</h3>
            <p>Mimikyu learns the following moves via breeding in Pokémon Sun & Moon. Details and compatible parents can be found below.</p>
            <table>
                <tr>
                    <th><span class="nome">Move</span></th>
                    <th>Type</th>
                    <th><span class="espaco">Cat.</span></th>
                    <th>Power</th>
                    <th>Acc.</th>
                </tr>
                <tr>
                    <td>Curse</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td class="nome">Destiny Bond</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td class="nome">Grudge</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td class="nome">Nightmare</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
            </table>
        </div>
        <div class="bytm">
            <h2>Moves learnt by TM</h2>
            <p>Mimikyu is compatible with these Technical Machines in Pokémon Sun & Moon:</p>
            <table>
                <tr>
                    <th>LV.</th>
                    <th><span class="nome">Move</span></th>
                    <th>Type</th>
                    <th><span class="espaco">Cat.</span></th>          <!-- https://img.pokemondb.net/images/icons/move-special.png -->
                    <th>Power</th>          <!-- https://img.pokemondb.net/images/icons/move-status.png -->
                    <th>Acc.</th>           <!-- https://img.pokemondb.net/images/icons/move-physical.png -->
                </tr>
                <tr>
                    <td>1</td>
                    <td>Work Up</td>
                    <td align="center"><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="nome">Toxic</td>
                    <td><span class="barra type_poison type-tag">Poison</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">90</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td class="nome">Bulk Up</td>
                    <td><span class="barra type_figth type-tag">Fight</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="nome">Hidden Power</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">60</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td class="nome">Taunt</td>
                    <td><span class="barra type_ghost type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td class="nome">Hyper Beam</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">150</td>
                    <td align="right">90</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td class="nome">Light Screen</td>
                    <td><span class="barra type_psychic type-tag">Psychic</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td class="nome">Protect</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td class="nome">Safeguard</td>
                    <td><span class="barra type_ghost type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td class="nome">Frustration</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td class="nome">Thunderbolt</td>
                    <td><span class="barra type_eletric type-tag">Eletric</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">90</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td class="nome">Thunder</td>
                    <td><span class="barra type_eletric type-tag">Eletric</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">110</td>
                    <td align="right">70</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td class="nome">Return</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td class="nome">Leech Life</td>
                    <td><span class="barra type_bug type-tag">Bug</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">80</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td class="nome">Psychic</td>
                    <td><span class="barra type_psychic type-tag">Psychic</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">90</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td class="nome">Shadow Ball</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">80</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td class="nome">Double Team</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>42</td>
                    <td class="nome">Facade</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">70</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>44</td>
                    <td class="nome">Rest</td>
                    <td><span class="barra type_psychic type-tag">Psychic</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>45</td>
                    <td class="nome">Attract</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>46</td>
                    <td class="nome">Thief</td>
                    <td><span class="barra type_dark type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">60</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>48</td>
                    <td class="nome">Round</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">60</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>56</td>
                    <td class="nome">Fling</td>
                    <td><span class="barra type_dark type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>57</td>
                    <td class="nome">Charge Beam</td>
                    <td><span class="barra type_eletric type-tag">Eletric</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">50</td>
                    <td align="right">90</td>
                </tr>
                <tr>
                    <td>61</td>
                    <td class="nome">Will-O-Wisp</td>
                    <td><span class="barra type_fire type-tag">Fire</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">85</td>
                </tr>
                <tr>
                    <td>63</td>
                    <td class="nome">Embargo</td>
                    <td><span class="barra type_dark type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>65</td>
                    <td class="nome">Shadow Claw</td>
                    <td><span class="barra type_ghost type-tag">Ghost</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">70</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td class="nome">Payback</td>
                    <td><span class="barra type_dark type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">50</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>73</td>
                    <td class="nome">Thunder Wave</td>
                    <td><span class="barra type_eletric type-tag">Eletric</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">90</td>
                </tr>
                <tr>
                    <td>75</td>
                    <td class="nome">Swords Dance</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>77</td>
                    <td class="nome">Psych Up</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>81</td>
                    <td class="nome">X-Scissor</td>
                    <td><span class="barra type_bug type-tag">Bug</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-physical.png" alt="" height="25" width="35"></td>
                    <td align="right">80</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>83</td>
                    <td class="nome">Infestation</td>
                    <td><span class="barra type_bug type-tag">Bug</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">20</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>85</td>
                    <td class="nome">Dream Eater</td>
                    <td><span class="barra type_psychic type-tag">Psychic</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">100</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>87</td>
                    <td class="nome">Swagger</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">85</td>
                </tr>
                <tr>
                    <td>88</td>
                    <td class="nome">Sleep Talk</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>90</td>
                    <td class="nome">Substitute</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>92</td>
                    <td class="nome">Trick Room</td>
                    <td><span class="barra type_psychic type-tag">Psychic</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
                <tr>
                    <td>97</td>
                    <td class="nome">Dark Pulse</td>
                    <td><span class="barra type_dark type-tag">Dark</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">80</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>99</td>
                    <td class="nome">Dazzling Gleam</td>
                    <td><span class="barra type_fairy type-tag">Fairy</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-special.png" alt="" height="25" width="35"></td>
                    <td align="right">80</td>
                    <td align="right">100</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td class="nome">Confide</td>
                    <td><span class="barra type_normal type-tag">Normal</span></td>
                    <td align="center"><img src="https://img.pokemondb.net/images/icons/move-status.png" alt="" height="25" width="35"></td>
                    <td align="right">—</td>
                    <td align="right">—</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="ogen"><p>In other generations <a href="https://pokemondb.net/pokedex/mimikyu/moves/7">7</a> <a href="https://pokemondb.net/pokedex/mimikyu/moves/8">8</a> <a href="https://pokemondb.net/pokedex/mimikyu/moves/9">9</a></p></div>
    <h2>Mimikyu sprites</h2>
    <div class="sprites">
        <table class="tsprites">
            <tr>
                <th align="center"><span style="margin-right: 40px">Type</span></th>
                <th>Generation 7</th>
                <th>Generation 8</th>
                <th>Generation 9</th>
            </tr>
            <tr>
                <td align="center">Normal</td>
                <td align="center"><a href="https://pokemondb.net/pokedex/mimikyu"><img src="https://img.pokemondb.net/sprites/sun-moon/normal/mimikyu.png" alt="Mimikyu" height="180"></a></td>
                <td align="center"><a href="https://pokemondb.net/pokedex/mimikyu"><img src="https://img.pokemondb.net/sprites/sword-shield/normal/mimikyu.png" alt="Mimikyu"></a></td>
                <td align="center"><a href="https://pokemondb.net/pokedex/mimikyu"><img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/mimikyu.png" alt="Mimikyu" height="140"></a></td>
            </tr>
            <tr>
                <td align="center">Shiny</td>
                <td align="center"><a href="https://pokemondb.net/pokedex/mimikyu"><img src="https://img.pokemondb.net/sprites/sun-moon/shiny/mimikyu.png" alt="Mimikyu" height="180"></a></td>
                <td align="center">—</td>
                <td align="center">—</td>
            </tr>
        </table>
    </div>
    </main>
    <footer><p>Pokémon images & names © 1995-2024 Nintendo/Game Freak.</p>
        <a class="x" href="https://twitter.com/u_Punki_1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                    </svg>
        </a>
        <a class="x" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg></a>
          <a class="x" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
          </svg></a>
          <a class="x" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg></a>
    </footer>
</body>
</html>