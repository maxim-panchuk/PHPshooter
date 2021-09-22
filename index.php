<?php
    session_start();
    $table='';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
          crossorigin="anonymous">
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <title>Page</title>
</head>
<body>

    <header>
        <div class="container-fluid align-items-center">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <h1><strong>Панчук Максим, P3214</strong></h1>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h3>Лабораторная работа №1</h3>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h3>Вариант: 14202</h3>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 mt-5 justify-content-center align-items-center">
                    <img src="/pictures/img.png" class="img-fluid">
                </div>
                <div class="col-3 mt-5">
                    <form method="post" action="incs/action.php">
                        <legend id="legend">Введите координаты</legend>
                        <div class="mb-3">
                            <p>X  value</p>
                            <div class="row ml-3">
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad1" value="-2.0">
                                    <label class="form-check-label" for="rad1">
                                        -2.0
                                    </label>
                                </div>
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad2" value="-1.5">
                                    <label class="form-check-label" for="rad2">
                                        -1.5
                                    </label>
                                </div>
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad3" value="-1.0">
                                    <label class="form-check-label" for="rad3">
                                        -1.0
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad4" value="-0.5">
                                    <label class="form-check-label" for="rad4">
                                        -0.5
                                    </label>
                                </div>
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad5" value="0.0">
                                    <label class="form-check-label" for="rad5">
                                        0.0
                                    </label>
                                </div>
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad6" value="0.5">
                                    <label class="form-check-label" for="rad6">
                                        0.5
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad7" value="1.0">
                                    <label class="form-check-label" for="rad7">
                                        1.0
                                    </label>
                                </div>
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad8" value="1.5">
                                    <label class="form-check-label" for="rad8">
                                        1.5
                                    </label>
                                </div>
                                <div class="form-check col-4">
                                    <input class="form-check-input radio" type="radio" name="radios" id="rad9" value="2.0">
                                    <label class="form-check-label" for="rad9">
                                        2.0
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p>Y  value</p>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="inputY" name = "inputY" onkeyup="this.value = this.value.replace(/[^\d]/g,'');">
                            <label for="inputY"></label>
                        </div>
                        <div class="mb-3">
                            <p>R  value</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input check-box" type="checkbox" id="inlineCheckbox1" value="1.0" name="check[]">
                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check-box" type="checkbox" id="inlineCheckbox2" value="1.5" name="check[]">
                                <label class="form-check-label" for="inlineCheckbox2">1.5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check-box" type="checkbox" id="inlineCheckbox3" value="2.0" name="check[]">
                                <label class="form-check-label" for="inlineCheckbox3">2.0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check-box" type="checkbox" id="inlineCheckbox4" value="2.5" name="check[]">
                                <label class="form-check-label" for="inlineCheckbox4">2.5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check-box" type="checkbox" id="inlineCheckbox5" value="3.0" name="check[]">
                                <label class="form-check-label" for="inlineCheckbox5">3</label>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary" id="send" name="sendButton">Отпарвить</button>
                        <button type="submit" class="btn btn-secondary" id="reset" name="resetButton">Очистить</button>
                    </form>
                </div>
                <div class="col-5 mt-5">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">X</th>
                            <th scope="col">Y</th>
                            <th scope="col">R</th>
                            <th scope="col">Time</th>
                            <th scope="col">Execution Time</th>
                            <th scope="col">Result</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            print_r($_SESSION['table']);
                            //echo $_SESSION['message']
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
    <script src="js/act.js"></script>
</body>
</html>
