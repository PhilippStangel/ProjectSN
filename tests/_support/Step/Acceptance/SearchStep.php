<?php
namespace Step\Acceptance;

use Page\Acceptance\HomePage;

class SearchStep extends \AcceptanceTester
{
    // Main function
    public function searchTest()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->searchSuccessful();
        $I->searchNotSuccessful();
    }

    private function searchSuccessful()
    {
        $I = $this;
        $I->fillField(HomePage::$searchInput, HomePage::$searchSuccessValue);
        $I->click(HomePage::$searchButton);
        $I->see(HomePage::$resultTable);
        $I->see(HomePage::$searchSuccessResult);
    }

    private function searchNotSuccessful()
    {
        $I = $this;
        $I->fillField(HomePage::$searchInput, HomePage::$searchNotSuccessValue);
        $I->click(HomePage::$searchButton);
        $I->see(HomePage::$searchNotSuccessResult);
    }

}