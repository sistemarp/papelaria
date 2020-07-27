<?php

if(isset($_POST["msg_error"])){
    echo "<style>
        .msg_error{
            display: block;
            width: 100%;
            height: 40px;
            
            text-align: center;
            font-family: arial;
            font-style: normal;
            font-weight: bold;
            font-size: 12pt;
            color: red;
            background-color: rgba(250, 10, 10, 0.3);

            border-radius: 7px;
            text-shadow: 1px 1px 3px black;
            box-shadow: 2px 2px 10px black;
        }
        </style>
        
        <div class='msg_error'>
            <span>".$_POST["msg_error"]."</span>
        </div>";
}

?>