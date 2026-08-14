<?php
try
{
    $num1 = 20;
    $num2 = 0;

    if ($num2 == 0)
    {
        throw new Exception("Cannot divide by zero.");
    }

    $result = $num1 / $num2;
    echo "Result: $result";
}
catch (Exception $e)
{
    echo "Error: " . $e->getMessage();
}
finally
{
    echo "<br>Division operation completed.";
}
?>