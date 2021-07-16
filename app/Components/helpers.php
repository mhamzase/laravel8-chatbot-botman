<?php

use Illuminate\Support\Str;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

function getAnswers($questions, $message)
{
      $words = implode('|', explode(' ', Str::lower($message)));
      $answers = [];
      foreach ($questions as $question) {

            $pattern = "/" . $message . "/i";
            if (preg_match($pattern, Str::lower($question['question']))) {
                  // if (count($answers) == 0) {
                  //       $answers[] = "Select the topic or write your question below.";
                  // }
                  $answers[] = Question::create('')
                  ->addButtons(
                        [Button::create($question['question'])->value($question['question'])],
                        [Button::create($question['answer'])->value($question['answer'])]
                  );
                  
            } else {
                  if (count($answers) < 0) {
                        $pattern = "/(" . $words . ")/i";
                        if (preg_match($pattern, Str::lower($question['question']))) {
                              $answers[] = $question['answer'];
                        } else {
                              foreach ($question['relevant_terms'] as $key => $relevantTerm) {
                                    if (preg_match($pattern, $relevantTerm)) {
                                          $answers[] = $question['answer'];
                                    }
                              }
                        }
                  }
            }
      }
      return $answers;
}
