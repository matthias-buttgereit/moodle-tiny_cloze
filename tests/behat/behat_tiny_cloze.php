<?php

require_once(__DIR__.'/../../../../../../behat/behat_base.php');


use Behat\Mink\Exception\ExpectationException as ExpectationException;

class behat_tiny_cloze extends behat_base {

    /**
     * Checks if the given content is included in the Tiny editor iframe (queried by class name: "cloze-question-marker")
     *
     * @Then Tiny editor should contain :content
     *
     * @throws ExpectationException If content could not be found
     * @param string $content
     */
    public function test_tiny_cloze($content) {
       $result = "return document.getElementsByClassName('cloze-question-marker')[0].innerHTML.includes(".$content.")";

       if (!$result) {
        throw new ExpectationException("Could not find ".$content." in the Tiny editor.");
       }
    }
}