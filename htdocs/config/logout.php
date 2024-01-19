<?php
session_start();

session_destroy();



header ("Location: ../index.php?success=Bravo pour ton Rage-Quit!");