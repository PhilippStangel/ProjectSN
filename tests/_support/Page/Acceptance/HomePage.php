<?php
namespace Page\Acceptance;

class HomePage
{
    static $searchInput = 'input#query';
    static $searchButton = 'input#search';
    static $searchSettingButton = 'div#search-options';
    static $searchSettingAdvancedLink = 'a#advanced-search-link';

/*  i would prefer to test real data, like test data (to see a real result),
    this would also make easier to check how the search is working with e.g. only a parts of a file name or auto complete.
    but for this test, results can change all the time, that's why i just check the result message */
    static $searchSuccessValue = 'TEST';
    static $searchSuccessResult = 'Result(s) for';
    static $searchNotSuccessValue = '#';
    static $searchNotSuccessResult = 'Sorry – we couldn’t find what you are looking for.';
    static $searchAdvancedText = 'Advanced Search';
}