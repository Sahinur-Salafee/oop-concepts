<?php 
trait NumberSeriesOne {

    function numberSeriesA() {
        echo "This is number series A";
    }

    function numberSeriesB() {
        echo "This is number series B";
    }
}

trait NumberSeriesTwo {
    function numberSeriesC() {
        echo "This is number series C";
    }

    function numberSeriesD() {
        echo "This is number series D";
    }
}

class NumberSeries {
    use NumberSeriesOne;
}

$n = new NumberSeries();
$n->numberSeriesB();