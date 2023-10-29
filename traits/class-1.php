<?php 
trait NumberSeriesOne {

    private function numberSeriesA() {
        echo "This is number series A <br>";
    }

    function numberSeriesB() {
        $this->numberSeriesA();
        echo "This is number series B <br>";
    }
}

trait NumberSeriesTwo {

    use NumberSeriesOne; // One trait can use another trait

    function numberSeriesC() {
        echo "This is number series C <br>";
    }

    function numberSeriesD() {
        echo "This is number series D <br>";
    }
}

class NumberSeries {
    use NumberSeriesTwo; // class can use multiple trait
}

$ns = new NumberSeries();
// $ns->numberSeriesA();
$ns->numberSeriesB();
$ns->numberSeriesC();
$ns->numberSeriesD();