<?php
trait NumberSeriesOne{
    function numberSeriesA() {
        echo "Number Series A \n";
        parent::numberSeriesA();
    }

    function numberSeriesB() {
        echo "Number Series B \n";
    }
}

class SomeClasses {
    function numberSeriesA() {
        echo "Printing number SeriesA \n";
    }
}

class NumberSeries extends SomeClasses {
    use NumberSeriesOne;
}

$ns = new NumberSeries();
$ns->numberSeriesA();

?>