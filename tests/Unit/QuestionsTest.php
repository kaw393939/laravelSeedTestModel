<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Question;

class QuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $question = new Question();
        $question->title = 'my question';
        $question->body = 'my body';
        $question->type = 'public';

        $this->assertTrue($question->save());
    }

    public function testDelete() {

        $question = new Question();
        $question->title = 'my question';
        $question->body = 'my body';
        $question->type = 'public';
        $question->save();

        $this->assertTrue($question->delete());
    }

    public function testCollectionCount() {

        $questions = Question::All();
        $recordCount = $questions->count();

        $this->assertInternalType(IsType::TYPE_INT, $recordCount);

    }

}
