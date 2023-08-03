<?php


require_once(__DIR__.'/../../../../../../behat/behat_base.php');
require_once(__DIR__. '/../../../../../../tests/behat/behat_forms.php');


use Behat\Mink\Exception\ExpectationException as ExpectationException;

class behat_tiny_cloze extends behat_base {


    /**
     * This function is for testing!
     *
     * @Then the tiny editor field :field matches value :value
     *
     * @param $field the text that should be included in the tiny editor
     * @param $value
     * @throws ExpectationException
     */
    public function test_tiny_cloze($field, $value) {
        $new_value = "<p><span class=\"cloze-question-marker\" contenteditable=\"false\">".$value."</span></p>";

        $this->execute('behat_forms::the_field_matches_value', array($field, $new_value));
    }
}