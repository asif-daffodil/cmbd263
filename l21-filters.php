<?php
echo filter_var("asif@dti.ac", FILTER_VALIDATE_EMAIL) ? "Valid" : "Invalid";
