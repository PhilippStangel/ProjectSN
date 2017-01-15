<?php
namespace Step\Acceptance;

use Page\Acceptance\HomePage;

class SearchStep extends \AcceptanceTester
{
    // ----------------------- Main function ------------------------
    // --------------------------------------------------------------

    public function searchTest()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->searchSuccessful();
        $I->searchNotSuccessful();
        $I->searchAdvanced();
    }

    // ----------------------- Sub functions ------------------------
    // --------------------------------------------------------------

    private function searchSuccessful()
    {
        $I = $this;
        $I->fillField(HomePage::$searchInput, HomePage::$searchSuccessValue);
        $I->click(HomePage::$searchButton);
        $I->see(HomePage::$searchSuccessResult);
    }

    private function searchNotSuccessful()
    {
        $I = $this;
        $I->fillField(HomePage::$searchInput, HomePage::$searchNotSuccessValue);
        $I->click(HomePage::$searchButton);
        $I->see(HomePage::$searchNotSuccessResult);
    }

    private function searchAdvanced()
    {
        $I = $this;
        $I->click(HomePage::$searchSettingButton);
        $I->click(HomePage::$searchSettingAdvancedLink);
        $I->see(HomePage::$searchAdvancedText);
    }

}