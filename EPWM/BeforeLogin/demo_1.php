<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <title></title>
        <style>
            label.myLabel input[type="file"] {
                position:absolute;
                top: -1000px;
            }

            /***** Example custom styling *****/
            .myLabel {
                border: 2px solid #AAA;
                border-radius: 4px;
                padding: 2px 5px;
                margin: 2px;
                background: #DDD;
                display: inline-block;
            }
            .myLabel:hover {
                background: #CCC;
            }
            .myLabel:active {
                background: #CCF;
            }
            .myLabel :invalid + span {
                color: #A44;
            }
            .myLabel :valid + span {
                color: #4A4;
            }
        </style>
    </head>
    <body>
        <?php
//        include 'EmployeeHeader.php';
       
      
        ?>

        <label class="myLabel">
            <input type="file" required/>
            <span>My Label</span>
        </label>
    </body>
</html>
