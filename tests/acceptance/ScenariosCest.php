<?php


use Step\Acceptance\SearchStep;


class ScenariosCest
{
    public function Scenarios(SearchStep $I)
    {
        $I->searchTest();
        // TODO: search advanced tests
    }
}