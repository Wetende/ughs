<?php

namespace App\Services\Exam;

use App\Exceptions\EmptyRecordsException;
use App\Models\Exam;
use App\Models\Term;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ExamService
{
    /**
     * @var ExamRecordService
     */
    protected $examRecordService;

    /**
     * @var ExamSlotService
     */
    protected $examSlotService;

    public function __construct(ExamRecordService $examRecordService, ExamSlotService $examSlotService)
    {
        $this->examRecordService = $examRecordService;
        $this->examSlotService = $examSlotService;
    }

    /**
     * Get all exams in a term.
     *
     * @param int $term_id
     * @return Collection
     */
    public function getAllExamsInTerm(int $term_id)
    {
        return Exam::where('term_id', $term_id)->get();
    }

    /**
     * Get active exams in a term.
     *
     * @param int $term_id
     * @return Collection
     */
    public function getActiveExamsInTerm(int $term_id)
    {
        return Exam::where(['term_id' => $term_id, 'active' => true])->get();
    }

    /**
     * get an exam by it's id.
     *
     *
     * @return \App\Models\Exam
     */
    public function getExamById(int $id)
    {
        return Exam::find($id);
    }

    /**
     * Store a new exam.
     *
     * @param array $records
     * @return Exam
     */
    public function storeExam(array $records)
    {
        return Exam::create([
            'name'        => $records['name'],
            'description' => $records['description'],
            'term_id'    => $records['term_id'],
            'start_date' => $records['start_date'],
            'stop_date'  => $records['stop_date'],
        ]);
    }

    /**
     * Update an exam.
     *
     * @param Exam $exam
     * @param array $records
     * @return bool
     */
    public function updateExam(Exam $exam, array $records)
    {
        $exam->name = $records['name'];
        $exam->description = $records['description'];
        $exam->term_id = $records['term_id'];
        $exam->start_date = $records['start_date'];
        $exam->stop_date = $records['stop_date'];

        return $exam->save();
    }

    /**
     * set if exam is active or not .
     *
     *
     * @return void
     */
    public function setExamActiveStatus(Exam $exam, bool $active)
    {
        $exam->active = $active;
        $exam->save();
    }

    /**
     * Set result publish status for exam.
     *
     *@throws
     *
     * @return void
     */
    public function setPublishResultStatus(Exam $exam, bool $status)
    {
        if ($exam->examSlots()->count() <= 0 && $status == 1) {
            throw new EmptyRecordsException('Cannot publish result for exam without exam slots', 1);
        }

        $exam->publish_result = $status;
        $exam->save();
    }

    /**
     * Delete exam.
     *
     *
     * @return void
     */
    public function deleteExam(Exam $exam)
    {
        $exam->delete();
    }

    /**
     * Calculate total marks attainable in each subject across all exams in a term.
     *
     * @param Term $term
     *
     * @return int
     */
    public function totalMarksAttainableInTermForSubject(Term $term)
    {
        $totalMarks = 0;
        $exams = $term->exams->load('examSlots');
        //get all exam slots in exams
        foreach ($exams as $exam) {
            $totalMarks += $exam->examSlots->sum(['total_marks']);
        }

        return $totalMarks;
    }

    /**
     * Calculate total marks attainale accross all subjects in an exam.
     *
     *
     * @return int
     */
    public function calculateStudentTotalMarksInSubject(Exam $exam, User $user, Subject $subject)
    {
        return $this->examRecordService->getAllUserExamRecordInExamForSubject($exam, $user->id, $subject->id)->pluck('student_marks')->sum();
    }
}
