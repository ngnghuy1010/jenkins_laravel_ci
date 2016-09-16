<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                margin: 0 100px;
            }

            .title {
                font-size: 30px;
            }
            .stage{
                background-color: #f0f0f0;
                padding: 10px;
                margin: 0 150px 150px;
            }
            ol {
                list-style :none;
                padding: 0;
                margin: 0;
            }
            .seats {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: flex-start;
            }
            .seat{
                display: flex;
                padding: 10px;
                position: relative;
            }
            .seat input[type=checkbox] {
                position: absolute;
                opacity: 0;
            }
            label{
                display: block;
                position: relative;
                height: 25px;
                width: 25px;
                line-height: 25px;
                text-align: center;
                font-size: 14px;
                font-weight: bold;
                padding: 5px;
                background: #B9DEA0;
                border-radius: 5px;
                cursor: pointer;
            }
            .row-seat{
                background: none !important;
            }
            .cabin{
                margin: auto;
                margin-bottom: 50px;
                display: table;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="panel">
                <div class="stage">
                    <h2 class="title">SCREEN</h2>
                </div>
            </div>

            <div class="panel">
                <ol class="cabin">
                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">4</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>

                    <li class="row">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <label class="row-seat">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="1" />
                                <label for="1">1</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="2" />
                                <label for="2">2</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="3" />
                                <label for="3">3</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="4" />
                                <label for="4">4</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="5" />
                                <label for="5">5</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="6" />
                                <label for="6">6</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="7" />
                                <label for="7">7</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="8" />
                                <label for="8">8</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="9" />
                                <label for="9">9</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" id="10" />
                                <label for="10">10</label>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
    </body>
</html>
