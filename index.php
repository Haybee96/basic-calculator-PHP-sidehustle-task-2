<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BASIC CALCULATOR WITH PHP</title>
        <style>
            .calculator__form, .result {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            input, select {
                padding: 5px 5px;
            }
            .calculate__btn {
                background-color: green;
                color: white;
                border: none;
                cursor: pointer;
                padding: 10px 10px;
            }
            .calculate__btn:focus, select:focus {
                outline: none;
            }

            form > div {
                margin-top: 5px;
            }
            p {
                font-size: 25px;
            }
        </style>
    </head>

    <body>
        <div class="calculator__form">
            <form action="">
                <div class="first__el">
                    <input type="number" placeholder="Value 1" name="val1">
                </div>

                <div class="second__el">
                    <input type="number" placeholder="Value 2" name="val2">
                </div>

                <div class="operator__el">
                    <select name="operator" id="operator">
                        <option>Select operator</option>
                        <option>Add</option>
                        <option>Subtract</option>
                        <option>Multiply</option>
                        <option>Divide</option>
                        <option>Modulus</option>
                    </select>
                </div>

                <div class="calculate__btn-box">
                    <button type='submit' name="submit" value="submit" class='calculate__btn'>Calculate</button>
                </div>
            </form>
            
        </div>

        <div class="result">
            <div>
                <h2>Result</h2>
                <p>
                    <?php
                        if (isset($_GET['submit'])) {
                            $value_1 = $_GET['val1'];
                            $value_2 = $_GET['val2'];
                            $operator = $_GET['operator'];

                            if (!isset($value_1) && !isset($value_2)) {
                                echo ('Please provide your values');
                            }

                            switch($operator) {
                                case 'Select operator':
                                    echo ('Bad request. Cannot process the result of unknown operator. Please select an operator.');
                                case 'Add':
                                    echo ($value_1 + $value_2);
                                break;
                                case 'Subtract':
                                    echo ($value_1 - $value_2);
                                break;
                                case 'Multiply':
                                    echo ($value_1 * $value_2);
                                break;
                                case 'Divide':
                                    echo ($value_1 / $value_2);
                                break;
                                case 'Modulus':
                                    echo ($value_1 % $value_2);
                                break;
                            }

                        }
                    ?>
                </p>

            </div>
        </div>
<!-- basic-calculator-PHP-sidehustle-task-2 -->
        

       
    </body>
</html>