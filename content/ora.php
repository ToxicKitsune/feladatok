<?php
function readClasses ($monthName){
    $filePath = "content/orak/". $monthName . ".txt";
    $fp = @fopen($filePath, "r");
        if ($fp) {
        while (($buffer = fgets($fp, 4096)) !== false) {
            echo '<div class="class p-1">';
            echo "<p>" . $buffer . "</p>";
            echo "</div>";
        }
        if (!feof($fp)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($fp);
    }
}
?>
<div class = "row m-0 bg">
    <div class = "col-md-8 offset-md-2 p-0 overflow-hidden">
        <div class="mainContent justify-content-center">
            <div class="row m-0">
                <div class="col-sm m-0 p-0 h-100">
                    <div class="month">
                        <h1>September</h1>
                        <div class="classHolder row">
                        <?php
                            readClasses("september");
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-0 p-0 h-100">
                    <div class="month">
                        <h1>October</h1>
                        <div class="classHolder row">
                        <?php
                            readClasses("october");
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-0 p-0 h-100">
                    <div class="month">
                        <h1>November</h1>
                        <div class="classHolder row">
                        <?php
                            readClasses("november");
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-0 p-0 h-100">
                    <div class="month">
                        <h1>December</h1>
                        <div class="classHolder row">
                        <?php
                            readClasses("december");
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>